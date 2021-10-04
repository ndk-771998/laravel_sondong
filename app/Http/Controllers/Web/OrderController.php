<?php

namespace App\Http\Controllers\Web;

use App\Entities\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use VCComponent\Laravel\Order\Actions\Order\CreateOrderAction;
use VCComponent\Laravel\Order\Contracts\ViewOrderControllerInterface;
use VCComponent\Laravel\Order\Entities\Order;
use VCComponent\Laravel\Order\Entities\OrderItem;
use VCComponent\Laravel\Order\Http\Controllers\Web\Order\OrderController as OrderOrderController;

class OrderController extends OrderOrderController implements ViewOrderControllerInterface 
{    
    public function create(Request $request)
    {
        $product = Product::where('slug', $request->get('slug'))->first();

        if (!$product) {
            return redirect()->back();
        }

        $message = [
            'username.required' => 'Nhập họ và tên của bạn.',
            'phone.required'    => 'Nhập số điện thoại của bạn.',
            'phone.numeric'     => 'Số điện thoại phải là các chữ số.',
            'email.required'    => 'Nhập địa chỉ email của bạn.',
            'email.email'       => 'Email phải nhập đúng định dạng.',
            'address.required'  => 'Nhập địa chỉ giao hàng hoặc ghi chú.'
        ];
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'phone'     => 'required|numeric',
            'address' => 'required',
            'email'     => 'required|email',
        ], $message);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->input('note') == null) {
            $order_note = 'Thanh toán : ' . $request->input('phone');
        } else {
            $order_note = $request->input('note');
        }

        $data = [
            'username' => $request->input('username'),
            'phone_number' => $request->input('phone'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'total' => $product->price,
            'order_note' => $order_note,
            'payment_method' => 1,
        ];

        if ($request->has(['district', 'provine'])) {
            $data['district'] = $request->input('district');
            $data['provine'] = $request->input('provine');
        }

        $order = $this->createOrder($data, $product);

        $this->sendMailOrder($order);

        return redirect()->back()->with('message-create-order-succeed', true)->withInput();
    }

    protected function createOrder($data, $product) 
    {
        $order = Order::create($data);

        $data = [
            'product_id' => $product->id,
            'quantity' => 1,
            'price' => $product->price,
            'order_id' => $order->id,
        ];

        OrderItem::create($data);

        $quantity_sold = $data['quantity'];
        $product_id    = $data['product_id'];

        $quantity_left = $product->quantity - $quantity_sold;

        Product::where('id', $product_id)->update([
            'quantity'      => $quantity_left,
            'sold_quantity' => $product->sold_quantity + $quantity_sold,
        ]);

        return $order->refresh();
    }
}
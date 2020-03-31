<?php

namespace VCComponent\Laravel\Order\Http\Controllers\Web\Order;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Validator;
use VCComponent\Laravel\Order\Actions\Order\CreateOrderAction;
use VCComponent\Laravel\Order\Entities\Cart;
use VCComponent\Laravel\Order\Entities\CartItem;
use VCComponent\Laravel\Order\Entities\OrderItem;
use VCComponent\Laravel\Payment\Actions\Vnpay\SendOrderAction;

class CreateOrderController extends BaseController {
    public function __construct(CreateOrderAction $createOder, SendOrderAction $payment) {

        $this->createOder = $createOder;
        $this->payment    = $payment;
    }

    public function __invoke(Request $request) {

        $validator = Validator::make($request->all(), [
            'last_name'    => 'required',
            'address'      => 'required',
            'phone_number' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->input('note') == null) {
            $order_note = 'Thanh toán : ' . $request->input('phone_number');
        } else {
            $order_note = $request->input('note');
        }

        $data = [
            'username'       => $request->input('first_name') . " " . $request->input('last_name'),
            'phone_number'   => $request->input('phone_number'),
            'email'          => $request->input('email'),
            'address'        => $request->input('address'),
            'total'          => $request->input('total'),
            'order_note'     => $order_note,
            'payment_method' => $request->input('payment_method'),
            'cart_id'        => $request->input('cart_id'),
        ];

        $order = $this->createOder->execute($data);

        $data = [
            'total'      => $request['total'],
            'user_id'    => $order->user_id,
            'order_note' => $order_note,
            'order_id'   => $order->cart_id,
        ];

        if ($request['payment_method'] == 2) {
            return $this->payment->excute($data);
        } else {
            return view('order::orderSuccess');
        }
    }
}

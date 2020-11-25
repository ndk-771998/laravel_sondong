<?php

namespace VCComponent\Laravel\Payment\Http\Controllers\Web;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use VCComponent\Laravel\Order\Entities\Order;
use VCComponent\Laravel\Payment\Traits\Helpers;

class PaymentController extends Controller
{
    use Helpers;

    public function __invoke(Request $request)
    {
        if ($request->all() == []) {
            return redirect('/');
        }

        $config = $this->config();

        if($config['vnp_Returnurl'] == ''){
            Order::where('cart_id', $data['order_id'])->delete();
            return "Config lỗi ! Vui lòng liên hệ với quản trị viên !";
        }

        $vnp_TmnCode    = $config['vnp_Url'];
        $vnp_HashSecret = $config['vnp_HashSecret'];
        $vnp_Url        = $config['vnp_Url'];
        $vnp_Returnurl  = $config['vnp_Returnurl'].'/payment';

        $inputData      = array();
        $returnData     = array();
        $data           = $request->all();

        foreach ($data as $key => $value) {
            if (substr($key, 0, 4) == "vnp_") {
                $inputData[$key] = $value;

            }
        }
        $vnp_SecureHash = $inputData['vnp_SecureHash'];
        unset($inputData['vnp_SecureHashType']);
        unset($inputData['vnp_SecureHash']);
        ksort($inputData);
        $i        = 0;
        $hashData = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashData = $hashData . '&' . $key . "=" . $value;
            } else {
                $hashData = $hashData . $key . "=" . $value;
                $i        = 1;
            }
        }
        $vnpTranId    = $inputData['vnp_TransactionNo'];
        $vnp_BankCode = $inputData['vnp_BankCode'];
        $secureHash   = hash('sha256', $vnp_HashSecret . $hashData);
        $Status       = 0;
        $order_id     = $inputData['vnp_TxnRef'];

        try {
            if ($secureHash == $vnp_SecureHash) {
                $order = Order::where('cart_id', $order_id)->first();
                if ($order !== NULL) {
                    if ($order["payment_status"] !== NULL && $order["payment_status"] == 1) {
                        if ($inputData['vnp_ResponseCode'] == '00') {
                            $order->update(['payment_status' => 2]);
                        } else {
                            $order->update(['payment_status' => 3]);
                        }

                        return view('order::orderSuccess');
                    } else {
                        $returnData['Message'] = 'Đơn hàng đã được thanh toán trước đó !';
                    }
                } else {
                    $returnData['Message'] = 'Không tìm thấy đơn hàng !';
                }
            } else {
                $returnData['Message'] = 'Chu ky khong hop le !';
            }
        } catch (Exception $e) {
            $returnData['Message'] = 'Unknow error';
        }

        return view('payment::alert')->with('alert', $returnData['Message']);
    }
}

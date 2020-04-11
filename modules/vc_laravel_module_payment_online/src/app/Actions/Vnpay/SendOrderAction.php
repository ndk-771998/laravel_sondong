<?php

namespace VCComponent\Laravel\Payment\Actions\Vnpay;

use VCComponent\Laravel\Payment\Traits\Helpers;
use VCComponent\Laravel\Order\Entities\Order;

class SendOrderAction {
    use Helpers;

    public function excute(array $data) {
        $config = $this->config();

        if($config['vnp_Returnurl'] == ''){
            Order::where('cart_id', $data['order_id'])->delete();
            return "Chưa config vnp_Returnurl cho Package Payment ! Chạy lệnh : php artisan vendor:pushlish -> payment";
        }

        $vnp_TmnCode    = $config['vnp_Url'];
        $vnp_HashSecret = $config['vnp_HashSecret'];
        $vnp_Url        = $config['vnp_Url'];
        $vnp_Returnurl  = $config['vnp_Returnurl'].'/payment';

        $inputData = array(
            "vnp_Version"    => "2.0.0",
            "vnp_TmnCode"    => $vnp_TmnCode,
            "vnp_Amount"     => $data['total'] * 100,
            "vnp_Command"    => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode"   => "VND",
            "vnp_IpAddr"     => $data['user_id'],
            "vnp_Locale"     => 'vn',
            "vnp_OrderInfo"  => $data['order_note'],
            "vnp_ReturnUrl"  => $vnp_Returnurl,
            "vnp_TxnRef"     => $data['order_id'],
        );
        ksort($inputData);
        $query    = "";
        $i        = 0;
        $hashdata = "";

        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . $key . "=" . $value;
            } else {
                $hashdata .= $key . "=" . $value;
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;

        if (isset($vnp_HashSecret)) {
            $vnpSecureHash               = hash('sha256', $vnp_HashSecret . $hashdata);
            $inputData['vnp_SecureHash'] = $vnpSecureHash;
            $vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' . $vnpSecureHash;
        }

        return redirect($vnp_Url);

    }
}

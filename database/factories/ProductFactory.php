<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entities\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name'           => $faker->randomElement([
            'HP EliteBook 850 G2 i7-5600U /Ram 8Gb/SSD . . .',
            'Dell e7480 i5-6300U/RAM8G/SSD256GB',
            'HP Probook 4520s /i5*M520/ RAM 4GB / 500 HDD',
            'Dell latitude E7240/i5*4300u/4G/128GB SSD',
            'Asus TUF Gaming F15 FX506LH-HN002T Core i5 10300H, 8GB, 512GB, GTX 1650, 15.6″ FHD',
        ]),
        'description'    => '<p><strong>Về thiết kế</strong></p>
            <p>HP Elitebook 850 G2 không khác gì so với người tiền nhiệm HP Elitebook 850 G1. Đáng nói, tốt nhất là kết nối wifi không dây mới Intel Wireless-AC 7265, hiện kiểm soát tất cả các chuẩn WLAN bao gồm 802.11ac (2×2, tối đa 867 Mbit/s) và Bluetooth 4.0. Ngoài ra, HP Elitebook 850 G2 tích hợp mô-đun LTE nhanh từ Qualcomm giúp truy cập internet với tốc độ nhanh và ổn định.</p>
            <p>Chiếc laptop HP Elitebook 850 G2 có thiết kế khá mỏng. Trọng lượng của nó có vẻ nhẹ hơn các dòng sản phẩm trước của HP nhưng vẫn còn nặng hơn một chút so với những sản phẩm hiện tại như Toshiba Tecra Z50 và Dell Latitude E7440. Nắp máy được làm từ chất liệu magie chống xước.</p>
            <p>Đây là chất lượng mà bạn vẫn thường thấy ở những chiếc xe hơi. Trong khi đó, phần thân được làm từ nhôm bóng màu bạc cao cấp tạo cho máy sự sang trọng, bóng bẩy. Ngoài ra, HP Elitebook 850 G2 được thiết kế với việc đáp ứng tiêu chuẩn MIL-STD-810 về độ bền. Vì thế, máy vẫn có thể chịu đựng được nhiệt độ khắc nghiệt hay áp suất cao. Đồng thời, bạn vẫn sẽ yên tâm máy hoàn toàn “khỏe mạnh” dù bị va đập nhẹ hay bị xóc trong balo khi bạn di chuyển trên đường.</p>
            <p><img src="/assets/images/products/laptop-5.png" alt="image"></p>
            <p><strong>Về bàn phím</strong></p>
            <p>HP Elitebook 850 G2 không khác gì so với người tiền nhiệm HP Elitebook 850 G1. Đáng nói, tốt nhất là kết nối wifi không dây mới Intel Wireless-AC 7265, hiện kiểm soát tất cả các chuẩn WLAN bao gồm 802.11ac (2×2, tối đa 867 Mbit/s) và Bluetooth 4.0. Ngoài ra, HP Elitebook 850 G2 tích hợp mô-đun LTE nhanh từ Qualcomm giúp truy cập internet với tốc độ nhanh và ổn định.</p>
            <p>Chiếc laptop HP Elitebook 850 G2 có thiết kế khá mỏng. Trọng lượng của nó có vẻ nhẹ hơn các dòng sản phẩm trước của HP nhưng vẫn còn nặng hơn một chút so với những sản phẩm hiện tại như Toshiba Tecra Z50 và Dell Latitude E7440. Nắp máy được làm từ chất liệu magie chống xước.</p>
            <p>Đây là chất lượng mà bạn vẫn thường thấy ở những chiếc xe hơi. Trong khi đó, phần thân được làm từ nhôm bóng màu bạc cao cấp tạo cho máy sự sang trọng, bóng bẩy. Ngoài ra, HP Elitebook 850 G2 được thiết kế với việc đáp ứng tiêu chuẩn MIL-STD-810 về độ bền. Vì thế, máy vẫn có thể chịu đựng được nhiệt độ khắc nghiệt hay áp suất cao. Đồng thời, bạn vẫn sẽ yên tâm máy hoàn toàn “khỏe mạnh” dù bị va đập nhẹ hay bị xóc trong balo khi bạn di chuyển trên đường.</p>',
        'quantity'       => rand(0, 20),
        'code'           => $faker->swiftBicNumber,
        'price'          => rand(500, 2500)*10000,
        'original_price' => 2000000,
        'author_id'      => rand(1, 3),
        'thumbnail'      => $faker->randomElement([
            '/assets/images/products/laptop-1.png',
            '/assets/images/products/laptop-2.png',
            '/assets/images/products/laptop-3.png',
            '/assets/images/products/laptop-4.png',
            '/assets/images/products/laptop-5.png',
            '/assets/images/products/laptop-6.png',
            '/assets/images/products/laptop-7.png',
            '/assets/images/products/laptop-8.png',
        ]),
        'sold_quantity' => rand(10, 100),
        'product_type'      => 'products',
        'sku'            => Str::random(32),
    ];
});

$factory->state(Product::class, 'printer', function (Faker $faker) {
    return [
        'product_type'      => 'printer',
        'thumbnail'         => $faker->randomElement([
            '/assets/images/products/printer-1.png',
            '/assets/images/products/printer-2.png',
            '/assets/images/products/printer-3.png',
            '/assets/images/products/printer-4.png',
            '/assets/images/products/printer-5.png',
        ]),
    ];
});


$factory->state(Product::class, 'accessory', function (Faker $faker) {
    return [
        'product_type'      => 'accessory',
        'thumbnail'         => $faker->randomElement([
            '/assets/images/products/printer-1.png',
            '/assets/images/products/printer-2.png',
            '/assets/images/products/printer-3.png',
            '/assets/images/products/printer-4.png',
            '/assets/images/products/printer-5.png',
        ]),
    ];
});

$factory->state(Product::class, 'hot', function () {
    return [
        'is_hot' => Product::HOT,
    ];
});

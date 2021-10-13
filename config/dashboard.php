<?php

return [
    'sections' => [
        [
            "label"  => "Thống kê",
            "order"  => 1,
            "widgets" => [
                [
                    "type" => "analytic",
                    "order" => 1,
                    "label" => "Monthly Revenue",
                    "slug" => "monthly_revenue"
                ],
                [
                    "type" => "analytic",
                    "order" => 2,
                    "label" => "Daily Revenue",
                    "slug" => "daily_revenue"
                ],
                [
                    "type" => "analytic",
                    "order" => 3,
                    "label" => "Monthly Visited",
                    "slug" => "monthly_visited"
                ],
                [
                    "type" => "analytic",
                    "order" => 4,
                    "label" => "Total Visited",
                    "slug" => "total_visited"
                ]
            ]
        ],
        [
            "label" => "Sản phẩm",
            "order" => 2,
            "widgets" => [
                [
                    "label" => "Đặt hàng",
                    "type" => "shortcut",
                    "order" => 1,
                    "url" => "/admin/order",
                    "color" => "#f53fc5",
                    "icon" => "/assets/icons/icon-white/product.svg"
                ],
                [
                    "label" => "Tạo mới sản phẩm",
                    "type" => "shortcut",
                    "order" => 2,
                    "url" => "/admin/products/create",
                    "color" => "#09f",
                    "icon" => "/assets/icons/icon-white/add product.svg"
                ],
                [
                    "label" => "Kho hàng",
                    "type" => "shortcut",
                    "order" => 3,
                    "url" => "#",
                    "color" => "#eca03c",
                    "icon" => "/assets/icons/icon-white/warehouse.svg"
                ],
                [
                    "label" => "Tạo mới bài viết",
                    "type" => "shortcut",
                    "order" => 4,
                    "url" => "/admin/posts/create",
                    "color" => "#09f",
                    "icon" => "/assets/icons/icon-white/addpage.svg"
                ]
            ]
        ],
        [
            "label" => "Chiến dịch",
            "order" => 3,
            "widgets" => [
                [
                    "label" => "Tạo mới chiến dịch",
                    "type" => "shortcut",
                    "order" => 1,
                    "url" => "#",
                    "color" => "#04d587",
                    "icon" => "/assets/icons/icon-white/marketing.svg"
                ],
                [
                    "label" => "Thống kê",
                    "type" => "shortcut",
                    "order" => 2,
                    "url" => "/admin/statistical",
                    "color" => "#e2c401",
                    "icon" => "/assets/icons/icon-white/statistical.svg"
                ],
                [
                    "label" => "Báo cáo",
                    "type" => "shortcut",
                    "order" => 3,
                    "url" => "/admin/statistical/report",
                    "color" => "#ff5d7f",
                    "icon" => "/assets/icons/icon-white/report.svg"
                ],
                [
                    "label" => "Thanh toán",
                    "type" => "shortcut",
                    "order" => 4,
                    "url" => "#",
                    "color" => "#2b4def",
                    "icon" => "/assets/icons/icon-white/pay.svg"
                ]
            ]
        ],
        [
            "label" => "Thiết lập",
            "order" => 4,
            "widgets" => [
                [
                    "label" => "Banner",
                    "type" => "shortcut",
                    "order" => 1,
                    "url" => "#",
                    "color" => "#00b894",
                    "icon" => "/assets/icons/icon-white/banner.svg"
                ],
                [
                    "label" => "Cấu hình nhanh",
                    "type" => "shortcut",
                    "order" => 2,
                    "url" => "/admin/system/configuration",
                    "color" => "#00b894",
                    "icon" => "/assets/icons/icon-white/layer.svg"
                ],
                [
                    "label" => "Người dùng",
                    "type" => "shortcut",
                    "order" => 3,
                    "url" => "#",
                    "color" => "#00b894",
                    "icon" => "/assets/icons/icon-white/customer.svg"
                ],
                [
                    "label" => "Menu danh mục",
                    "type" => "shortcut",
                    "order" => 4,
                    "url" => "#",
                    "color" => "#00b894",
                    "icon" => "/assets/icons/icon-white/menucategory.svg"
                ]
            ]
        ]
    ]

];

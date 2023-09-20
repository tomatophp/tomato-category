<?php

return [
    "for" => [
        "accounts"=> [
            "ar" => "الحسابات",
            "en" => "Accounts"
        ],
        "content"=> [
            "ar" => "المحتوي",
            "en" => "Content"
        ]
    ],
    "types" => [
        "type"=> [
            "ar" => "النوع",
            "en" => "Type"
        ],
        "status"=> [
            "ar" => "الحالة",
            "en" => "Status"
        ],
    ],
    "features" => [
        "category" => true,
        "types" => true
    ],

    "middelware" => ['auth:sanctum']
];

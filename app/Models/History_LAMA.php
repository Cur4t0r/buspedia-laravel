<?php

namespace App\Models;

class History
{
    // View banyak histories
    private static $order_histories = [
        [
            "order_id" => "1",
            "name" => "Juned",
            "slug" => "juned",
            "start" => "Jakarta",
            "finish" => "Bandung",
            "total_seat" => "2"
        ],
        [
            "order_id" => "2",
            "name" => "Maimunah",
            "slug" => "maimunah",
            "start" => "Palembang",
            "finish" => "Lampung",
            "total_seat" => "1"
        ],
        [
            "order_id" => "3",
            "name" => "Radi Norman",
            "slug" => "radi-norman",
            "start" => "Cirebon",
            "finish" => "Surabaya",
            "total_seat" => "1"
        ],
        [
            "order_id" => "4",
            "name" => "Udin",
            "slug" => "udin",
            "start" => "Bali",
            "finish" => "Lampung",
            "total_seat" => "1"
        ]
    ];

    public static function all()
    {
        return collect(self::$order_histories);
    }

    // View salah satu history
    public static function find($slug)
    {
        $histories = static::all();
        return $histories->firstWhere('slug', $slug);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class toko extends Model
{
    private static $list_toko = [
        [
            'id' => '1',
            'nama' => 'Toko Serba Guna',
            'des' => 'Toko Serba Guna menjual berbagai macam kebutuhan rumah tangga'
        ],
        [
            'id' => '2',
            'nama' => 'Toko Bangunan',
            'des' => 'Toko Bangunan menjual berbagai macam kebutuhan bangunan'
        ]
    ];

    // public static function all()
    // {
    //     return collect(self::$list_toko);
    // }

    public static function cari($id)
    {
        $toko = static::all();
        return $toko->firstWhere('id', $id);
    }

    use HasFactory;

    protected $filllabel = ['nama', 'des'];

    public function getRouteKeyName()
    {
        return 'nama';
    }
}
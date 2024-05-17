<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];


    public static function kodeJurusan()
    {
        $maxID = self::max('id');
        $newID = "JRG" . $maxID + 1;
        $newID = str_pad($newID, 4, "0", STR_PAD_LEFT);
        return $newID;
    }
}

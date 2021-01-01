<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thongtincanhan extends Model
{
    use HasFactory;


    protected $table = 'thongtincanhans';
    protected $fillable = [
        'tendangnhap',
        'matkhau',
    ];
}

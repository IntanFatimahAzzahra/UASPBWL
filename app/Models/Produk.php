<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = "tb_produk";
    protected $primaryKey = 'produk_id';
    protected $guarded = [];
    use HasFactory;
}

<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Makanan extends Model
{
    protected $table = 'table_makanan';

    protected $fillable = ['nama_menu', 'harga', 'deskripsi'];
}
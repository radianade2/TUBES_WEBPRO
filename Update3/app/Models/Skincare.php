<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Skincare extends Model{
    protected $table = 'datajawaban_tubeswebpro';
    protected $fillable = ['id', 'jenis', 'nama'];
}

?>

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skincare extends Model
{
    protected $table = 'kesimpulan';
    protected $fillable = ['moisturizer', 'serum', 'sunscreen'];
}

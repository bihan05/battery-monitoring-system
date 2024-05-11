<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BmsModel extends Model
{
    use HasFactory;
    protected $table = 'bms_data';
    protected $fillable = ['baterai', 'tegangan', 'hambatan_dalam', 'persen'];
}

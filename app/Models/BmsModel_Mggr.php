<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BmsModel_Mggr extends Model
{
    use HasFactory;
    protected $table = 'bms_mggr';
    protected $fillable = ['baterai', 'tegangan', 'hambatan_dalam', 'persen'];
}

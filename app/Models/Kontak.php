<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    protected $table='kontak';
    protected $fillable =['full_name','email','subject','tanggal','message'];
    
}

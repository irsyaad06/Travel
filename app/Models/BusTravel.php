<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusTravel extends Model
{
    use HasFactory;

    protected $table = 'bus_travel';

    protected $fillable = [
        
        'terminal',
        'jenis',
        'lokasi',
        'kontak',
    ];
}

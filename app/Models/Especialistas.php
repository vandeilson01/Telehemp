<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especialistas extends Model
{
    use HasFactory;
 
    protected $table = 'especialistas';
    
    protected $fillable = [
    'name',
    'surname',
    'img',
    'valid',
    'especialit',
    'details',
    ];
}

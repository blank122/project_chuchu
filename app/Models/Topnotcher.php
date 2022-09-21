<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topnotcher extends Model
{
    use HasFactory;

    protected $table = 'topnotchers';

    protected $fillable = [

        'topnotchers_name',
        'rank',
        'image'
    ];


}

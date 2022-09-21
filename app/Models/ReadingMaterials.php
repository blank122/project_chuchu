<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReadingMaterials extends Model
{
    use HasFactory;

    protected $table = 'reading_materials';

    protected $fillable = [

        'material_filename',
        'reading_material',
        
    ];
}

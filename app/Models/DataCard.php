<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataCard extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'type', 
        'color', 
        'cost', 
        'color_cost',
        'colorless_cost',
        'total_cost',
        'attack',
        'defense',
        'f_c',
        'description', 
        'set', 
        'to_be_evaluated',
        'to_be_evaluated_in_which_deck',
        'comment',
        'price',
        'expansion', 
        'cod_carta', 
        'name_en'
    ];
}

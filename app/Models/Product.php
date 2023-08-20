<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

Class Product extends Model
{
    //*Nombre de la tabla
    protected $table = 'Products';
    //*Clave primaria
    protected $primaryKey = 'id';
    //*Campos visibles
    protected $fillable = [
        'code', 
        'description',
        'category',
        'brand',
        'type_product',
        'unit',
        'color',
        'weight', 
        'price',
        'size',
    ];
    //*Campos ocultos
    protected $hidden = [
        'created_at datetime',
        'updated_at datetime',
        'deleted_at',
    ];
}
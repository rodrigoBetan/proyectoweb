<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property $id
 * @property $nombre
 * @property $imagen
 * @property $descripcion
 * @property $sctock
 * @property $precio
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Product extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'imagen' => 'required',
		'descripcion' => 'required',
		'sctock' => 'required',
		'precio' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','imagen','descripcion','sctock','precio'];

    public function categoris(){
      return $this->belongsTo(Categori::class,'id_Categoria');
    }
    public function pedidos(){
      return $this->hasMany(Pedido::class,'id');
    }


}

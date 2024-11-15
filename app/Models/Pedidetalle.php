<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pedidetalle
 *
 * @property $id
 * @property $Cantidad
 * @property $Precio_Total
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pedidetalle extends Model
{
    
    static $rules = [
		'Cantidad' => 'required',
		'Precio_Total' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Cantidad','Precio_Total'];
    public function pedidos(){
      return $this->belongsTo(Pedido::class,'id_pedidos');
    }
    public function products(){
      return $this->belongsTo(Product::class,'id_products');
    }


}

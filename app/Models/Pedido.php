<?php

namespace App\Models;

use App\Http\Controllers\PedidetalleController;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Pedido
 *
 * @property $id
 * @property $Subtotal
 * @property $Impuesto
 * @property $Total
 * @property $Entrega
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pedido extends Model
{
    
    static $rules = [
		'Subtotal' => 'required',
		'Impuesto' => 'required',
		'Total' => 'required',
		'Entrega' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Subtotal','Impuesto','Total','Entrega'];
    public function users(){
      return $this->belongsTo(User::class,'id_user');
    }

    public function pedidetalle(){
      return $this->hasMany(Pedidetalle::class,'id');
    }



}

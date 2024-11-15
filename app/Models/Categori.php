<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Categori
 *
 * @property $id
 * @property $nombre
 * @property $Descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Categori extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'Descripcion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','Descripcion'];

    use HasFactory;
    public function products(){
      return $this->hasMany(Product::class,'id');
    }



}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Maestro
 *
 * @property $id
 * @property $nombre
 * @property $email
 * @property $direccion
 * @property $fecha_naciminiento
 * @property $clase_asignada
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Maestro extends Model
{

    use HasFactory;

    static $rules = [
		'nombre' => 'required',
		'email' => 'required',
		'direccion' => 'required',
		'fecha_naciminiento' => 'required',
		'clase_asignada' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','email','direccion','fecha_naciminiento','clase_asignada'];



}

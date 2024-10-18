<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Car
 *
 * @property $id
 * @property $marca
 * @property $modelo
 * @property $año
 * @property $color
 * @property $precio
 * @property $kilometraje
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Car extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['marca', 'modelo', 'año', 'color', 'precio', 'kilometraje'];



}

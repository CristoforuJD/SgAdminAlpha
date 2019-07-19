<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $car_id
 * @property string $car_nome
 * @property string $car_ativo
 * @property string $car_dtsis
 * @property Fbordero[] $fborderos
 * @property Dlimite[] $dlimites
 */
class Carteira extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'dcarteira';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'car_id';

    /**
     * @var array
     */
    protected $fillable = ['car_nome', 'car_ativo', 'car_dtsis'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fborderos()
    {
        //return $this->hasMany('App\Fbordero', 'car_id', 'car_id');
        return $this->hasMany('App\Bordero', 'car_id', 'car_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function dlimites()
    {
        //return $this->hasMany('App\Dlimite', 'car_id', 'car_id');
        return $this->hasMany('App\Limite', 'car_id', 'car_id');
    }
}

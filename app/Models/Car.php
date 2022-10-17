<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = ['name','founded','description'];
    
    // protected $hidden = ['updated_at','created_at','id'];

    public function  CarModel()
    {
        return $this->hasMany(CarModel::class);
    }

    public function headquater()
    {
        return $this->hasOne(Headquater::class);
    }

    public function engines()
    {
        return $this->hasManyThrough(
            Engine::class,
            CarModel::class,
            'car_id',     //Foreign Key on CarModel table
            'model_id'    //Foreign Key on Engine table
        );
    }

    //Define a has one through relationship
    public function productionDate()
    {
        return $this->hasOneThrough(
        CarProduction::class,
        CarModel::class,
        'car_id',     //Foreign Key on CarModel table
        'model_id'
        );
    }
}

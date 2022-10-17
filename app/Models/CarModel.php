<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    use HasFactory;

    protected $table = 'cars_Models';

    protected $primaryKey = 'id';

    public function Car()
    {
        return $this -> belongsTo(Car::class);

    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;


    protected $fillable = ['order_no','vehicle_id','order_status'];

    /**
     * Get the vehicle assigned to the order
     */
    public function vehicles()
    {
        return $this->belongsTo(Vehicle::class,'vehicle_id','id');
    }
}

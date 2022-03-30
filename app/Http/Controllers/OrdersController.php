<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Traits\ApiCrudTrait;

class OrdersController extends Controller
{
    //
    use ApiCrudTrait;
    public function model()
    {
        return Order::class;
    }

    /** Return with relations */
    public function with()
    {
        $with = "vehicles";
        return $with;
    }

/** Validate User Input */
    public function validationRules($resource_id=0)
    {
        return ['order_no'=>'required','vehicle_id' => 'required','order_status'=>'required'];

    }
}

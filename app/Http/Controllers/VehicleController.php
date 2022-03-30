<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Traits\ApiCrudTrait;

class VehicleController extends Controller
{
    //
    use ApiCrudTrait;
    
    public function model()
    {
        return Vehicle::class;
    }

    public function with()
     {
         $with = "orders";
         return $with;
     }

    public function validationRules($resource_id=0)
    {
        return ['vehicle_no_plate'=>'required','capacity' => 'required','status'=>'required','model'=>'required'];

    }

}

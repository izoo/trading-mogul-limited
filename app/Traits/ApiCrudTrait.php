<?php
namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

trait ApiCrudTrait
{
    abstract function model();
    abstract function validationRules($resource_id = 0);
    abstract function with();


    /** Return All Records  */
    public function index()
    {
        return $this->model()::with($this->with())->get();
    }

    /**Save All Records To The  Database */
    
    public function create(Request $request)
    {
        Validator::make($request->all(),$this->validationRules())->validate();
         $status = "";
         $result = $this->model()::create($request->all());
         $result ? $status="success" : $status="error";
         return response()->json(['status'=>$status, 'results'=> $result]);
  
    }
    public function show($resource_id)
    {
        return $this->model()::findOrFail($resource_id);
    }
    public function update(Request $request,$resource_id)
    {
        $resource = $this->model()::findOrFail($resource_id);
        Validator::make($request->all(),
        $this->validationRules($resource_id))->validate();
        $result = $resource->update($request->all());
        $status = "";
        $result ? $status="success" : $status="error";
        return response()->json(['status'=>$status,'info'=>$this->index(),'results'=> $result]);
    }
    public function delete($resource_id)
    {
        $resource = $this->model()::findOrFail($resource_id);
        $status = "";
        $result = $resource->delete();
        $result ? $status="success" : $status="error";
        return response()->json(['status'=>$status,'info'=>$this->index(),'results'=> $result]);


    }
}
?>
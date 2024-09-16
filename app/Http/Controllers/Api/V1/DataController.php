<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{

    public function getData(Request $request)
    {


        if (isset($request['data']) && is_numeric($request['data'])){
            $data=Data::query()->where('id',$request['data'])->first();
            if ($data){
                $chiles=Data::query()->where('parent_id',$data['id'])->get();
                return response()->json([
                    'id'=>$data['id'],
                    'name'=>$data['name'],
                    'chiles'=>$chiles
                ]);


            }else{
                return response()->json(['message'=>'data not found'],404);
            }
        }else{
            return response()->json(['message'=>'data not found'],404);

        }






    }
    //
}

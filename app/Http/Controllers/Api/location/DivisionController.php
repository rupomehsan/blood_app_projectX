<?php

namespace App\Http\Controllers\Api\location;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Division;
use Validator;


class DivisionController extends Controller
{


    public function index(){
        try{
        $allDivisions = Division::all();
        return response([
            'status' => 'success',
            'data'   => $allDivisions
        ]);
         }catch(\Exception $e){
            return response([
                    'status'  => 'server_error',
                    'message' => $e->getMessage()
            ]);

        }

    }

    public function store(){

        try{

              $validate = Validator::make(request()->all(),[

                'name'    => 'required',

                ]);

                if($validate->fails()){
                    return response([

                        'status'  => 'validation_error',
                        'message' => $validate->errors()

                    ]);
                }
                $division = Division::create([

                    'name' => request('name'),

                ]);

               if($division){
                    
                       return response([
                        'status'  => 'success',
                        'message' => 'Divison Successfully Create'
                    ]);

               }
                
            
         }catch(\Exception $e){

                return response([
                    'status'  => 'server_error',
                    'message' => $e->getMessage()
                ]);
            }
    }


    public function show($id){

         try{

            $division = Division::where('_id',$id)->first();
            return response([

                'status' => 'success',
                'data'   => $division,

            ]);
         }catch(\Exception $e){

                return response([
                    'status'  => 'server_error',
                    'message' => $e->getMessage()
                ]);
            }


    }

    public function update($id){

           try{
               
                $updateDivision = Division::where('_id',$id)->first();
                $updateDivision->name = request('name') ?? $updateDivision->name ;
                $updateDivision->update();
                if($updateDivision){
                     return response([
                    'status'  => 'success',
                    'message' => 'Division Successfully Update'

                ]);
                }

               
            }catch(\Exception $e){

                return response([
                    'status'  => 'server_error',
                    'message' => $e->getMessage()
                ]);
          }

    }

    public function destroy($id){

          try{
                $division = Division::where('_id',$id)->first()->delete();
                return response([

                    'status'  => 'success',
                    'message' => 'Divison Successfully Delete'

                ]);
            }catch(\Exception $e){

                return response([
                    'status'  => 'server_error',
                    'message' => $e->getMessage()
                ]);

        }
    }
}

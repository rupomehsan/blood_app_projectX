<?php

namespace App\Http\Controllers\Api\location;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\District;
use Validator;

class DistrictController extends Controller
{
    
  
    public function index(){

        try{
            $allDistricts = District::all();
            return response([
                'status' => 'success',
                'data'   => $allDistricts
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
                'div_id'  => 'required',
                'name'    => 'required',
                ]);

                if($validate->fails()){
                    return response([
                        'status'  => 'validation_error',
                        'message' => $validate->errors()
                    ]);
                }
                $district = District::create([
                    'div_id'  => request('div_id'),
                    'name'    => request('name'),

                ]);

               if($district){
                    
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

            $district = District::where('_id',$id)->first();
            return response([

                'status' => 'success',
                'data'   => $district,

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
               
                $updateDistrict = District::where('_id',$id)->first();
                $updateDistrict->name = request('name');
                $updateDistrict->update();
                if($updateDistrict){
                     return response([
                    'status'  => 'success',
                    'message' => 'District Successfully Update'

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
                $district = District::where('_id',$id)->first()->delete();
                return response([

                    'status'  => 'success',
                    'message' => 'District Successfully Delete'

                ]);
            }catch(\Exception $e){

                return response([
                    'status'  => 'server_error',
                    'message' => $e->getMessage()
                ]);

        }
    }
}

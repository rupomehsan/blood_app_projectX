<?php

namespace App\Http\Controllers\Api\location;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Station;
use Validator;

class StationController extends Controller
{
   
    
     public function index(){
        try{
            $allStations = Station::all();
            return response([

                'status' => 'success',
                'data'   => $allStations

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

                'dis_id'  => 'required',
                'name'    => 'required',

                ]);

                if($validate->fails()){
                    return response([
                        'status'  => 'validation_error',
                        'message' => $validate->errors()
                    ]);
                }
                $station = Station::create([
                    'dis_id'  => request('dis_id'),
                    'name'    => request('name'),

                ]);

               if($station){
                    
                       return response([
                        'status'  => 'success',
                        'message' => 'Station Successfully Create'
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

            $station = Station::where('_id',$id)->first();
            return response([

                'status' => 'success',
                'data'   => $station,

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
               
                $updateStation = Station::where('_id',$id)->first();
                $updateStation->name = request('name');
                $updateStation->update();
                if($updateStation){
                     return response([

                    'status'  => 'success',
                    'message' => 'Station Successfully Update'

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
                $station = Station::where('_id',$id)->first()->delete();
                return response([

                    'status'  => 'success',
                    'message' => 'Station Successfully Delete'

                ]);
            }catch(\Exception $e){

                return response([
                    'status'  => 'server_error',
                    'message' => $e->getMessage()
                ]);

        }
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use Validator;

class RoleController extends Controller
{
    public function index(){
        try{
            $roles = Role::all();
            return response([
                'status' => 'success',
                'data' => $roles
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
            $role = Role::create([
                'name' => request('name'),

            ]);

            if($role){
                
                    return response([
                    'status'  => 'success',
                    'message' => 'Role Successfully Create'
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

            $role = Role::where('_id',$id)->first();
            return response([

                'status' => 'success',
                'data'   => $role,

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
               
                $updateRole = Role::where('_id',$id)->first();
                $updateRole->name = request('name');
                $updateRole->update();
                if($updateRole){
                    return response([
                    'status' => 'success',
                    'message' => 'Role Successfully Update'

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
                $role = Role::where('_id',$id)->first()->delete();
                return response([

                    'status'  => 'success',
                    'message' => 'Role Successfully Delete'

                ]);
            }catch(\Exception $e){

                return response([
                    'status' => 'server_error',
                    'message' => $e->getMessage()
                ]);

        }
    }
}

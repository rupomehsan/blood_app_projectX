<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ApplyPost;
use Validator;

class PostController extends Controller
{
   public function postapply(){
      try{

            $validate = Validator::make(request()->all(),[
                'date'      => 'required',
                
             ]);

            if($validate->fails()){
                    return response([
                        'status'  => 'validation_error',
                        'message' => $validate->errors()
                ]);
            }

            $post = ApplyPost::create([
                'user_id'           => auth()->id(),
                'post_id'           => request('post_id'),
                'date'        => request('date'),
              ]);

            if($post){
            
                return response([
                'status'  => 'success',
                'message' => 'Successfully Applyed'
                ]);

            }
                
            
         }catch(\Exception $e){

                return response([
                    'status'  => 'server_error',
                    'message' => $e->getMessage()
                ]);
        }
   
   }
}

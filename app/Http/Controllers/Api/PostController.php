<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Validator;

class PostController extends Controller
{
    
    public function index(){
        try{

            //   $allPosts = Post::with(['user'=>function($query){
            //  $query->with(['user_profile']); 
            // }])->latest()->paginate(10);
            // return response([
            //     'status' => 'success',
            //     'data'   => $allPosts
            // ]);
            $allPosts = Post::with(['user.user_profile'])->latest()->paginate(10);
            return response([
                'status' => 'success',
                'data'   => $allPosts
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
                'bloodgp'      => 'required',
                'quantity'     => 'required',
                'type_name'    => 'required',
                'title'        => 'required',
                'desc'         => 'required',
                'location'      => 'required',
                'hosp_name'     => 'required',
                'phone'          => 'required',
               
               
                
                
                
            ]);

            if($validate->fails()){
                    return response([
                        'status'  => 'validation_error',
                        'message' => $validate->errors()
                ]);
            }

            $post = Post::create([
                'user_id'           => auth()->id(),
                'bloodgp'           => request('bloodgp'),
                'quantity'        => request('quantity'),
                'type_name'          => request('type_name'),
                'title'             => request('title'),
                'desc'             => request('desc'),
                'location'        => request('location'),
                'hosp_name'           => request('hosp_name'),
                'phone'           => request('phone'),
                'alt_phone'        => request('alt_phone'),
                'religion'             => request('religion'),
                'emer_status'             => request('emer_status') ?? 0,
                'date'             => request('date'),
                'latlng'           => request('latlng')

            ]);

            if($post){
            
                return response([
                'status'  => 'success',
                'message' => 'Post Successfully Create'
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

            $post = Post::where('_id',$id)->first();
            return response([

                'status' => 'success',
                'data'   => $post,

            ]);

         }catch(\Exception $e){

                return response([
                    'status' => 'server_error',
                    'message' => $e->getMessage()
                ]);
            }


    }

    public function update($id){

           try{
              
                    
                $updatePost = Post::where('_id',$id)->first();
                $updatePost->post_desc     = request('post_desc') ??  $updatePost->post_desc;
                $updatePost->bloodgp_name  = request('bloodgp_name') ?? $updatePost->bloodgp_name;
                $updatePost->location      = request('location') ?? $updatePost->location;
                $updatePost->bloodgp_id    = request('bloodgp_id') ?? $updatePost->bloodgp_id;
                $updatePost->hospital_name = request('hospital_name') ??$updatePost->hospital_name;
                $updatePost->update();
                if($updatePost){
                     return response([
                    'status'  => 'success',
                    'message' => 'Post Successfully Update'

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
                $post = Post::where('_id',$id)->first()->delete();
                return response([

                    'status'  => 'success',
                    'message' => 'Post Successfully Delete'

                ]);
            }catch(\Exception $e){

                return response([
                    'status'  => 'server_error',
                    'message' => $e->getMessage()
                ]);

        }
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserProfile;
use Validator;
use Image;

class UserProfileController extends Controller
{
    public function index(){
        $allusers = UserProfile::all();
        return response([
            'status' => 'success',
            'data' => $allusers,
        ]);

    }

    public function store(){

        try{

            

                $userProfile = UserProfile::create([
                'user_id'      => null,
                'role_id'      => null,
                'div_id'       => request('div_id'),
                'dis_id'       => request('dis_id'),
                'sta_id'       => request('sta_id'),
                'bloodgp_id'   => request('bloodgp_id'),
                'religion'     => request('religion'),
                'fname'       => request('fname'),
                'lname'        => request('lname'),
                'phone'        => request('phone'),
                'alternate_phone'=> request('alternate_phone'),
                'address'       => request('address'),
                'gender'       => request('gender'),
                'date_of_birth' => request('date_of_birth'),
                // 'image'  => request('image'),
                ]);

                // $image = request()->file('image');
            
                // if (!file_exists('uploads/users')) {
                //         $dir = mkdir('uploads/users');
                //     }
                // if (request()->has('image')) {
                //         $image_url = 'uploads/users/' . Str::random(6) . '.' . $image->getClientOriginalExtension();
                //         Image::make($image)->save($image_url, 80);
                //         $userProfile[image] = $image_url;
                //     }

               if($userProfile){
                    
                       return response([
                        'status'  => 'success',
                        'message' => 'UserProfile Successfully Create'
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

            $userProfile = UserProfile::where('_id',$id)->first();
            return response([

                'status' => 'success',
                'data'   => $userProfile,

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
               
                $validate = Validator::make(request()->all(),[
                'name'      => 'required',
                'age'     => 'required',
                'desc'    => 'required',
                'image'        => 'required',
                'bloodgp'         => 'required',
                'address'      => 'required',
                'phone'          => 'required',     
                ]);

                if($validate->fails()){
                        return response([
                            'status'  => 'validation_error',
                            'message' => $validate->errors()
                    ]);
                }
               
                 $updateUser = UserProfile::where('_id',$id)->first();
                 $updateUser->div_id      = request('div_id') ?? updateUser->div_id;
                 $updateUser->dis_id      = request('dis_id') ?? updateUser->dis_id;
                 $updateUser->sta_id      = request('sta_id') ?? updateUser->sta_id;
                 $updateUser->bloodgp_id  = request('bloodgp_id') ?? updateUser->bloodgp_id;
                 $updateUser->religion    = request('religion') ?? updateUser->religion;
                 $updateUser->fname       = request('fname') ?? updateUser->fname;
                 $updateUser->lname       = request('lname') ?? updateUser->lname;
                 $updateUser->phone       = request('phone') ?? updateUser->phone;
                 $updateUser->alternate_phone  = request('alternate_phone') ?? $updateUser->alternate_phone;
                 $updateUser->address     = request('address') ?? updateUser->address;
                 $updateUser->gender      = request('gender') ?? updateUser->gender;
                 $updateUser->date_of_birth= request('date_of_birth') ?? updateUser->date_of_birth;
               
        
                $updateUser->update();
                if($updateUser){
                     return response([
                    'status'  => 'success',
                    'message' => 'UserProfile Successfully Update'

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
                $userProfile = UserProfile::where('_id',$id)->first()->delete();
                return response([

                    'status'  => 'success',
                    'message' => 'UserProfile Successfully Delete'

                ]);
            }catch(\Exception $e){

                return response([
                    'status'  => 'server_error',
                    'message' => $e->getMessage()
                ]);

        }
    }
}

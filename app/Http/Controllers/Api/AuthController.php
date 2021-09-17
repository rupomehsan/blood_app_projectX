<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserProfile;
use Validator;
use Hash;
use Auth;
use Exception;
class AuthController extends Controller
{
    public function registerView(){
        return view('auth.registration');
    }
    public function passwordRecover(){
        return view('auth.recover_pass');
    }

    public function register(){

    
          try{


                $validate = Validator::make(request()->all(),[
                // 'name'    => 'required|min:5',
                // 'phone'    => 'required',
                // 'password' => 'required',
                // 'email' =>    'required|unique:users',
                // 'age'    =>   'required',
                // 'weight' =>   'required',
                // 'gender' =>   'required',
                // 'bloodgp' =>   'required',
                ]);

                if($validate->fails()){
                    return response([
                        'status' => 'validation_error',
                        'message' => $validate->errors()
                    ]);
                }

                $name     = request('name');
                $email    = request('email');
                $password = request('password');

                $user = User::create([
            
                    'name'     =>  $name,
                    'email'    =>  $email,
                    'password' =>  Hash::make($password)
                    
                ]);

               if($user){
                    $userprofile = UserProfile::create([
                        'user_id'=> $user->_id,
                        'name'   => request('name'),
                        'phone'  => request('phone'),
                        'age'   => request('age'),
                        'phone'  => request('phone'),
                        'weight'   => request('weight'),
                        'gender'  => request('gender'),
                        'bloodgp'   => request('bloodgp'),
                        
                    ]);

                    if($userprofile){
                        return response([
                            'status' => 'success',
                            'message' => 'Registration Successfully Create'
                        ]);
                    }
               }

            }catch(\Exception $e){

                return response([
                    'status' => 'server_error',
                    'message' => $e->getMessage()
                ]);
            }

      
    }



    public function loginView(){
        return view('auth.login');
    }

    public function login(){

         try{

              $validate = Validator::make(request()->all(),[
                 'email'    => 'required|exists:users',
                 'password' => 'required'
                ]);

                if($validate->fails()){
                    return response([
                        'status' => 'validation_error',
                        'message' => $validate->errors()
                    ]);
                }

                if (!Auth::attempt($validate->validated())) {
                    return response([
                        'status' => "validation_error",
                        "message" => "credantial not match"
                    ]);
                }

                return response([
                    'status' => "success",
                    'message' => "successfully Login"
                ]);

            }catch(\Exception $e){

                return response([
                    'status' => 'server_error',
                    'message' => $e->getMessage()
                ]);
            }

    }
    // public function login()
    // {
    //   try {
    //         $validator = Validator::make(request()->all(), [
    //             'email' => 'required|email|exists:users',
    //             'password' => 'required'
    //         ]);
    //         if ($validator->fails()) {
    //             return response([
    //                 'status' => 'validate_error',
    //                 'data' => $validator->errors()
    //             ], 422);
    //         }
       
    //         if (!auth()->attempt($validator->validated())) {
    //             return response([
    //                 'status' => 'error',
    //                 'message' => "Credentials doesn't matched..."
    //             ], 401);
    //         }
    //         $accessToken = auth()->user()->createToken('authToken');
    //         return response([
    //             'status' => 'success',
    //             'message' => 'Successfully logged in...',
    //             'data' => [
    //                 'token' => 'Bearer ' . $accessToken->plainTextToken,
    //                 'user' => auth()->user()
    //             ]
    //         ], 200);
    //     } catch (Exception $e) {
    //         return response([
    //             'status' => 'serverError',
    //             'message' => $e->getMessage()
    //         ]);
    //     }
    // }

    // public function login(Request $request){
    //     try{
    //         $user = User::where('email',$request->email)->first();
    //         if(!$user || !Hash::check($request->password,$user->password)){
    //             return response([
    //                 'message' => ['Creadential not match'],
    //             ],404);
    //         }
    //         $token = $user->createToken('my-app-token')->plainTextToken;
            
    //         $response = [
    //             "user" => $user,
    //             "token" => $token
    //         ];

    //         return response($response,201);

    //        }catch(\Exception $e){

    //             return response([
    //                 'status' => 'server_error',
    //                 'message' => $e->getMessage()
    //             ]);
    //         }
      
    // }

     public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}

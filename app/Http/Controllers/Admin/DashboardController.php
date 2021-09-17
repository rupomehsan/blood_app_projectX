<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Models\Post;
use App\Models\ApplyPost;
use App\Models\UserProfile;

class DashboardController extends Controller
{
    public function index(){
        $posts = Post::orderBy('_id', 'desc')->paginate(10);
        // dd($posts);
        return view('admin.dashboard.index',compact('posts'));
    }
    public function post($id){
        $userpost = Post::where('_id',$id)->first(); 
        $applyuser = ApplyPost::where('post_id',$id)->where('user_id',auth()->id())->first();
        // dd($applyuser);
        return view('admin.dashboard.user',compact('userpost','applyuser'));
    }
    public function history(){
        return view('admin.history.index');
    }
    public function profile(){
         $userprofile = UserProfile::where('user_id',auth()->id())->first();
        return view('admin.profile.index',compact('userprofile'));
    }
    public function postCreate(){
       
        // dd($userprofile);
        return view('admin.post.index');
    }
}

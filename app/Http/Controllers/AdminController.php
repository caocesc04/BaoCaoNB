<?php

namespace App\Http\Controllers;
use App\User;
use Session;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function login(Request $required){
            if($required->isMethod('post')){
                $data =  $required->input();
                $user = User::where(['username'=>$data['username'],'password'=>$data['password'],'permission'=>'1'])->get();
               if(!$user->isEmpty())
                {
                     Session::put('adminSession',$data['username']);
                      return redirect('/home');
                }else{
                    return redirect('/')->with('flash_message_error','Bạn Điền Sai Mật Khẩu hoặc Tên Đăng Nhập (Kiểm Tra Lại )');
                    }
            }
        return view('admin.admin_login');
    }

   
}

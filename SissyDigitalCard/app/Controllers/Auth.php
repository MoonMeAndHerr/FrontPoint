<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function Login()
    {
    $username = request()->getPost('user');
    $password = request()->getPost('p');
    
    $modelemployee=new \App\Models\ModelEmployee();
    $data=$modelemployee
        ->where("username",$username)
        ->where("password",$password)
        ->first();
        
    if ($data){
    $userlevel=$data->userlevel;
    if ($userlevel=='admin'){
        session()->set("username",request()->getPost('user'));
        session()->set("userlevel","admin");
        echo"success login admin";
        return redirect()->to('/admin');
    }else if ($userlevel=='user'){
        session()->set("username",request()->getPost('user'));
        session()->set("userlevel","user");
        echo"success login user";
        return redirect()->to('/user');
    }
    }else{
        echo "wrong username/password";
        //echo "<meta http-equiv='REFRESH' content=>";
        die();
    }
    
    }
    
}

     

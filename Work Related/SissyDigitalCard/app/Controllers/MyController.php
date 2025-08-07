<?php

namespace App\Controllers;

class MyController extends BaseController
{
    public function ManageFood()
    {
        if(request()->getPost("btnInsert")!==null)
        {
            $x=request()->getPost("foodname");
            $y=request()->getPost("foodprice");
            $foodmodel= new\App\Models\ModelFood();
            $newdata=[
                "name"=>$x,
                "price"=>$y
                ];
            $foodmodel->insert($newdata);
            return redirect()->to("/food");
        }
        return view('welcome message');
    }
}

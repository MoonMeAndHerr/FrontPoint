<?php

namespace App\Controllers;

class User extends BaseController
{
    public function UpdateProfile()
    {
        if (request()->getPost("btnUpdate") !== null) {
            $fullname = request()->getPost("fullname");
            $password = request()->getPost("password");
            $id = request()->getPost("id");
            $username = session()->get("username");

            $model = new \App\Models\ModelPengguna();
            $data = [
                "fullname" => $fullname,
                "password" => $password,
            ];
            $model->where("username", $username)
                  ->set($data)
                  ->update();

            // ✅ Set Flashdata untuk update berjaya
            session()->setFlashdata("success", "Profile updated successfully!");

            return redirect()->to("viewprofile");
        }

        else if (request()->getPost("btnUpload") !== null) {
            $file = request()->getFile("uploadedfile");
            $filename = $file->getClientName();

            $extension = $file->guessExtension();
            $newfilename = session()->get("username") . "." . $extension;

            $file->move("profiles", $newfilename, true);

            $model = new \App\Models\ModelPengguna();
            $data = ["userpic" => $newfilename];
            $username = session()->get("username");

            $model->where("username", $username)
                  ->set($data)
                  ->update();

            // ✅ Set Flashdata untuk upload berjaya
            session()->setFlashdata("success", "Photo uploaded successfully!");

            return redirect()->to("viewprofile");
        }

        return "profile";
    }
    
    public function ManageUser()
    {
        if (request()->getPost("btnInsert") !== null) {
            return view("admin/manageuser/add");
        }
        
        else if (request()->getPost("btnInsertConfirm") != null) {
           
            $fullname = request()->getPost("fname");
            $username = request()->getPost("u");
            $password = request()->getPost("p");
            $userlevel = request()->getPost("level");
        
            $newdata = [
            "fullname" => $fullname,
            "username" => $username,
            "password" => $password,
            "userlevel" => $userlevel
            ];

            $um = new \App\Models\ModelPengguna();
            $um->insert($newdata);
            return redirect()->to("/admin");
        }
        else if (request()->getPost("btnEdit")!==null){
            $ID = request()->getPost("ID");
            $um = new \App\Models\ModelPengguna();
            $data = $um->where("ID",$ID)->first();
            $x=[
                "data" =>$data
                ];
            return view("admin/manageuser/edit",$x);
        }
        else if (request()->getPost("btnEditConfirm")!==null){
            $fullname = request()->getPost("fname");
            $username = request()->getPost("u");
            $password = request()->getPost("p");
            $userlevel = request()->getPost("level");
            $id = request()->getPost("ID");
            $newdata = [
                "fullname" =>$fullname,
                "username" =>$username,
                "password" =>$password,
                "userlevel" =>$userlevel,
                ];
            $um = new \App\Models\ModelPengguna();
            $um->where("ID",$id)
            ->set($newdata)
            ->update();
            return redirect()->to("/admin");
        }
         if (request()->getPost("btnDelete")!==null){
            $ID = request()->getPost("ID");
            $um = new \App\Models\ModelPengguna();
            $um->where("ID",$ID)->delete();
            return redirect()->to("/admin");
        }
        return "manage user" ;
    }
       
}
    
    
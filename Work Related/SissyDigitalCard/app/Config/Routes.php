<?php

use CodeIgniter\Router\RouteCollection;

$routes->view('/mainlayout', "layout/index");
//$routes->view('list','employee');

$routes->view('/mainlayout', "layout/index");
$routes->post('/update_profile',"User::UpdateProfile");

$routes->view('/viewprofile',"form_profile");
$routes->post("/manageuser", "User::ManageUser");


$routes->post("/managefood", "MyController::ManageFood");


$routes->get("/food",function (){
    return view ("managefood");
    
});

$routes->get("/list",function (){
    return view ("employee");
    
});

$routes->get("test","Auth::Test");
$routes->view('/admin', 'admin/main');
$routes->view('/user', 'user/main');

$routes->post('/login',"Auth::Login");

$routes->view('/', 'index');
$routes->view('/about', 'about');
$routes->view('/contact', 'contact');
$routes->view('/pricing', 'pricing');
$routes->view('/service', 'service');
$routes->view('/problemsolution', 'problemsolution');

$routes->post('/login', function() {
    $username = request()->getPost('user');
    $password = request()->getPost('p');

    if (request()->getPost('user') == "admin" && request()->getPost('p') == "admin123") {
        session()->set("username", request()->getPost('user'));
        session()->set("userlevel", "admin");
        echo "success login admin";
    } else if (request()->getPost('user') == "user" && request()->getPost('p') == "user123") {
        session()->set("username", request()->getPost('user'));
        session()->set("userlevel", "user");
        echo "success login user";
    } else {
        echo "Wrong username/password";
        die();
    }
});
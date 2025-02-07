<?php 
namespace App\Controllers\Back;

use App\Core\Controller; 
use App\Core\View; 
use App\Models\User;

class UserController extends Controller{
    public function index(){
        $userModel = new User();
        $users = $userModel->getAllUsers();

        View::render('back/users.twig' , ['users' => $users]);
    }

    public function create(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $name = $_POST['full_name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $userModel = new User();
            $userModel->createUser($name , $email , $password);

            header("Location:  /login");
        }

        View::render('front/signup.twig');
    }
}
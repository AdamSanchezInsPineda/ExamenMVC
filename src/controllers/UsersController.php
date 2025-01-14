<?php

class UsersController extends Controller{
    protected $user;

    public function __construct()
    {
        $this->user = new User();
    }

    function login(){
        $this->render("Users/login");
    }

    function adminLogin(){
        $this->render("Users/admin");
    }

    function register(){
        $this->render("Users/register");
    }

    function signup(){
        if ($this->user->checkMatricula($_POST)) {
            $this->render("Users/register", ["error" => "Matricula ja existeix a la basede dades"]);
        } else {
            $this->user->createUser($_POST);

            header("Location: /");
        }
    }

    function logout(){
        session_start();
        session_unset();
        session_destroy();

        header("Location: /");
    }

    function signin(){
        if ($this->user->checkUser($_POST)){
            session_start();
            $_SESSION["matricula"] = $_POST["matricula"];
            header("Location: /multas");
        } else {
            $this->render("Users/login", ["error" => "Nom o password incorrects"]);
        }
    }

    function adminSignin(){
        if ($this->user->checkAdmin($_POST)){
            session_start();
            $_SESSION["user"] = $_POST["user"];
            header("Location: /admin/multas");
        } else {
            $this->render("Users/login", ["error" => "Nom o password incorrects"]);
        }
    }
}
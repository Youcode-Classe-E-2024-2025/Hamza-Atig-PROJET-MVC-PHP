<?php 
namespace App\Controllers\Front;

use App\Core\Controller;
use App\Core\View; 
class HomeController extends Controller {
    public function index() {
        View::render('front/home.twig', ['message' => 'Bienvenue sur la page d\'accueil!']);
    }

    public function signup() {
        View::render('front/signup.twig', ['message' => 'Bienvenue sur la page d\'accueil!']);
    }

    public function login() {
        View::render('front/login.twig', ['message' => 'Bienvenue sur la page d\'accueil!']);
    }

    public function home() {
        View::render('front/home.twig', ['message' => 'Bienvenue sur la page d\'accueil!']);
    }

    public function verif(){
        View::render('front/Article.twig', ['message' => 'Bienvenue sur la page d\'accueil!']);
    }
}
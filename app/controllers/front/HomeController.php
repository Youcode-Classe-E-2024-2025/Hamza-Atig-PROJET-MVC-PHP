<?php 
namespace App\Controllers\Front;

use App\Core\Controller;
use App\Core\View; 
class HomeController extends Controller {
    public function index() {
        View::render('front/login.twig', ['message' => 'Bienvenue sur la page d\'accueil!']);
    }
}
<?php 
namespace App\Controllers\Front;

use App\Core\Controller; 
use App\Core\View;
use App\Core\Database;

class ArticleController extends Controller{
    public function show($id){
        $articleModel = new Article();
        $article = $articleModel->getArticleById($id);

        if(!$article){
            echo "Article introuvable.";
            return;
        }

        View::render('front/article.twig',['article' => $article]);
    }
}
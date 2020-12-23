<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController {

    /**
     * @Route("/hello/{prenom}/{age}",name="hello")
     * @Route("/hello", name="hello_base")
     * Page bonjour
     *
     * @return void
     */
    public function hello($prenom = "mon ptit gars ",$age = "j'ai rien"){
        return $this->render(
            'hello.html.twig',
            [
                'prenom' => $prenom,
                'age' => $age 
            ]
        );
    }


    /**
     * @Route("/", name="homepage")
     */

    public function home(){

        $prenoms = ["Guillaume" => 23, "Artyom" => 10, "Kiryu" => 15];
        
        return $this->render(
            'home.html.twig' , 
            [ 
                'title' => "Bonjour le monde lol",
                'age' => 18,
                'tableau' => $prenoms
            ]
        );
    }



}

?>
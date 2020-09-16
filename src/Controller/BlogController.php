<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends AbstractController
{

    public function index()
    {
      return $this->render('blog/index.html.twig');
    }

    public function add()
    {
      return new Response('<h1>Page d\'ajout d\'article</h1>');
    }

    public function show($url)
    {
      return new Response('<h1>Vous êtes sur la page '. $url .'</h1>');
    }

    public function edit($id)
    {
      return new Response('<h1>Vous êtes dans le menu d\'édition de l\'article '. $id .'</h1>' );
    }

    public function remove($id)
    {
      return new Response('<h1>Voulez-vous effacer l\'article n' . $id . '</h1>');
    }

}

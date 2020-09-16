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
      return $this->render('blog/add.html.twig');
    }

    public function show($url)
    {
      return $this->render('blog/show.html.twig', [
        'slug' => $url
      ]);
    }

    public function showDefault(){
      return new Response('<h1>Rechercher un article</h1>');
    }

    public function edit($id)
    {
      return $this->render('blog/edit.html.twig',[
        'slug' =>$id
      ]);
    }

    public function remove($id)
    {
      return new Response('<h1>Voulez-vous effacer l\'article n' . $id . '</h1>');
    }

}

<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController {


  /**
  * @Route("/")
  */

  public function homepage()

  {
      return new Response("Site totalement normal");

  }

  /**
  * @Route("/news/{slug}")
  */

  public function show($slug) {

      $comments = [
          'Ce mec est vraiment incroyable!',
          'Putain comment il est beau',
          'Choqué du charisme de cet homme',
      ];

      dump($slug,$this);

    return $this -> render('article/show.html.twig',[
        'title' => ucwords(str_replace('_','_',$slug)),
        'comments' => $comments
    ]);

  }
}

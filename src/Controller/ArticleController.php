<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
{
    /**
     * @Route("/")
     *
     * @return Response
     */
    public function homepage()
    {
        return new Response('hello, world!');
    }

    /**
     * @Route("/news/{slug}")
     *
     * @param $slug
     *
     * @return Response
     */
    public function show(string $slug)
    {
        return new Response('The slug is: '.$slug);
    }
}

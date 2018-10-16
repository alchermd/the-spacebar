<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
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
        $comments = [
            'I totally agree.',
            'Seems plausible, but have you considered...',
            'No, totally wrong. SMH',
        ];

        return $this->render('article/show.html.twig', [
            'title' => ucwords(str_replace('-', ' ', $slug)),
            'comments' => $comments,
        ]);
    }
}

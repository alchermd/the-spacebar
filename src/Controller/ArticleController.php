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
        return $this->render('article/homepage.html.twig');
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
            'slug' => $slug,
        ]);
    }

    /**
     * @Route("/news/{slug}/heart", methods={"POST"})
     *
     * @param $slug
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function toggleArticleHeart(string $slug)
    {
        return $this->json(['hearts' => rand(5, 100)]);
    }
}

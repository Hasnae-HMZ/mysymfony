<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LuckyController extends AbstractController
{
    #[Route('/page1', name: 'page1')]
    public function page1(): Response
    {
        return $this->render('page1.html.twig', [
            'page_name' => 'page 1',
        ]);
    }

    #[Route('/page2', name: 'page2')]
    public function page2(): Response
    {
        return $this->render('page2.html.twig', [
            'page_name' => 'page 2',
        ]);
    }

    #[Route('/page3', name: 'page3')]
    public function page3(): Response
    {
        return $this->render('page3.html.twig', [
            'page_name' => 'page 3',
        ]);
    }
}
?>
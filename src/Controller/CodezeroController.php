<?php

namespace App\Controller;

use App\Entity\Category;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CodezeroController extends AbstractController
{
    #[Route('/', name: 'app_codezero')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $Category = $entityManager->getRepository(Category::class)->findAll();

           # $number = random_int(0, $max);



        return $this->render('index.html.twig', ['categories' => $Category]);
    }


}

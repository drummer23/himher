<?php

namespace App\Controller;

use App\Repository\QuestionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class QuestionRestController extends AbstractController
{
    /**
     * @Route("/question", name="question_rest")
     */
    public function index(QuestionRepository $questionRepository)
    {
        return $this->json($questionRepository->findAll());
    }
}

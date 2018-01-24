<?php namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class CalculatorController extends Controller {
    public function index(Request $request) {
        $form = $this->createFormBuilder()
            ->add('input', TextType::class)
            ->getForm();

        return $this->render('calculator/calculator.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}

<?php namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class CalculatorController extends Controller {
    public function show() {
        return $this->render('calculator/calculator.html.twig');
    }
}

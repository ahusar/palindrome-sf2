<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\DemoBundle\Form\PalindromeType;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

    public function indexAction(Request $request)
    {
        $form = $this->createForm(new PalindromeType());
        $form->handleRequest($request);
        if ($form->isValid()) {
            $palindromeService = $this->get('palindrome.service');
            $formData = $form->getData();
            $result = $palindromeService->palindrome($formData['word']);
            if ($result) {
                $request->getSession()->getFlashBag()
                        ->add('success', 'The word is a palindrome');
            } else {
                $request->getSession()->getFlashBag()
                        ->add('error', 'The word is not a palindrome');
            }
        }

        return $this->render('AcmeDemoBundle:Default:index.html.twig', array('form' => $form->createView()));
    }

}
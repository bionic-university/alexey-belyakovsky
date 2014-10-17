<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NewsController extends Controller
{
    public function TestAction()
    {
        return $this->render('AcmeDemoBundle:News:Test.html.twig', array(
                // ...
            ));    }

}

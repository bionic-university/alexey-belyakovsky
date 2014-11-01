<?php

namespace BionicUniversity\Bundle\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class TextController extends Controller
{
    /**
     * @Route("/reverse")
     * @Template()
     */
    public function reverseAction()
    {
        return array(
            'text' => $this->get('text_transformer')->transform('My test word'),
        );
    }

}

<?php

namespace BionicUniversity\Bundle\BlogBundle\Text;

use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

/**
 * Created by PhpStorm.
 * User: spartak
 * Date: 30.10.14
 * Time: 21:07
 */

class TextTransformer implements DataTransformerInterface {

    /**
     * @var InverterInterface
     */
    private $textReverser;


    public function __construct(InverterInterface $textReverser)
    {
        $this->textReverser = $textReverser;
    }

    public function transform($value)
    {
        return $this->reverseText($value);
    }

    public function reverseTransform($value)
    {
        return $this->reverseText($value);
    }

    private function reverseText($value)
    {
        if(strlen($value) < 1) {
            throw new TransformationFailedException('Empty value');
        }

        return $this->textReverser->invert($value);
    }
}
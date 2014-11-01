<?php
/**
 * Reverse text.
 */

namespace BionicUniversity\Bundle\BlogBundle\Text;


class TextInverter implements InverterInterface{

    public function invert($text)
    {
        $toReturn = array();

        $valueLength = strlen($text);
        for($x = $valueLength -1; $x >=0 ; $x--) {
            $toReturn[] = $text[$x];
        }

        return implode("", $toReturn);
    }
} 
<?php

namespace Acme\DemoBundle\Services;

class PalindromeService
{

    /**
     *
     * @param type $string
     * @return type
     */
    public function palindrome($string)
    {
        $string = preg_replace("/[^a-zA-Z0-9]+/", "", $string);

        return strtolower($string) == strrev(strtolower($string));
    }

}
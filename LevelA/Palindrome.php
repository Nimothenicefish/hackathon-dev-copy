<?php

namespace Hackathon\LevelA;

class Palindrome
{
    private $str;

    public function __construct($str)
    {
        $this->str = $str;
    }

    /**
     * This function creates a palindrome with his $str attributes
     * If $str is abc then this function return abccba
     *
     * @TODO
     * @return string
     */
    public function generatePalindrome()
    {
        return sprintf('%s%s', $this->str, implode('', array_reverse(preg_split('//u', $this->str, -1, PREG_SPLIT_NO_EMPTY))));
    }

}

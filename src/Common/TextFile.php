<?php

namespace PhpSped\Common;

class TextFile
{
    private $lineBreak = "\r\n";    

    function __construct()
    {

    }

    function arrayToLines(array $fields)
    {
        $lines = '';
        foreach ($fields as $field) {
            if (is_array($field)) {
                if ($lines <> '') {
                    $lines .= $this->lineBreak;
                }
                $lines .= $this->arrayToLines($field);
            } else {
                if ($lines === '') {
                    $lines .= '|';
                }
                $lines .= $field.'|';
            }
        }

        return $lines;
    }

    function clearText()
    {
        $this->content = '';
    }

    function getText()
    {
        return $this->content;
    }
}
<?php

namespace PhpSped\EfdIcmsIpi\Bloco0;

class Bloco0
{
    protected $lines = [];
    private $textFile;

    function __construct()
    {
        $this->textFile = new \PhpSped\Common\TextFile();
    }

    function insertRegistro($objeto)
    {
        $campos        = get_object_vars($objeto);
        $this->lines[] = $campos;
    }

    private function contaLinhasBloco()
    {
        $qtdLinhas    = count($this->lines) + 1;
        $registro0990 = new Registro0990($qtdLinhas);
        $this->insertRegistro($registro0990);
    }

    function getText()
    {
        $this->textFile->clearText();
        $this->contaLinhasBloco();
        return $this->textFile->arrayToLines($this->lines);        
    }
    
}
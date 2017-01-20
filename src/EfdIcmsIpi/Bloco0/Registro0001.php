<?php

namespace PhpSped\EfdIcmsIpi\Bloco0;

class Registro0001
{
    public $REG = '0001';
    public $IND_MOV;

    /**
     * Abertura do bloco 0
     * @param type $IND_MOV 0 - Bloco com dados / 1 - Bloco sem dados
     */
    function __construct($IND_MOV)
    {
        $this->IND_MOV = $IND_MOV;
    }
}
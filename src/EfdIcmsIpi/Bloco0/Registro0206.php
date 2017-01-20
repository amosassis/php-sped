<?php

namespace PhpSped\EfdIcmsIpi\Bloco0;

class Registro0206
{
    public $REG = '0206';
    public $COD_COMB;

    /**
     * Codigo de produto conforme tabela ANP
     * @param type $COD_COMB Codigo do produto conforme tabela ANP
     */
    function __construct($COD_COMB)
    {
        $this->COD_COMB = $COD_COMB;
    }
}
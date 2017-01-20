<?php

namespace PhpSped\EfdIcmsIpi\Bloco0;

class Registro0450
{
    public $REG = '0450';
    public $COD_INF;
    public $TXT;

    /**
     * Tabela de informacao complementar do documento fiscal
     * @param type $COD_INF
     * @param type $TXT
     */
    function __construct($COD_INF, $TXT)
    {
        $this->COD_INF = $COD_INF;
        $this->TXT     = $TXT;
    }
}
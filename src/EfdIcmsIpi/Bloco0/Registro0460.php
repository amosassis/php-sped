<?php

namespace PhpSped\EfdIcmsIpi\Bloco0;

class Registro0460
{
    public $REG = '0460';
    public $COD_OBS;
    public $TXT;

    /**
     * Tabela de observacoes do lancamento fiscal
     * @param type $COD_OBS Codigo da observacao do lancamento fiscal
     * @param type $TXT Descricao da observacao do lancamento fiscal
     */
    function __construct($COD_OBS, $TXT)
    {
        $this->COD_OBS = $COD_OBS;
        $this->TXT     = $TXT;
    }
}
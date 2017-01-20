<?php

namespace PhpSped\EfdIcmsIpi\Bloco0;

class Registro0400
{
    public $REG = '0400';
    public $COD_NAT;
    public $DESCR_NAT;

    /**
     * Tabela de natureza da operacao / prestacao
     * @param type $COD_NAT Codigo da natureza da operacao
     * @param type $DESCR_NAT Descricao da natureza da operacao
     */
    function __construct($COD_NAT, $DESCR_NAT)
    {
        $this->COD_NAT   = $COD_NAT;
        $this->DESCR_NAT = $DESCR_NAT;
    }
}
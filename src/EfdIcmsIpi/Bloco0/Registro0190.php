<?php

namespace PhpSped\EfdIcmsIpi\Bloco0;

class Registro0190
{
    public $REG = '0190';
    public $UNID;
    public $DESCR;

    /**
     * Identificacao das unidades de medida
     * @param type $UNID Codigo da unidade de medida
     * @param type $DESCR Descricao da unidade de medida
     */

    function __construct($UNID, $DESCR)
    {
        $this->UNID  = $UNID;
        $this->DESCR = $DESCR;
    }
}
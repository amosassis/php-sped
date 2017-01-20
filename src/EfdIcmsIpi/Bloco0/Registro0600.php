<?php

namespace PhpSped\EfdIcmsIpi\Bloco0;

class Registro0600
{
    public $REG = '0600';
    public $DT_ALT;
    public $COD_CCUS;
    public $CCUS;

    /**
     * Centro de custos
     * @param type $DT_ALT Data inclusao/alteracao
     * @param type $COD_CCUS Codigo centro de custos
     * @param type $CCUS Nome do centro de custos
     */
    function __construct($DT_ALT, $COD_CCUS, $CCUS)
    {
        $this->DT_ALT   = $DT_ALT;
        $this->COD_CCUS = $COD_CCUS;
        $this->CCUS     = $CCUS;
    }
}
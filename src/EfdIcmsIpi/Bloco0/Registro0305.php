<?php

namespace PhpSped\EfdIcmsIpi\Bloco0;

class Registro0305
{
    public $REG = '0305';
    public $COD_CCUS;
    public $FUNC;
    public $VIDA_UTIL;

    /**
     * Informacao sobre a utilizacao do bem
     * @param type $COD_CCUS Codigo do centro de custo onde utilizado
     * @param type $FUNC Descricao da funcao do bem
     * @param type $VIDA_UTIL Vida util do bem (em meses)
     */
    function __construct($COD_CCUS, $FUNC, $VIDA_UTIL)
    {
        $this->COD_CCUS  = $COD_CCUS;
        $this->FUNC      = $FUNC;
        $this->VIDA_UTIL = $VIDA_UTIL;
    }
}
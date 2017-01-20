<?php

namespace PhpSped\EfdIcmsIpi\Bloco0;

class Registro0205
{
    public $REG = '0205';
    public $DESCR_ANT_ITEM;
    public $DT_INI;
    public $DT_FIM;
    public $COD_ANT_ITEM;

    /**
     * Alteracao do item
     * @param type $DESCR_ANT_ITEM Descricao anterior do item
     * @param type $DT_INI Data inicio de util da descricao
     * @param type $DT_FIM Data fimnal de util da descricao
     * @param type $COD_ANT_ITEM Codigo anterior do item relacionado a informacao
     */
    function __construct($DESCR_ANT_ITEM, $DT_INI, $DT_FIM, $COD_ANT_ITEM)
    {
        $this->DESCR_ANT_ITEM = $DESCR_ANT_ITEM;
        $this->DT_INI         = $DT_INI;
        $this->DT_FIM         = $DT_FIM;
        $this->COD_ANT_ITEM   = $COD_ANT_ITEM;
    }
}
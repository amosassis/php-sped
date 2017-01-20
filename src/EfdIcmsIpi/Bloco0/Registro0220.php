<?php

namespace PhpSped\EfdIcmsIpi\Bloco0;

class Registro0220
{
    public $REG = '0220';
    public $UNID_CONV;
    public $FAT_CONV;

    /**
     * Fatores de conversao de unidades
     * @param type $UNID_CONV Unidade a ser convertida na unidade de estoque
     * @param type $FAT_CONV Fator de conversao para converter (multiplicar)
     */
    function __construct($UNID_CONV, $FAT_CONV)
    {
        $this->UNID_CONV = $UNID_CONV;
        $this->FAT_CONV  = $FAT_CONV;
    }
}
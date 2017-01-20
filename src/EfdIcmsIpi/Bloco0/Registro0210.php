<?php

namespace PhpSped\EfdIcmsIpi\Bloco0;

class Registro0210
{
    public $REG = '0210';
    public $COD_ITEM_COMP;
    public $QTD_COMP;
    public $PERDA;

    /**
     * Consumo especifico padronizado
     * @param type $COD_ITEM_COMP Codigo do item (componente/insumo) (campo 2)
     * @param type $QTD_COMP Quantidade do item para se produzir uma unidade
     * @param type $PERDA Perda ou quebra normal para uma unidade
     */
    function __construct($COD_ITEM_COMP, $QTD_COMP, $PERDA)
    {
        $this->COD_ITEM_COMP = $COD_ITEM_COMP;
        $this->QTD_COMP      = $QTD_COMP;
        $this->PERDA         = $PERDA;
    }
}
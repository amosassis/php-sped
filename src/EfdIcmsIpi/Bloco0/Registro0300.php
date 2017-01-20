<?php

namespace PhpSped\EfdIcmsIpi\Bloco0;

class Registro0300
{
    public $REG = '0300';
    public $COD_IND_BEM;
    public $IDENT_MERC;
    public $DESCR_ITEM;
    public $COD_PRNC;
    public $COD_CTA;
    public $NR_PARC;

    /**
     * Cadastro de bens ou componentes do ativo imobilizado
     * @param type $COD_IND_BEM Codigo individualizado do bem
     * @param type $IDENT_MERC Identificacao (1 - Bem / 2 - Componente)
     * @param type $DESCR_ITEM Descricao do bem
     * @param type $COD_PRNC Codigo do cadastro do bem principal (Caso componente)
     * @param type $COD_CTA Codigo da conta analitica do bem ou componente
     * @param type $NR_PARC Numero de parcelas a serem apropriadas (max 48)
     */
    function __construct($COD_IND_BEM, $IDENT_MERC, $DESCR_ITEM, $COD_PRNC,
                         $COD_CTA, $NR_PARC)
    {
        $this->COD_IND_BEM = $COD_IND_BEM;
        $this->IDENT_MERC  = $IDENT_MERC;
        $this->DESCR_ITEM  = $DESCR_ITEM;
        $this->COD_PRNC    = $COD_PRNC;
        $this->COD_CTA     = $COD_CTA;
        $this->NR_PARC     = $NR_PARC;
    }
}
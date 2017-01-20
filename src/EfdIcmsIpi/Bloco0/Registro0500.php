<?php

namespace PhpSped\EfdIcmsIpi\Bloco0;

class Registro0500
{
    public $REG = '0500';
    public $DT_ALT;
    public $COD_NAT_CC;
    public $IND_CTA;
    public $NIVEL;
    public $COD_CTA;
    public $NOME_CTA;

    /**
     * Plano de contas contabeis
     * @param type $DT_ALT Data da inclusao/alteracao
     * @param type $COD_NAT_CC Codigo da natureza da conta (01,02,03,04,05,09)
     * @param type $IND_CTA Indicador do tipo de conta (S - Sintetica / A - Analitica)
     * @param type $NIVEL Nivel da conta analitica/grupo
     * @param type $COD_CTA Condigo da conta analitica/grupo
     * @param type $NOME_CTA Nome da conta analitica/grupo
     */
    function __construct($DT_ALT, $COD_NAT_CC, $IND_CTA, $NIVEL, $COD_CTA,
                         $NOME_CTA)
    {
        $this->DT_ALT     = $DT_ALT;
        $this->COD_NAT_CC = $COD_NAT_CC;
        $this->IND_CTA    = $IND_CTA;
        $this->NIVEL      = $NIVEL;
        $this->COD_CTA    = $COD_CTA;
        $this->NOME_CTA   = $NOME_CTA;
    }
}
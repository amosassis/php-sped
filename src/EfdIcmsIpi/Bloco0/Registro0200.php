<?php

namespace PhpSped\EfdIcmsIpi\Bloco0;

class Registro0200
{
    public $REG = '0200';
    public $COD_ITEM;
    public $DESCR_ITEM;
    public $COD_BARRA;
    public $COD_ANT_ITEM;
    public $UNID_INV;
    public $TIPO_ITEM;
    public $COD_NCM;
    public $EX_IPI;
    public $COD_GEN;
    public $COD_LST;
    public $ALIQ_ICMS;
    public $CEST;

    /**
     * Tabela de Identificacao do Item (Produto e Servico)
     * @param type $COD_ITEM Codigo do item
     * @param type $DESCR_ITEM Descricao do item
     * @param type $COD_BARRA Codigo de barras
     * @param type $COD_ANT_ITEM Codigo anterior do item
     * @param type $UNID_INV Unidade de medida estoque
     * @param type $TIPO_ITEM Tipo do item (00,01,02,03,04,05,06,07,08,09,10,99)
     * @param type $COD_NCM Cod NCM Item
     * @param type $EX_IPI Cod EX Conforme a TIPI
     * @param type $COD_GEN Codigo de genero do item (vide tabela 4.2.1 do manual)
     * @param type $COD_LST Codigo do servico (anexo I lei Compl Fed num 116/03)
     * @param type $ALIQ_ICMS Aliquota ICMS operacoes internas
     * @param type $CEST Codigo CEST
     */
    function __construct($COD_ITEM, $DESCR_ITEM, $COD_BARRA, $COD_ANT_ITEM,
                         $UNID_INV, $TIPO_ITEM, $COD_NCM, $EX_IPI, $COD_GEN,
                         $COD_LST, $ALIQ_ICMS, $CEST)
    {
        $this->COD_ITEM     = $COD_ITEM;
        $this->DESCR_ITEM   = $DESCR_ITEM;
        $this->COD_BARRA    = $COD_BARRA;
        $this->COD_ANT_ITEM = $COD_ANT_ITEM;
        $this->UNID_INV     = $UNID_INV;
        $this->TIPO_ITEM    = $TIPO_ITEM;
        $this->COD_NCM      = $COD_NCM;
        $this->EX_IPI       = $EX_IPI;
        $this->COD_GEN      = $COD_GEN;
        $this->COD_LST      = $COD_LST;
        $this->ALIQ_ICMS    = $ALIQ_ICMS;
        $this->CEST         = $CEST;
    }
}
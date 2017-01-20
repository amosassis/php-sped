<?php

namespace PhpSped\EfdIcmsIpi\Bloco0;

class Registro0000
{
    public $REG = '0000';
    public $COD_VER;
    public $COD_FIN;
    public $DT_INI;
    public $DT_FIM;
    public $NOME;
    public $CNPJ;
    public $CPF;
    public $UF;
    public $IE;
    public $COD_MUN;
    public $IM;
    public $SUFRAMA;
    public $IND_PERFIL;
    public $IND_ATIV;


    /**
     * Abertura do aruivo digital e identificacao da entidade
     * @param type $COD_VER Cod da versão do leiaute conf a tabela no Ato COTEPE
     * @param type $COD_FIN Cod da finalidade do arquivo 0 - Original / 1 - Subs
     * @param type $DT_INI Data inicial das inf
     * @param type $DT_FIM Data final das inf
     * @param type $NOME Nome empresarial da entidade
     * @param type $CNPJ Numero do CNPJ
     * @param type $CPF Numero do CPF Apenas PF
     * @param type $UF Sigla da UF
     * @param type $IE Insc Estadual
     * @param type $COD_MUN Codigo do Municipio
     * @param type $IM Inscr Municipal
     * @param type $SUFRAMA Inscr SUFRAMA
     * @param type $IND_PERFIL Perfil de apresent (A, B, C)
     * @param type $IND_ATIV Indic de tipo de ativ (0,1)
     */

    function __construct($COD_VER, $COD_FIN, $DT_INI, $DT_FIM, $NOME, $CNPJ,
                         $CPF, $UF, $IE, $COD_MUN, $IM, $SUFRAMA, $IND_PERFIL,
                         $IND_ATIV)
    {
        $this->COD_VER    = $COD_VER;
        $this->COD_FIN    = $COD_FIN;
        $this->DT_INI     = $DT_INI;
        $this->DT_FIM     = $DT_FIM;
        $this->NOME       = $NOME;
        $this->CNPJ       = $CNPJ;
        $this->CPF        = $CPF;
        $this->UF         = $UF;
        $this->IE         = $IE;
        $this->COD_MUN    = $COD_MUN;
        $this->IM         = $IM;
        $this->SUFRAMA    = $SUFRAMA;
        $this->IND_PERFIL = $IND_PERFIL;
        $this->IND_ATIV   = $IND_ATIV;
    }
}
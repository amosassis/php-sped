<?php

namespace PhpSped\EfdIcmsIpi\Bloco0;

class Registro0175
{
    public $REG = '0175';
    public $DT_ALT;
    public $NR_CAMPO;
    public $CONT_ANT;

    /**
     * Alteracao da tabela de cadastro de participante
     * @param type $DT_ALT Data de alteracao
     * @param type $NR_CAMPO Numero do campo (de 03 a 13, exceto 07)
     * @param type $CONT_ANT Conteudo anterior do campo
     */
    function __construct($DT_ALT, $NR_CAMPO, $CONT_ANT)
    {
        $this->DT_ALT   = $DT_ALT;
        $this->NR_CAMPO = $NR_CAMPO;
        $this->CONT_ANT = $CONT_ANT;
    }
}
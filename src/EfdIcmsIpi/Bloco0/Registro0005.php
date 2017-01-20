<?php

namespace PhpSped\EfdIcmsIpi\Bloco0;

class Registro0005
{
    public $REG = '0005';
    public $FANTASIA;
    public $CEP;
    public $END;
    public $NUM;
    public $COMPL;
    public $BAIRRO;
    public $FONE;
    public $FAX;
    public $EMAIL;

    /**
     * Dados complementares da entidade
     * @param type $FANTASIA Nome de fantasia
     * @param type $CEP Cep
     * @param type $END Endereco
     * @param type $NUM Numero
     * @param type $COMPL Complemento
     * @param type $BAIRRO Bairro
     * @param type $FONE Telefone
     * @param type $FAX Fax
     * @param type $EMAIL E-mail
     */

    function __construct($FANTASIA, $CEP, $END, $NUM, $COMPL, $BAIRRO, $FONE,
                         $FAX, $EMAIL)
    {
        $this->FANTASIA = $FANTASIA;
        $this->CEP      = $CEP;
        $this->END      = $END;
        $this->NUM      = $NUM;
        $this->COMPL    = $COMPL;
        $this->BAIRRO   = $BAIRRO;
        $this->FONE     = $FONE;
        $this->FAX      = $FAX;
        $this->EMAIL    = $EMAIL;
    }
}
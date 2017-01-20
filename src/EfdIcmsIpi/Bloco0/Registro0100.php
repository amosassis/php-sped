<?php

namespace PhpSped\EfdIcmsIpi\Bloco0;

class Registro0100
{
    public $REG = '0100';
    public $NOME;
    public $CPF;
    public $CRC;
    public $CNPJ;
    public $CEP;
    public $END;
    public $NUM;
    public $COMPL;
    public $BAIRRO;
    public $FONE;
    public $FAX;
    public $EMAIL;
    public $COD_MUN;

    /**
     * Dados do contabilista
     * @param type $NOME Nome do contabilista
     * @param type $CPF CPF
     * @param type $CRC Numero de inscricao no Cons Reg de Contabilidade
     * @param type $CNPJ CNPJ
     * @param type $CEP CEP
     * @param type $END Endereco
     * @param type $NUM Numero
     * @param type $COMPL Complemento do endereco
     * @param type $BAIRRO Bairro
     * @param type $FONE Telefone
     * @param type $FAX Fax
     * @param type $EMAIL E-mail
     * @param type $COD_MUN Codigo do municipio
     */
    function __construct($NOME, $CPF, $CRC, $CNPJ, $CEP, $END, $NUM, $COMPL,
                         $BAIRRO, $FONE, $FAX, $EMAIL, $COD_MUN)
    {
        $this->NOME    = $NOME;
        $this->CPF     = $CPF;
        $this->CRC     = $CRC;
        $this->CNPJ    = $CNPJ;
        $this->CEP     = $CEP;
        $this->END     = $END;
        $this->NUM     = $NUM;
        $this->COMPL   = $COMPL;
        $this->BAIRRO  = $BAIRRO;
        $this->FONE    = $FONE;
        $this->FAX     = $FAX;
        $this->EMAIL   = $EMAIL;
        $this->COD_MUN = $COD_MUN;
    }
}
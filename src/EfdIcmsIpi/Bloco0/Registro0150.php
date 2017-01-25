<?php

namespace PhpSped\EfdIcmsIpi\Bloco0;

class Registro0150
{
    public $REG = '0150';
    public $COD_PART;
    public $NOME;
    public $COD_PAIS;
    public $CNPJ;
    public $CPF;
    public $IE;
    public $COD_MUN;
    public $SUFRAMA;
    public $END;
    public $NUM;
    public $COMPL;
    public $BAIRRO;

    /**
     * Tabela de cadastro do participante
     * @param type $COD_PART Identificacao do participante no arquivo
     * @param type $NOME Nome do participante
     * @param type $COD_PAIS Codigo do pais do partifipante
     * @param type $CNPJ CNPJ do participante
     * @param type $CPF CPF do participante
     * @param type $IE Inscr Estadual
     * @param type $COD_MUN Codigo do municipio
     * @param type $SUFRAMA Inscr do SUFRAMA
     * @param type $END Endereco do participante
     * @param type $NUM Numero
     * @param type $COMPL Complemento
     * @param type $BAIRRO Bairro
     */
    function __construct($COD_PART, $NOME, $COD_PAIS, $CNPJ, $CPF, $IE,
                         $COD_MUN, $SUFRAMA, $END, $NUM, $COMPL, $BAIRRO)
    {
        $this->COD_PART = $COD_PART;
        $this->NOME     = $NOME;
        $this->COD_PAIS = $COD_PAIS;
        $this->CNPJ     = $CNPJ;
        $this->CPF      = $CPF;
        $this->IE       = $IE;
        $this->COD_MUN  = $COD_MUN;
        $this->SUFRAMA  = $SUFRAMA;
        $this->END      = $END;
        $this->NUM      = $NUM;
        $this->COMPL    = $COMPL;
        $this->BAIRRO   = $BAIRRO;
    }
}
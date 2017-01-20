<?php

namespace PhpSped\EfdIcmsIpi\Bloco0;

class Registro0015
{
    public $REG = '0015';
    public $UF_ST;
    public $IE_ST;

    /**
     * Dados do contribuinte substituto ou responsavel pelo ICMS destino
     * @param type $UF_ST Sigla da unidade de federacao substituto
     * @param type $IE_ST Inscr Estadual do contrib substituto
     */
    function __construct($UF_ST, $IE_ST)
    {
        $this->UF_ST = $UF_ST;
        $this->IE_ST = $IE_ST;
    }
}
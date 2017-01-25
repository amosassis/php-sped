<?php
include __DIR__.'/../vendor/autoload.php';

/*
 * Exemplo Bloco 0
 *
 */


$bloco0 = new PhpSped\EfdIcmsIpi\Bloco0\Bloco0();

//0000
$registro0000 = new PhpSped\EfdIcmsIpi\Bloco0\Registro0000('008', '0',
    '01012017', '31012017', 'EMPRESA TESTE LTDA', '00000000000000', '', 'SP',
    '000000000000', '3513801', '', '', 'A', '1');
$bloco0->insertRegistro($registro0000);

//0001
$registro0001 = new PhpSped\EfdIcmsIpi\Bloco0\Registro0001('0');
$bloco0->insertRegistro($registro0001);

//0005
$registro0005 = new PhpSped\EfdIcmsIpi\Bloco0\Registro0005('AM10', '09900000',
    'RUA DO TESTE', '123', '', 'CENTRO', '1155669988', '', 'user@server.com');
$bloco0->insertRegistro($registro0005);

//0015
$registro0015 = new PhpSped\EfdIcmsIpi\Bloco0\Registro0015('MG', '000000000000');
$bloco0->insertRegistro($registro0015);

//0100
$registro0100 = new PhpSped\EfdIcmsIpi\Bloco0\Registro0100('CONTADOR',
    '00000000000', '12345', '', '09999000', 'ENDERECO TESTE', '1000', 'SL 245',
    'CENTRO', '1155669988', '', 'contador@super.com', '3515801');
$bloco0->insertRegistro($registro0100);

//0150
$registro0150 = new PhpSped\EfdIcmsIpi\Bloco0\Registro0150('C001',
    'CLIENTE TESTE LTDA', '1058', '00000000000000', '', '000000000000', '3513801',
    '', 'RUA DO CLIENTE', '500', '', 'CENTRO');
$bloco0->insertRegistro($registro0150);

//0175
$registro0175 = new PhpSped\EfdIcmsIpi\Bloco0\Registro0175('05012017', '3',
    'NOME ANTIGO CLIENTE LTDA');
$bloco0->insertRegistro($registro0175);

//0190
$registro0190 = new PhpSped\EfdIcmsIpi\Bloco0\Registro0190('UN', 'UNIDADE');
$bloco0->insertRegistro($registro0190);

//0200
$registro0200 = new PhpSped\EfdIcmsIpi\Bloco0\Registro0200('0001',
    'PRODUTO TESTE', '9788536500317', '', 'UN', '00', '00000000', '', '', '',
    '18', '');
$bloco0->insertRegistro($registro0200);

//0205
$registro0205 = new PhpSped\EfdIcmsIpi\Bloco0\Registro0205('PRODUTO PARA TESTE',
    '10012017', '23012017', '');
$bloco0->insertRegistro($registro0205);

//0206
$registro0206 = new PhpSped\EfdIcmsIpi\Bloco0\Registro0206('810102001');
$bloco0->insertRegistro($registro0206);

//0300
$registro0300 = new PhpSped\EfdIcmsIpi\Bloco0\Registro0300('01', '1',
    'BEM EXEMPLO', '', '1', '1');
$bloco0->insertRegistro($registro0300);

//0305
$registro0305 = new PhpSped\EfdIcmsIpi\Bloco0\Registro0305('1',
    'SOLUCIONADOR DE PROBLEMAS', '60');
$bloco0->insertRegistro($registro0305);

//400
$registro0400 = new PhpSped\EfdIcmsIpi\Bloco0\Registro0400('5102',
    'Venda de mercadorias adquiridas de terceiros');
$bloco0->insertRegistro($registro0400);

//0450
$registro0450 = new PhpSped\EfdIcmsIpi\Bloco0\Registro0450('1',
    'INFORMACOES DO DOCUMENTO FISCAL');
$bloco0->insertRegistro($registro0450);

//0460
$registro0460 = new PhpSped\EfdIcmsIpi\Bloco0\Registro0460('1',
    'OBSERVACOES DO LANCAMENTO FISCAL');
$bloco0->insertRegistro($registro0460);

//0500
$registro0500 = new PhpSped\EfdIcmsIpi\Bloco0\Registro0500('05012017', '01',
    'A', '0', '1', 'CONTA CONTABIL');
$bloco0->insertRegistro($registro0500);

//0600
$registro0600 = new PhpSped\EfdIcmsIpi\Bloco0\Registro0600('05012017', '1',
    'CENTRO DE CUSTO');
$bloco0->insertRegistro($registro0600);
echo $bloco0->getText();






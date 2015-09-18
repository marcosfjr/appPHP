<?php

class Conectar_db{
    public $conexao;
    private $usuario;
    private $senha;
    private $host;
    private $banco;
    
    public function __construct($pUsuario='root',$pSenha='Hyuuga91934963',$pHost='localhost',$pBanco='carro'){
        $this->usuario = $pUsuario;
        $this->senha = $pSenha;
        $this->host = $pHost;
        $this->banco = $pBanco;
        error_reporting( 7 );
        
        $this->conectar();
    }
    
    private function conectar(){
        $this->conexao = mysql_connect($this->host,$this->usuario,$this->senha) or die('Impossivel conectar com o Banco: '.mysql_error());
        mysql_select_db($this->banco) or die('Não foi possivel selecionar o Banco :'.mysql_error());
    }
    public function desconectar(){
        mysql_close($this->conexao);
    } 
 
    
}
$cnx = new Conectar_db();
        $emps = mysql_query('SELECT * 
                            FROM carro
                            ORDER BY cod_carro');
        $num_reg = mysql_num_rows($emps);
        
        $emps2 = mysql_query('SELECT * 
                            FROM carro
                            ORDER BY cod_carro');
        $num_reg2 = mysql_num_rows($emps2);
        
?>

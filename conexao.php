$servidor = "localhost";
$usuario = "root";
$senha = "";

$banco = myslq_connect($servidor, $usuario, $senha) or
die("Não foi pssivel conectar ao servidor do BD")
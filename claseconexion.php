<?php
require_once("C:\wamp64\www\SECLAP\conexiones\const_bd.php");


class Conexion{
    private $server = SERVIDOR;
    private $user = USUARIO;
    private $bd = BaseDatos;
    private $password = CONTRASEÑA;
    private $port = PUERTO;
    private $objetoCon;
function __construct(){
    try {
        $dns = "pgsql:host=$this->server;port=$this->port;dbname=$this->bd";
        $this->objetoCon = new PDO($dns,$this->user,$this->password);
        $this->objetoCon->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $error) {
        echo '
    <body bgcolor="#59afec">
    <div style="display: flex; justify-content: center; flex-direction: column; align-items: center; text-align: center; font-size: 20px; color: #f0f9ff; font-family: Century Gothic;">
        <h1>¡Oh oh!<br>Algo salió mal durante la conexión a la Base de datos...</h1>
        <img src="../../multimedia/errorMael.png" alt="" width="40%">
        <h1>Intenta de nuevo más tarde...</h1>
        <br>
        <a href="../../paginas/ingreso.html" style="text-decoration: none; font-size: 50px;">Regresar</a>
    </div>
    </body>
    '.$error->getMessage();
    }
}

function getobjetoCon(){
    return $this->objetoCon;   
}
}

#$obejto = new Conexion();


?>
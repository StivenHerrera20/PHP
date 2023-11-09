<?php
class MySql
{
    private $ipServidor = "localhost";
    private $usuarioBase = 'root';
    private $contrasena = '';

    private $conexion;

    private $resultadoConsulta;


    //Metodo para conectar a la base de datos 
    public function conectar()
    {
        $this->conexion = mysqli_connect($this->ipServidor, $this->usuarioBase, $this->contrasena);
    }

    public function desconectar()
    {
        mysqli_close($this->conexion);
    }


    public function efectuarConsulta($consulta)
    {
        mysqli_query($this->conexion, "SET lc_time_names = 'es_ES'");
        mysqli_query($this->conexion, "SET NAMES 'utf8'");
        mysqli_query($this->conexion, "SET CHARACTER SET utf8");

        return $this->resultadoConsulta = mysqli_query($this->conexion, $consulta);
    }
}

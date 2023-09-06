<?php

//Clase para conexiones
class MySQL
{
    //datos de validacion para la conexion
    private $ipServidor = "localhost";
    private $usuarioBase = 'root';
    private $contrasena = '';

    private $conexion;

    //Metodo para conectar la base de datos
    public function conectarBD()
    {
        $this->conexion = mysqli_connect($this->ipServidor, $this->usuarioBase, $this->contrasena);
    }

    //metodo que realiza la consulta
    public function efectuarConsulta($consulta)
    {
        mysqli_query($this->conexion, "SET lc_time_names = 'es_ES'");
        //Añade el uso de caracteres especiales como tildes con el formato utf8
        mysqli_query($this->conexion, "SET NAMES 'utf8'");
        //mysqli_query($this->conexion, "SET CHARACTER = 'utf8'");


        $this->resultadoConsulta = mysqli_query($this->conexion, $consulta);

        return $this->resultadoConsulta;
    }

    //Metodo que cierra la conexion
    public function desconectar()
    {
        mysqli_close($this->conexion);
    }
};

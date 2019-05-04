<?php

class ClaseUsuario {
    /* ATRIBUTOS */

    private $IdUsuario;
    private $Cedula;
    private $Nombre;
    private $Apellido;
    private $Telefono;
    private $Email;
    private $Usuario;
    private $Contrasena;
    private $Rol;

    /* CONSTRUCTOR */

    function __construct() {
        $this->IdUsuario = "";
        $this->Cedula = "";
        $this->Nombre = "";
        $this->Apellido = "";
        $this->Telefono = "";
        $this->Email = "";
        $this->Usuario = "";
        $this->Contrasena = "";
        $this->Rol = "";
    }

    /* METODOS DE LA CLASE */

    function getIdUsuario() {
        return $this->IdUsuario;
    }

    function getCedula() {
        return $this->Cedula;
    }

    function getNombre() {
        return $this->Nombre;
    }

    function getApellido() {
        return $this->Apellido;
    }

    function getTelefono() {
        return $this->Telefono;
    }

    function getEmail() {
        return $this->Email;
    }

    function getUsuario() {
        return $this->Usuario;
    }

    function getContrasena() {
        return $this->Contrasena;
    }

    function getRol() {
        return $this->Rol;
    }

    function setIdUsuario($IdUsuario) {
        $this->IdUsuario = $IdUsuario;
    }

    function setCedula($Cedula) {
        $this->Cedula = $Cedula;
    }

    function setNombre($Nombre) {
        $this->Nombre = $Nombre;
    }

    function setApellido($Apellido) {
        $this->Apellido = $Apellido;
    }

    function setTelefono($Telefono) {
        $this->Telefono = $Telefono;
    }

    function setEmail($Email) {
        $this->Email = $Email;
    }

    function setUsuario($Usuario) {
        $this->Usuario = $Usuario;
    }

    function setContrasena($Contrasena) {
        $this->Contrasena = $Contrasena;
    }

    function setRol($Rol) {
        $this->Rol = $Rol;
    }

    /* METODOS PROPIOS */

//Funcion Login
    function Login($datos) {
        require './conexion/bd.php';
        try {
             $retorno = array();

                $sql = "SELECT * FROM usuario WHERE id ='" . $datos["usuario"] . "'";
                $sql .= " AND Contrasena='" . ($datos["password"]) . "'";
                $resultado = $mysql->query($sql);

                if ($resultado->num_rows > 0) {
                    $retorno["valido"] = true;
                    session_start();
                    $usuarios = $resultado->fetch_assoc();
                    $_SESSION["datos-usuario"] = array(
                        "idusuario" => $usuarios["IdUsuario"],
                        "cedula" => $usuarios["Cedula"],
                        "nombre" => $usuarios["Nombre"],
                        "apellido" => $usuarios["Apellido"],
                        "telefono" => $usuarios["Telefono"],
                        "email" => $usuarios["Email"],
                        "usuario" => $usuarios["Usuario"],
                        "contrasena" => $usuarios["Contrasena"],
                        "rol" => $usuarios["Rol"]
                    );
                } else {
                    $retorno["valido"] = false;
                }
        } catch (Exception $e) {
            $retorno["valido"] = $e;
        }
       
        return $retorno;
    }
}

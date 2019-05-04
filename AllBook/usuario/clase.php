<?php 
class usuario{

    public $id;
    public $admin;
    public $contrasena;
    public $nombre;


	/**
	 * Class Constructor
	 * @param    $id   
	 * @param    $admin   
	 * @param    $contrasena   
	 * @param    $nombre   
	 */
	public function __construct($id, $admin, $contrasena, $nombre)
	{
		$this->id = $id;
		$this->admin = $admin;
		$this->contrasena = $contrasena;
		$this->nombre = $nombre;
    }
	
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * @param mixed $admin
     *
     * @return self
     */
    public function setAdmin($admin)
    {
        $this->admin = $admin;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getContrasena()
    {
        return $this->contrasena;
    }

    /**
     * @param mixed $contrasena
     *
     * @return self
     */
    public function setContrasena($contrasena)
    {
        $this->contrasena = $contrasena;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     *
     * @return self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }
}





 ?>
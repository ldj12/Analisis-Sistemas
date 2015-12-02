<?php


class DataBaseMySql {
    

    private $DB_HOST = 'localhost';

    private $DB_USER = 'root';

    private $DB_PASS = '1234';

    private $DB_NAME ='fredoug';

    private $DB_CHARSET = 'utf-8';
    
    private $con;

 
    
    public function conexion() {
        $this->con = new mysqli($this->DB_HOST, $this->DB_USER, $this->DB_PASS, $this->DB_NAME);



        if ( $this->con->connect_errno )

        {

            echo "Fallo al conectar a MySQL: ". $this->con->connect_error;

            return;    

        }

        return $this->con;
    }
    


    public function get_usuarios()

    {
        $this->conexion();
        
        $result = $this->con->query('SELECT * FROM tbTipo_Paquetes');

        

        $usuarios = $result->fetch_all(MYSQLI_ASSOC);

        

        return $usuarios;

    }
    
    public function getQuimicos()

    {
        $this->conexion();
        
        $result = $this->con->query('SELECT * FROM tbQuimicos');

        

        $quimicos = $result->fetch_all(MYSQLI_ASSOC);

        

        return $quimicos;

    }

    public function getBodega($empresa)

    {
        $this->conexion();
        
        $result = $this->con->query("SELECT * FROM tbBodega where id_Empresa = $empresa");

        

        $bodegas = $result->fetch_all(MYSQLI_ASSOC);

        

        return $bodegas;

    }
    
    public function getEmpresas()

    {
        $this->conexion();
        
        $result = $this->con->query('SELECT * FROM tbEmpresa where nombre <> "Fredoug"');

        

        $empresas = $result->fetch_all(MYSQLI_ASSOC);

        

        return $empresas;

    }
    
    public function getBodegasEmpresas($id_Empresa)

    {
        $this->conexion();
        
        $result = $this->con->query("SELECT * FROM tbBodega where id_Empresa = $id_Empresa");

        

        $bodegas = $result->fetch_all(MYSQLI_ASSOC);

        

        return $bodegas;

    }
    
    public function getFincasEmpresas($id_Empresa)

    {
        $this->conexion();
        
        $result = $this->con->query("SELECT * FROM tbFinca where id_Empresa = $id_Empresa");

        

        $fincas = $result->fetch_all(MYSQLI_ASSOC);

        

        return $fincas;

    }
    
    public function getCantones($provincia)

    {
        $this->conexion();
        
        $result = $this->con->query("SELECT * FROM Canton WHERE id_provincia = $provincia");

        

        $canton = $result->fetch_all(MYSQLI_ASSOC);

     
        return $canton;

    }
    
    public function getDistritos($canton)

    {
        $this->conexion();
        
        $result = $this->con->query("SELECT * FROM Distrito WHERE id_canton = $canton");

        $distrito = $result->fetch_all(MYSQLI_ASSOC);

     
        return $distrito;

    }
    


    
   
    


}

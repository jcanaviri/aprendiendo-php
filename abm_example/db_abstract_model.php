<?php
abstract class DBAbstractModel
{
    # Variables de conexion con la db
    private static $db_host = 'localhost';
    private static $db_user = 'root';
    private static $db_password = '';

    protected $db_name = 'mydb';
    protected $query;
    protected $rows = array();
    private $conn;

    # Métodos abstractos para ABM de clases que hereden
    abstract protected function get();
    abstract protected function set();
    abstract protected function edit();
    abstract protected function delete();

    # Conectar con la base de datos
    private function open_connection()
    {
        $this->conn = new mysqli(self::$db_host, self::$db_user, self::$db_password, $this->db_name);
    }
    # Desconectar con la base de datos
    private function close_connection()
    {
        $this->conn->close();
    }

    # Ejecutar una simple query INSERT, DELETE, UPDATE
    protected function execute_single_query()
    {
        $this->open_connection();
        $this->conn->query($this->query);
        $this->close_connection();
    }

    # Traer resultados de una consulta
    protected function get_results_from_query()
    {
        $this->open_connection();
        $result = $this->conn->query($this->query);

        while ($this->rows[] = $result->fetch_assoc());

        $result->close();
        $this->close_connection();

        array_pop($this->rows);
    }
}

<?php

class SPDO {
/**
     * Instance de la classe PDO
     *
     * @var PDO
     * @acces private
     */
private $PDOInstance = null;
/**
     * Instance de la class SPDO
     *
     * @var SPDO
     * @access private
     * @static
     */
private static $instance = null;
/**
     * Constante: Server host
     * @var String
     */
const HOST     = 'localhost';
/**
     * Constante: User name from the Database
     * @var String
     */
const USERNAME = 'root';
/**
     * Constante: Password
     * @var String
     */
const PASSWORD = 'Nemesis';
/**
     * Constante: Database name
     * @var String
     */
const DATABASE = 'agenda';
/**
     * Constructor
     * @access private
     * @param void
     * @return void
     * @see PDO::__construct()
     */
private function __construct() {  
  $param = yaml_parse_file("../config/database.yml");
  $host = $param["dbtravian"]["host"];
  $user = $param["dbtravian"]["Wuser"];
  $pass = $param["dbtravian"]["Wpass"];
  $inst = $param["dbtravian"]["inst"];
  
  try {
    $this->PDOInstance = new PDO('mysql:dbname='.$inst.';host='.$host,$user,$pass);
    $this->PDOInstance->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
  } catch (PDOException $e) {
    echo "<b>Error PDO:</b> ".$e->getMessage()."<br />\n";
  }
}
/**
     * Empeche la copie externe de l'instance
     * @access private
     */
private function __clone() {
  throw new Exception('Le clonage de SPDO n\'est pas autoris&eacute;');
}
/**
     * Create and return SPDO Object
     *
     * @access public
     * @static
     * @param void
     * @return SPDO $instance
     */
public static function getInstance()
{
  if(is_null(self::$instance))
  {
    self::$instance = new SPDO();
  }
  return self::$instance;
}
/**
     * Initiates a transaction
     *
     * @return <bool>
     */
public function beginTransaction() {
  return $this->PDOInstance->beginTransaction();
}
/**
     * Commits a transaction
     *
     * @return <bool>
     */
public function commit() {
  return $this->PDOInstance->commit();
}
/**
     * Fetch the SQLSTATE associated with the
     * last operation on the database handle
     *
     * @return <string>
     */
public function errorCode() {
  return $this->PDOInstance->errorCode();
}
/**
     * Fetch extended error information associated with
     * the last operation on the database handle
     *
     * @return <array>
     */
public function erroInfo() {
  return $this->PDOInstance->errorInfo();
}
/**
     * Executes an SQL statement, return the number of affected row
     *
     * @param <String> $statement
     * @return <int>
     */
public function exec($statement) {
  return $this->PDOInstance->exec($statement);
}
/**
     * Retrieve a database connection attribute
     *
     * @param <int> $attribute
     * @return <mixed>
     */
public function getAttribute($attribute) {
  return $this->PDOInstance->getAttribute($attribute);
}
/**
     * Return an array of available PDO drivers
     *
     * @return <array>
     */
public function getAvailabelDrivers() {
  return $this->PDOInstance->getAvailableDrivers();
}
/**
     * Returns the ID of the last inserted row or sequence value
     *
     * @param <type> $name
     * @return <type>
     */
public function lastInsertId($name) {
  return $this->PDOInstance->lastInsertId($name);
}
/**
     *
     * @param <String> $statement
     * @return <type>
     */
public function prepare($statement,$driver_options=false) {
  if(!$driver_options) $driver_options=array();
  return $this->PDOInstance->prepare($statement,$driver_options);;
}
/**
     * Executes an SQL statement, returning a result set as PDOStatement object
     *
     * @param <string> $statement
     * @return PDOStatement
     */
public function query($statement) {
  try {
    return $this->PDOInstance->query($statement);
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}
/**
     * Quotes a string for use in a query
     *
     * @param <type> $input
     * @param <type> $parametre_type
     * @return <type>
     */
public function quote($input, $parametre_type=0) {
  return $this->PDOInstance->quote($input,$parametre_type);
}
/**
     * Rolls back a transaction
     *
     * @return <bool>
     */
public function rollBack() {
  return $this->PDOInstance->rollBack();
}
/**
     * Set an attribute
     *
     * @param <int> $attribute
     * @param <mixed> $value
     * @return <bool>
     */
public function setAttribute($attribute, $value) {
  return $this->PDOInstance->setAttribute($attribute,$value);
}
/**
     * Execute query and return one row in assoc array
     *
     * @param <string> $statement
     * @return <type>
     */
public function queryFetchAllAssoc($statement) {
  return $this->PDOInstance->query($statement)->fetchAll(PDO::FETCH_ASSOC);
}
/**
     * @param <type> $statement
     * @return <type>
     */
public function queryFetchAllObj($statement) {
  return $this->PDOInstance->query($statement)->fetchAll(PDO::FETCH_OBJ);
}
public function queryFetchAllBoth($statement) {
return $this->query($statement)->fetchAll(PDO::FETCH_BOTH);
}
/**
     * Close a connection database
     *
     * @access public
     * @return <void>
     */
public function close() {
  $this->PDOInstance = null;
}
}
?>

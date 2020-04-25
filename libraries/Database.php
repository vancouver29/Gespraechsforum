<?php

class Database{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;

    private $dbh;
    private $error;
    private $stmt;

    public function __construct(){
        //Set DNS
        $dns = 'mysql:host' . $this->host . ';dbname=' .$this->dbname;
        //Set Options
        $option = array(
            //checking to see if there is already an established connection to the database.
            PDO::ATTR_PERSISTENT => true,
            //throw an exception if an error occurs
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );
        //Create a new PDO instance
        try {
            $this->dbh = new PDO($dns, $this->user, $this->pass, $option);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
        }
    }

    //Prepare query
    public function query($query){
        $this->stmt = $this->dbh->prepare($query);
    }

    //Bind inputs with the placeholders
    public function bind($param, $value, $type = null){
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
//        $this->stmt->bindParam($param, $value, $type);
    }

    public function execute(){
        var_dump($this->stmt);
         return $this->stmt->execute;
    }

    //Returns an array of the result set rows
    pubLic function resultset(){
        $this->execute();

        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    //Returns a single record from the database
    public function single(){
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }

    //Number of affected rows from delete, update, insert statement
    public function rowCount(){
        return $this->stmt->rowCount();
    }

    //Last insert ID as String
    public function lastInsertId(){
        return $this->dbh->lastInsertId();
    }

    public function beginTransaction(){
        return $this->dbh->beginTransaction();
    }

    public function endTransaction(){
        return $this->dbh->commit();
    }

    public function cancelTransaction(){
        return $this->dbh->rollBack();
    }

    //Debug dump parameters
    public function debugDumpParams(){
        return $this->stmt->debugDumpParams();
    }
}
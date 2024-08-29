
<?php

class Dbh{
    private $host = "localhost";
    private $dbname = "phpdatabase2";
    private $dbusername = "root";
    private $dbpassword = "";

    protected function connect()
    {
       try{
        $pdo = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->dbusername, $this->dbpassword);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //here we have to return the pdo as it is inside the function
        return $pdo;
       }catch(PDOException $e)
       {
           echo "Error:" . $e->getMessage();
       }
    }
}
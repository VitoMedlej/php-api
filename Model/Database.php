<?php



class Database
{
    protected $connection = null;
    
    public function __construct()
    {
        $SERVER_NAME = 'localhost';
        $USERNAME = 'admin';
        $PASSWORD = 'fasfcwqrqwxsa21';
        $DATABASE_NAME = 'test';
      
        try {

            if (isset($SERVER_NAME)) {

                
                $this->connection  = new PDO("mysql:host=$SERVER_NAME;dbname=$DATABASE_NAME", $USERNAME, $PASSWORD);
                // set the PDO error mode to exception
                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }


        } catch (PDOException $e) {
             echo "Connection failed: " . $e->getMessage();
        }           
    }

}
?>
<?php 
// using Object Oriented Programming(OOP) for connecting to DB

    $config = require 'config.php';
    $dsn = "mysql:" . http_build_query($config['database'],'', ';'); //http_build_query is a PHP built-in function used to build a query string from an array or an object. The third argument is a seperator

    $connectDb = new PDO($dsn, 'root', '', [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);

    class Database {
        public $connection;

        public $statement;
        public function __construct(PDO $pdo){
            
            $this->connection = $pdo;
        }
        public function query($query, $params = []){
            
            $this->statement = $this->connection->prepare($query);
            
            $this->statement->execute($params);
            
            return $this; // return $this is returning the statement variable which is connecting to the database connection string
        }

        public function find(){
            return $this->statement->fetchAll();
        }

        public function findOrFail(){
            $result = $this->statement->fetch();

            if(!$result){
                abort(404);
            }

            return $result;
        }
    }

    $db = new Database($connectDb);
    return $db;
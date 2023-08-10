<?php

class querybuilder{

    protected $pdo;

    public function __construct($pdo){

        $this->pdo=$pdo;
    }
    public function fetchAll($table, $where=[]){

        try
        {

        $where_query = "";

        if (!empty($where)) { 

            $id = $where['id'];

            $where_query = "WHERE `user_id`= $id"; 
        
            $statement = $this->pdo->prepare ("SELECT * from $table " . $where_query);

            $statement->execute();
            
        
            return $statement->fetchAll(PDO::FETCH_CLASS);

            }
       
            $statement= $this->pdo->prepare ("SELECT * FROM ($table)" );

            $statement->execute();
        
            return $statement->fetchAll(PDO::FETCH_CLASS);
            
        }catch (PDOException $e) {
               
            echo "PDOException: " . $e->getMessage();
                
        }

    }

    public function insert($table, $parameters){

        $sql = sprintf(
            'insert into %s (%s) values(%s)',
             $table, 
             implode(',', array_keys($parameters)),
             ':' . implode(', :', array_keys($parameters))
        );
       
       try{
            $statement= $this->pdo->prepare($sql);

            $statement->execute($parameters);

            return $this->pdo->lastInsertid();

        }catch(Exception $e){

            die('Sorry, Something went wrong');
        }
    }

   

    public function fetchById($table, $id){

        $statement= $this->pdo->prepare ("SELECT * FROM ($table) WHERE `id`=$id" );

        $statement->execute();
        
    return $statement->fetch(PDO::FETCH_ASSOC);
    }
    

}
                 
<?php
class QueryBuilder {
    protected $pdo; 

    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function pluck_with_multiple_queries($table, $pin, $columns = []){
        // SELECT password from users where pin = :pin OR email = :pin
        $statement = $this->pdo->prepare("SELECT {$columns} from ${table}");        
    }


    public function pluck($table, $column = []){
        $statement = $this->pdo->prepare("SELECT {$column} from ${table}");
        $statement->execute();
        $statement->fetch(PDO::FETCH_CLASS);
    }

    public function user_id()
    {
        $user_id = $_SESSION['id'];
        $query = "SELECT id  from users where id = {$user_id}";
    }

    public function selectAll($table){
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table, $parameters){
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );
    }
    /*this one's on */

}
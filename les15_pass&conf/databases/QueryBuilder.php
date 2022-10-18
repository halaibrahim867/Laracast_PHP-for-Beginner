<?php
class QueryBuilder
{
    protected $pdo;

    function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    public function selectAll($table, $class)
    {
        try {
            $statement = $this->pdo->prepare("select * from $table");
            $statement->execute();
            return  $statement->fetchAll(PDO::FETCH_CLASS, $class);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}

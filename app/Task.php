<?php

namespace UAB;
use PDO;
use PDOException;

class Task{
    protected $pdo;
    private $id;
    private $pavadinimas;
    private $pvm_kodas;
    private $adresas;
    private $tel_nr;
    private $el_pastas;
    private $veikla;
    private $vadovas;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function createTask($task){
        $this->id = $task['id'];
        $this->pavadinimas = $task['pavadinimas'];
        $this->pvm_kodas = $task['pvm_kodas'];
        $this->adresas = $task['adresas'];
        $this->tel_nr = $task['tel_nr'];
        $this->el_pastas = $task['el_pastas'];
        $this->veikla = $task['veikla'];
        $this->vadovas = $task['vadovas'];
    }

    private function insertTask(){
        try{
            $query = "INSERT INTO `imones` (`id`, `pavadinimas`, `pvm_kodas`, `adresas`, `tel_nr`, `el_pastas`, `veikla`, `vadovas`) 
            VALUES (:id, :pavadinimas, :pvm_kodas, :adresas, :tel_nr, :el_pastas, :veikla, :vadovas)";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':id', $this->id, PDO::PARAM_STR);
            $stmt->bindParam(':pavadinimas', $this->pavadinimas, PDO::PARAM_STR);
            $stmt->bindParam(':pvm_kodas', $this->pvm_kodas, PDO::PARAM_STR);
            $stmt->bindParam(':adresas', $this->adresas, PDO::PARAM_STR);
            $stmt->bindParam(':tel_nr', $this->tel_nr, PDO::PARAM_STR);
            $stmt->bindParam(':el_pastas', $this->el_pastas, PDO::PARAM_STR);
            $stmt->bindParam(':veikla', $this->veikla, PDO::PARAM_STR);
            $stmt->bindParam(':vadovas', $this->vadovas, PDO::PARAM_STR);
            $stmt->execute();
            header('Location:/');
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function allTasks(){
        $statement = $this->pdo->prepare('SELECT * from imones');
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);  //grazina kaip asociatyvu masyva
    }

    public function deleteTask($id){
        $statement = $this->pdo->prepare("DELETE FROM `imones` WHERE id=$id");
        $statement->execute();
        header('Location:/');
        return $statement;
    }

    /*public function setComplete($id)
    {
        $this->status = 1;
        try {
            $query = "UPDATE imones SET `status`=:status WHERE id=:id";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':status', $this->status, PDO::PARAM_STR);
            $stmt->bindParam(':id', $id, PDO::PARAM_STR);
            $stmt->execute();
            header('Location:/');
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }*/


}
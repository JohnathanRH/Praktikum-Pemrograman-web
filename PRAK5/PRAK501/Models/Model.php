<?php
namespace Models;

require_once('../Koneksi.php');

abstract class Model {
    protected string $tableName;
    protected array $relationship;

    public function mountData(array $data){
        foreach($data as $key => $value){
            if (property_exists($this, $key)) {
                if(str_contains($key, "id_")){
                    $this->{$key} = (int)$value;
                } else{
                    $this->{$key} = $value;   
                }
            }
        }
    }

    public function packToArray(bool $withId = true) : array{
        $arr = [];
        foreach($this as $attribute => $value){
            if($attribute == "tableName"){
                continue;
            }
            if($attribute == "relationship"){
                continue;
            }
            if($attribute == "id_{$this->tableName}" && !$withId){
                continue;   
            }
            $arr[$attribute] = $value;
        }
        return $arr;
    }

    public function getAllData() : array{
        $stmt = \Connection::database()->prepare("SELECT * FROM {$this->tableName}");
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }

    public function getRelatedData(array $attributes) {
        $selectColumns = ["{$this->tableName}.*"];

        // Query builder. Get all requested columns off each related table
        foreach ($this->relationship as $model) {
            $instance = new $model();
            $tableName = $instance->tableName;

            if (array_key_exists($tableName, $attributes)) {
                foreach ($attributes[$tableName] as $attribute) {
                    $selectColumns[] = "{$tableName}.{$attribute}";
                }
            }
        }

        // Join tables
        $joinClauses = [];
        foreach ($this->relationship as $model) {
            $instance = new $model();
            $tableName = $instance->tableName;
            $joinClauses[] = "INNER JOIN {$tableName} ON {$this->tableName}.id_{$tableName} = {$tableName}.id_{$tableName}";
        }

        // Assemble query
        $query = "SELECT " . implode(", ", $selectColumns) . 
                " FROM {$this->tableName} " . 
                implode(" ", $joinClauses);
        
        $stmt = \Connection::database()->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }

    public static function __callStatic($name, $arguments)
    {
        $instance = new static();
        if($name == "getAll"){
            return $instance->getAllData();
        }
        else if($name == "getAllRelated"){
            return $instance->getRelatedData($arguments[0]);
        }
    }
    
    public abstract function create();
    public abstract function read(int $id);
    public abstract function update();
    public abstract function delete();
}

?>
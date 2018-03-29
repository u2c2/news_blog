<?php

namespace Core;

abstract class Model{

	protected $sql;
	protected $errors;
  protected $table;
  protected $pk;



public function __construct(){
  $this->sql = Sql::instance();
  $this->errors = [];
}

	public function all(){
    return $this->sql->select("SELECT * FROM $this->table");
    
    
}
public function one($id){
    $res = $this->sql->select("SELECT * FROM $this->table WHERE $this->pk=:id",['id'=> $id]);
    return $res[0] ?? false;
}
public function onemes($id){
      
}

public function add($fields){
      $this->validation($fields);
      if(!empty($this->errors)){
        return false;
      }
      return $this->sql->insert($this->table,$fields);
}

public function edit($id,$fields){
   if(!empty($this->errors)){
        return false;
      }
 return $this->sql->update($this->table,$fields,"$this->pk =:id",['id'=> $id]);


}
public function delete($id){
       return $this->sql->delete($this->table,"$this->pk =:id",['id'=> $id]);
     }

     public function errors(){
return $this->errors;
}
protected function addError($text){
  $this->errors[]= $text;
}
protected abstract function validation($fields);
}

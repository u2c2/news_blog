<?php

namespace Models;
use Core\Sql;

class Post{

	protected $sql;
	protected $lastErorror;

//protected static $instance;

protected function __construct(){
  $this->sql = Sql::instance();
  $this->lastErorror = '';
}


//if(self::$instance == null)
  //{
    //self::$instance = new self();
  //}
 // return self::$instance;
//}


	public function all(){
       $query = $this->sql->query("SELECT * FROM news ORDER BY dt DESC");
    return $query->fetchAll();
}

public function one($id_news){
//$this->sql->update('news',['title'=>,'article'=>],
  //  'id_news=:id',
    //['id'=>$id_news]);

  
       $query = $this->sql->query("SELECT * FROM news WHERE id_news=:id",['id' => $id_news]);
    return $query->fetch();
}
public function onemes($id_news){
       $query = $this->sql->query("SELECT title,article FROM news WHERE id_news=:id",['id' => $id_news]);
    return $query->fetch();
}

public function add($name,$text){
       $query = $this->sql->query("INSERT INTO news (title, article) VALUES (:title , :article)", [
				'title' => $name,
				'article' => $text
			]);
    return $this->sql->lastInsertId();
}

public function edit($id_news, $text, $name){
   $this->sql->update('news',['title'=>$title,'article'=>$article],
    'id_news=:id',
    ['id'=>$id_news]);
       $query = $this->sql->query("UPDATE  news set title='$name', article='$text' WHERE id_news=:id",[
         'id' => $id_news
               ]);
    return $query->fetch();
}
public function delete($id_news){
       
    return $this->sql->delete('news','id_news=:id',[
      'id' =>$id,
    ])>0;
}

}

<?php

namespace Controllers;

//use Core\Template;
use Models\Messages as Model;

class Posts extends Client{
    protected $model; 

    public function __construct(){
		parent::__construct();
		$this->model = new Model();
	}

	public function action_index(){
        $this->title ='Новости';

       $messages = $this->model->all(); 

        $this->content = $this->template('v_index', [
			 'messages' => $messages]);
       }  


  public function action_one(){
       	$id_news = $this->params[2] ?? '';
       
         $this->title = "Просмотр Новости";
       $message = $this->model->one($id_news);

       if($message === false){
        $this->page404();
        return;
        }
  
        $this->content = $this->template('v_post', [
			 'message' => $message]);
       }

  public function action_edit(){
    $this->redirectIfNotAuth();
     $msg = '';

    $id_news = $this->params[2] ?? '';
    $message = $this->model->one($id_news); 

   // var_dump($message);

      if($message === false){
        $this->page404();
        return;
        }

     if(count($_POST) > 0){
         
     $fields['title'] = trim($_POST['title']);
     $fields['article'] = trim($_POST['article']);
      //  $name = htmlspecialchars($name);
        //$text = htmlspecialchars($text);
        $message = $this->model->edit($id_news,$fields);
       var_dump($message);
       //else $fields =  ['name' => '','text'=>''];
        //$msg = '';

     if($fields['title'] == '' || $fields['article'] == ''){
      $msg = 'Заполните все поля';
     }
     else{
          header('Location:'. ROOT );
      exit();
     }
 
            
   }

		   $this->title  = 'Редактировать статью.';
	     $this->content = $this->template('v_edit',
         [ 'title' => $message['title'],
           'article' => $message['article'],
              'msg' => $msg
         ]);

	}
  public function action_add(){
    //
     $this->redirectIfNotAuth();

    if(count($_POST) > 0){
      $fields=[];
      $fields['title'] = trim($_POST['title']);
      $fields['article'] = trim($_POST['article']);
   
      $id_news = $this->model->add($fields);
   
      if($id_news === false){
        $errors = $this->model->errors();
      }
      else{
        header('Location: ' . ROOT . 'posts/one/' . $id_news);
        exit();
      }
    }
    else{

    $fields = ['title'=>'','article'=>''];
     $errors=[];
      $msg = '';
    }
 
    $this->title = 'Добавление статьи';

    $this->content = $this->template('v_add', [
      'fields'=> $fields,
      'erorrs' => $errors
    ]);
  }
       
  public function action_delete(){
 $this->redirectIfNotAuth();
     $id_news = (int)$this->params[2];

   // if($id_news === false)?
    if($id_news == 0){
      exit('нет параметра id');
      }else{
        $this->title = 'Удаление статьи';
        $message =$this->model->delete($id_news);
         $this->content = $this->template('v_delete', [
      'message' => $message 
    ]);
      }  
    }
}

<?php

namespace Controllers;

use Models\Users;
//use Core\Template;
use Core\Auth;

class Client extends Base{
	protected $title;
	protected $content;
	protected $user;


	public function __construct(){
		parent::__construct();

		$this->title = '';
		$this->content = '';
		echo $this->user;
		//$this->user = Auth::getToken();
         $this->user = (new Users())->getByAuth();
		$this->templateBuilder->addGlobal('root', ROOT);
	}

	public function render(){
		return $this->template('v_main', [
			'title' => $this->title,
			'content' => $this->content,
			'user' =>$this->user
		]);
	}
    public function page404(){
		$this->title = 'Страница не найдена';
		$this->content = $this->template('v_404');
	}
	public function redirectIfNotAuth(){
		if($this->user == null){
			header('Location: ' . ROOT .'auth\login');
			exit();
		}
	}

}
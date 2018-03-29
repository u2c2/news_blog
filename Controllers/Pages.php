<?php

namespace Controllers;


use Models\Post;

class Pages extends Client{
    public function action_contacts(){
        $this->title ='Контакты';
     
        $this->content = 'Наши Контакты';
       }  
    public function action_404(){
         $this->page_404();
      }
   }
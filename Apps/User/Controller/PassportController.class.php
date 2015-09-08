<?php
namespace User\Controller;
use Think\Controller;
class PassportController extends Controller {
    

    public function login(){
    	$this->display();
    }

    public function logout(){
    	$this->show('logout');
    }
}
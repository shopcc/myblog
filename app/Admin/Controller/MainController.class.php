<?php
namespace Admin\Controller;
use Think\Controller;
class MainController extends Controller {
    public function indexAction(){
      $this->display('index');
      }
}
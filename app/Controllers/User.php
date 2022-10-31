<?php

namespace App\Controllers;

class User extends BaseController{
    public function  login(){
        echo view ('user/login');
    }
}

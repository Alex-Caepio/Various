<?php

class Admin{
    protected $addAdmins = true;
    protected $addModerators = true;
    protected $addPost = true;
    protected $addComments = true;
}

class Moderator{
    protected $addAdmins = false;
    protected $addModerators = false;
    protected $addPost = true;
    protected $addComments = true;
}

class User{
    protected $addAdmins = false;
    protected $addModerators = false;
    protected $addPost = false;
    protected $addComments = true;
}

class Guest{
    protected $addAdmins = false;
    protected $addModerators = false;
    protected $addPost = false;
    protected $addComments = false;
}

$role = 'Admin';

class Factory{
    public static function createUsers($role){
        if(class_exists($role))
            return new $role;
        else 
            throw new Exception('Role' .$role. 'not found');
    }
}

$login = Factory::createUsers($role);

var_dump($login);
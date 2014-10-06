<?php

class CQuestion extends \BaseController{


public function index(){ 
DAO::getAll("Question");
}

}
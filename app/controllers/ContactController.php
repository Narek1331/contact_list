<?php
require_once("app/models/ContactModel.php");

class ContactController {

     private $contact_model;

     public function __construct(){
          $this->contact_model = new ContactModel();
     }

     public function index(){
          http_response_code(200);
          $datas = $this->contact_model->get_all(); 
          include_once("views/index.php");
          return;       
     }

     public function store(){

          $name = $_POST['name'];
          $phone_number = $_POST['phone_number'];

          if(!$name || !$phone_number){
             header('Location: /', true);
             return;
          }

          $this->contact_model->store($name,$phone_number);

          header('Location: /', true);
          return;      
     }
     
     public function delete(){

          $id = $_POST['id'];

          if(!$id){
             header('Location: /', true);
             return;
          }

          $this->contact_model->destroy_by_id($id);

          header('Location: /', true);
          return;      
     }
}
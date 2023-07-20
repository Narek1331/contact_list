<?php

class ContactModel{

    private $table_name = "contacts";

    public function get_all(){
        // $sql = "SELECT * FROM $this->table_name";
        // return db->query($sql);
        $sql = "SELECT * FROM $this->table_name";
        $result = db->query($sql);
        $rows = [];
          while($row = mysqli_fetch_assoc($result))
             {
           $rows[] = $row;

          }
          return $rows;
    }

    public function store($name,$phone_number){
        $sql = "INSERT INTO $this->table_name (name, phone_number) VALUES ('$name',$phone_number);";
        return db->query($sql);
    }

    public function destroy_by_id($id){
        $sql = "DELETE FROM $this->table_name WHERE id=$id";
        return db->query($sql);
    }
}
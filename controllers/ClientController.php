<?php

require_once './model/Model.php';
include './util/IterateResultQuery.php';

class ClientController extends Model
{

    private $name;
    private $identification;
    private $las_name;
    private $address;
    private $phone;
    private $email;



    public function show() {

      $result = $this->getConnection()->query('SELECT * FROM client');
      $result = IterateResultQuery($result);
      return $result;
    }

    public function delete($id) {
      $result = $this->getConnection()->query("DELETE FROM client WHERE identification = $id");
      return $result;
    }

    public function edit() {

    }


    public function save() {
      $result = $this->getConnection()->query("INSERT INTO client (identification, name, last_name, address, phone, email)
        VALUES('1012300457', 'carlos', 'marin',  'cra 2', '314265987', 'jhon989@gmail.com')");
    }

}

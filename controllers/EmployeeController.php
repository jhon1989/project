<?php
session_start();

require_once './model/Model.php';
include './util/IterateResultQuery.php';

class EmployeeController extends Model
{
    private $name;
    private $identification;
    private $last_name;
    private $address;
    private $phone;
    private $email;
    private $search;
    private $password;
    private $status;
    private $level;
    private $table;

    public function __construct() {
      $this->name           = isset($_POST['name']) ? trim($_POST['name']) : '';
      $this->identification = isset($_POST['identification']) ? trim($_POST['identification']) : '';
      $this->last_name      = isset($_POST['last_name']) ? trim($_POST['last_name']) : '';
      $this->address        = isset($_POST['address']) ? trim($_POST['address']) : '';
      $this->phone          = isset($_POST['phone']) ? trim($_POST['phone']) : '';
      $this->email          = isset($_POST['email']) ? trim($_POST['email']) : '';
      $this->search         = isset($_POST['search']) ? trim($_POST['search']) : '';
      $this->password       = isset($_POST['password']) ? trim($_POST['password']) : '';
      $this->status         = isset($_POST['status']) ? trim($_POST['status']) : '';
      $this->level          = isset($_POST['level']) ? trim($_POST['level']) : '';
      $this->table          = 'employee';
    }

    public function show() {
      $result = $this->getConnection()->query("SELECT * FROM $this->table ORDER BY date_time DESC");
      $result = IterateResultQuery($result);
      return $result;
    }

    public function delete() {
        $result = $this->getConnection()->query("DELETE FROM $this->table WHERE identification = $this->identification");
        if ( $result > 0) {
          $_SESSION["message"] = 'El cliente fue eliminado correctamente';
        } else {
          $_SESSION["message"] = 'No se pudo eliminar el cliente';
        }
    }

    public function edit() {

       $sql = "UPDATE $this->table SET name='{$this->name}', last_name='{$this->last_name}', address='{$this->address}', phone='{$this->phone}', email='{$this->email}' WHERE identification = '{$this->identification}'";
       $result = $this->getConnection()->query($sql);

       if ( $result > 0) {
         $_SESSION["message"] = 'El cliente fue actulizado correctamente';
       } else {
         $_SESSION["message"] = 'No se pudo actualizar el cliente';
       }

    }

    public function save() {

          $sql = "INSERT INTO $this->table (identification, name, last_name, address, phone, email, password, status, level)
          VALUES('{$this->identification}', '{$this->name}', '{$this->last_name}', '{$this->address}', '{$this->phone}', '{$this->email}', '{$this->password}', '{$this->status}', '{$this->level}');";
          $result = $this->getConnection()->query($sql);

         if ( $result > 0) {
           $_SESSION["message"] = 'El cliente fue creado correctamente';
         } else {
           $_SESSION["message"] = 'No se pudo crear el cliente';
         }

    }

    public function searchGeneral() {
      $result = $this->getConnection()->query("SELECT * FROM $this->table WHERE identification LIKE '%{$this->search}%' OR name LIKE '%{$this->search}%' ");
      $result = IterateResultQuery($result);
      return $result;
    }

    public function getIdIfExist($id) {
        $result = $this->getConnection()->query("SELECT identification FROM $this->table WHERE identification = $id");
        if ( mysqli_num_rows($result) > 0) {
          return true;
        }
        return false;
    }


    public function __destruct() {
      unset($this->identification);
      unset($this->name);
      unset($this->last_name);
      unset($this->address);
      unset($this->phone);
      unset($this->email);
    }

}

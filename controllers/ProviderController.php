<?php
session_start();

require_once './model/Model.php';
include './util/IterateResultQuery.php';

class ProviderController extends Model
{
    private $business_name;
    private $nit;
    private $address;
    private $phone;
    private $email;
    private $table;

    public function __construct() {
      $this->nit           = isset($_POST['nit']) ? trim($_POST['nit']) : '';
      $this->business_name = isset($_POST['business_name']) ? trim($_POST['business_name']) : '';
      $this->address       = isset($_POST['address']) ? trim($_POST['address']) : '';
      $this->phone         = isset($_POST['phone']) ? trim($_POST['phone']) : '';
      $this->email         = isset($_POST['email']) ? trim($_POST['email']) : '';
      $this->search        = isset($_POST['search']) ? trim($_POST['search']) : '';
      $this->table         = 'provider';
    }

    public function show() {
      $result = $this->getConnection()->query("SELECT * FROM $this->table ORDER BY date_time DESC");
      $result = IterateResultQuery($result);
      return $result;
    }

    public function delete() {
        $result = $this->getConnection()->query("DELETE FROM $this->table WHERE nit = $this->nit");
        return $this->nit;
        if ( $result > 0) {
          $_SESSION["message"] = 'El cliente fue eliminado correctamente';
        } else {
          $_SESSION["message"] = 'No se pudo eliminar el cliente';
        }
    }

    public function edit() {

       $sql = "UPDATE $this->table SET business_name='{$this->business_name}', address='{$this->address}', phone='{$this->phone}', email='{$this->email}' WHERE nit = '{$this->nit}'";
       $result = $this->getConnection()->query($sql);

       if ( $result > 0) {
         $_SESSION["message"] = 'El cliente fue actulizado correctamente';
       } else {
         $_SESSION["message"] = 'No se pudo actualizar el cliente';
       }
    }

    public function save() {

          $sql = "INSERT INTO $this->table (nit, business_name, address, phone, email)
          VALUES('{$this->nit}', '{$this->business_name}', '{$this->address}', '{$this->phone}', '{$this->email}');";
          $result = $this->getConnection()->query($sql);
return $this->business_name;
         if ( $result > 0) {
           $_SESSION["message"] = 'El cliente fue creado correctamente';
         } else {
           $_SESSION["message"] = 'No se pudo crear el cliente';
         }
    }

    public function searchGeneral() {
      $result = $this->getConnection()->query("SELECT * FROM $this->table WHERE nit LIKE '%{$this->search}%' OR business_name LIKE '%{$this->search}%' ");
      $result = IterateResultQuery($result);
      return $result;
    }

    public function getIdIfExist($id) {
        $result = $this->getConnection()->query("SELECT nit FROM $this->table WHERE nit = $id");
        if ( mysqli_num_rows($result) > 0) {
          return true;
        }
        return false;
    }

    public function __destruct() {
      unset($this->nit);
      unset($this->business_name);
      unset($this->address);
      unset($this->phone);
      unset($this->email);
    }

}

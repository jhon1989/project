<?php
session_start();

require_once './model/Model.php';
include './util/IterateResultQuery.php';
include './util/message.php';

class ProductController extends Model
{
    private $code;
    private $name;
    private $type;
    private $st_max;
    private $st_min;
    private $value;
    private $search;
    private $quantity;
    private $category;
    public $counter;

    public function __construct() {
      $this->code     = isset($_POST['code']) ? trim($_POST['code']) : '';
      $this->name     = isset($_POST['name']) ? trim($_POST['name']) : '';
      $this->type     = isset($_POST['type']) ? trim($_POST['type']) : '';
      $this->st_max   = isset($_POST['st_max']) ? trim($_POST['st_max']) : '';
      $this->st_min   = isset($_POST['st_min']) ? trim($_POST['st_min']) : '';
      $this->value    = isset($_POST['value']) ? trim($_POST['value']) : '';
      $this->quantity = isset($_POST['quantity']) ? trim($_POST['quantity']) : '';
      $this->category = isset($_POST['category']) ? trim($_POST['category']) : '';
      $this->search   = isset($_POST['search']) ? trim($_POST['search']) : '';
      $this->table    = 'product';
    }

    public function show() {
      $result = $this->getConnection()->query("SELECT * FROM $this->table ORDER BY date_time DESC");
      $result = IterateResultQuery($result);
      return $result;
    }

    public function delete() {
        $result = $this->getConnection()->query("DELETE FROM $this->table WHERE code_produc = $this->code");

        if ( $result > 0) {
          setMessage('El producto fue eliminado correctamente', 'success');
        } else {
          setMessage('No se pudo eliminar el producto', 'danger');
        }
    }

    public function edit() {

       $sql = "UPDATE $this->table SET name='{$this->name}', type_measure='{$this->type}', stock_maximo='{$this->st_max}', stock_minimo='{$this->st_min}', unit_value='{$this->value}', quantity='{$this->quantity}', id_category='{$this->category}' WHERE code_produc = '{$this->code}'";
       $result = $this->getConnection()->query($sql);

       if ( $result > 0) {
         setMessage('El producto fue actulizado correctamente', 'success');
       } else {
         setMessage('No se pudo actualizar el producto', 'danger');
       }
    }

    public function save() {

          $sql = "INSERT INTO $this->table (code_produc, name, type_measure, stock_maximo, stock_minimo, unit_value, quantity, id_category)
          VALUES('{$this->code}', '{$this->name}', '{$this->type}', '{$this->st_max}', '{$this->st_min}', '{$this->value}', '{$this->quantity}', '{$this->category}');";
          $result = $this->getConnection()->query($sql);

         if ( $result > 0) {
           setMessage('El producto fue creado correctamente', 'success');
         } else {
           setMessage('No se pudo crear el producto', 'danger');
         }
    }

    public function searchGeneral() {
      $result = $this->getConnection()->query("SELECT * FROM $this->table WHERE code_produc LIKE '%{$this->search}%' OR name LIKE '%{$this->search}%' ");
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

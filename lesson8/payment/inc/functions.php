<?php

session_start();

$data = [
  'user_name' => '',
  'email' => '',
  'phone' => '',
  'address' => '',
];

if(!empty($_POST)) {
  require_once 'db.php';
  $data = load($data);
  $order_id = save('orders', $data);
  var_dump($order_id);
}

function load ($data) {
  foreach($_POST as $key => $value) {
    if(array_key_exists($key, $data)) {
      $data[$key] = $value;
    }
  }
  return $data;
}

function save ($table, $data) {
  $tbl = R::dispense($table);
  foreach($data as $key => $value) {
      $tbl->$key = $value;
  }
  return R::store($tbl);

}

function debug($data){
  echo '<pre>' . print_r($data, true) . '</pre>';
}
 ?>

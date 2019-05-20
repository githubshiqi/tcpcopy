<?php
public function getItems()
{
    $condit = array();
    $condit['type'] = '1';
  $data = D('items')->where($condit)->select();
  return $data;
}
?>

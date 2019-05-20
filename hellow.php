<?php
public function getItems()
{
    $condit = array();
  $condit['name'] = 'li';

  $data = D('items')->where($condit)->select();
  return $data;
}
?>

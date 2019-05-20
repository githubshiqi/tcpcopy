<?php
public function getItems()
{
  $data = D('items')->where($condit)->select();
  return $data;
}
?>

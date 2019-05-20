<?php
public function getItems()
{
  $condit['name'] = 'li';
  $data = D('items')->where($condit)->select();
  return $data;
}
?>

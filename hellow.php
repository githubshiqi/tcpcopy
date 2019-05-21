<?php
public function getItems()
{
<<<<<<< HEAD
    $condit = array();
  $condit['name'] = 'li';

=======
>>>>>>> master
  $data = D('items')->where($condit)->select();
  return $data;
}
?>

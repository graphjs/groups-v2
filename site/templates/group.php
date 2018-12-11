<?php
    $this->layout('template', [
        'title' => 'Group',
        'public_id'=>$this->e($public_id)
    ]);
?>

<graphjs-group id="<?=$_GET["id"]?>" box="disabled"></graphjs-group>
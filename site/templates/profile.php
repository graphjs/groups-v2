<?php
    $this->layout('template', [
        'title' => 'Profile',
        'public_id'=>$this->e($public_id)
    ]);
?>

<?=$this->e($public_id)?>

<graphjs-profile id="<?=$_GET["id"]?>" box="disabled"></graphjs-profile>
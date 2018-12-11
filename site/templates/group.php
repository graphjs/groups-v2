<?php
    $this->layout('template', [
        'title' => 'Group',
        'public_id'=>$this->e($public_id)
    ]);
?>

<main role="main" class="groups-content container-fluid p-0 mt-0">
  <graphjs-group id="<?=$_GET["id"]?>" box="disabled"></graphjs-group>
</main>
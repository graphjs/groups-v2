<?php
    $this->layout('template', [
        'title' => 'Profile',
        'public_id'=>$this->e($public_id)
    ]);
?>
<main role="main" class="groups-content container-fluid p-0 mt-0">
  <graphjs-profile id="<?=$_GET["id"]?>" box="disabled"></graphjs-profile>
</main>
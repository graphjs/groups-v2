<?php
    $this->layout('template', [
        'title' => 'Account Settings',
        'brand'     => $this->e($brand),
        'public_id'=>$this->e($public_id)
    ]);
?>

<main role="main" class="groups-content container-fluid">
  <graphjs-profile-settings box="disabled"></graphjs-profile-settings>
</main>
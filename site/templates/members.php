<?php
    $this->layout('template', [
        'title' => 'Members',
        'brand'     => $this->e($brand),
        'public_id'=>$this->e($public_id)
    ]);
?>
<main role="main" class="groups-content container">
  <graphjs-profile-list target="/?page=profile&id=[[id]]" box="disabled"></graphjs-profile-list>
</main>
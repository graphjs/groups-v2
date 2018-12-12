<?php
    $this->layout('template', [
        'title' => 'Groups',
        'brand'     => $this->e($brand),
        'public_id'=>$this->e($public_id)
    ]);
?>

<main role="main" class="groups-content container">
  <graphjs-group-list target="/?page=group&id=[[id]]" box="disabled"></graphjs-group-list>
</main>
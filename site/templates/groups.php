<?php
    $this->layout('template', [
        'title' => 'Groups',
        'public_id'=>$this->e($public_id)
    ]);
?>

<main role="main" class="groups-content container">
  <graphjs-group-list target="/?page=group&id=[[id]]" box="disabled"></graphjs-group-list>
</main>
<?php
    $this->layout('template', [
        'title' => 'Messages',
        'public_id'=>$this->e($public_id)
    ]);
?>
<main role="main" class="groups-content container">
  <graphjs-messages></graphjs-messages>
</main>
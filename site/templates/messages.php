<?php
    $this->layout('template', [
        'title' => 'Messages',
        'brand'     => $this->e($brand),
        'public_id'=>$this->e($public_id)
    ]);
?>

<main role="main" class="groups-content container">
  <graphjs-messages></graphjs-messages>
</main>
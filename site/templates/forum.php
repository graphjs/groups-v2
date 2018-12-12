<?php
    $this->layout('template', [
        'title' => 'Forum',
        'brand'     => $this->e($brand),
        'public_id'=>$this->e($public_id)
    ]);
?>

<main role="main" class="groups-content container">
  <graphjs-forum></graphjs-forum>
</main>
<?php
    $this->layout('template_'.$this->e($goal), [
        'title' => 'Forum',
        'brand'     => $this->e($brand),
        'public_id'=>$this->e($public_id),
        'primary_color' => $this->e($primaryColor),
        'text_color' => $this->e($textColor),
        'background_color' => $this->e($backgroundColor),
        'host' => $this->e($host),
        'stream_host' => $this->e($streamHost)
    ]);
?>

<main role="main" class="groups-content container">
  <graphjs-forum></graphjs-forum>
</main>
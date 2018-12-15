<?php
    $this->layout('template_'.$this->e($goal), [
        'title'     => 'Account Settings',
        'brand'     => $this->e($brand),
        'public_id' =>$this->e($public_id),
        'primary_color' => $this->e($primaryColor),
        'text_color' => $this->e($textColor),
        'background_color' => $this->e($backgroundColor),
        'host' => $this->e($host),
        'stream_host' => $this->e($streamHost)
    ]);
?>

<main role="main" class="groups-content container-fluid">
  <graphjs-profile-settings box="disabled"></graphjs-profile-settings>
</main>
<?php
    $this->layout('layout/template_'.$this->e($goal), [
        'title' => 'Members',
        'brand'     => $this->e($brand),
        'public_id'=>$this->e($public_id),
        'primary_color' => $this->e($primaryColor),
        'text_color' => $this->e($textColor),
        'background_color' => $this->e($backgroundColor),
        'host' => $this->e($host),
        'stream_host' => $this->e($streamHost),
        "theme" => $this->e($theme),
        "name"  => $this->e($name)
    ]);
?>

<main role="main" class="groups-content container">
  <graphjs-profile-list target="/?page=profile&id=[[id]]" box="disabled"></graphjs-profile-list>
</main>
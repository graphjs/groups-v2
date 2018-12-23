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
        "name"  => $this->e($name),
        "goal" => $this->e($goal)
    ]);
?>

<main role="main" class="groups-content container">
    <graphjs-profile-list target="<?php if($goal==="show"): ?>/?page=profile&id=[[id]]<?php else: ?>/<?=$name?>/profile?id=[[id]]<?php endif ?>" box="disabled"></graphjs-profile-list>
</main>
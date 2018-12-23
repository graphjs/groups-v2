<?php
    $this->layout('layout/template_'.$this->e($goal), [
        'title' => 'Groups',
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
    <graphjs-group-list target="<?php if($goal==="show"): ?>/?page=group&id=[[id]]<?php else: ?>/<?=$name?>/group?id=[[id]]<?php endif ?>" box="disabled"></graphjs-group-list>
</main>
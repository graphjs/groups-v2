<?php
    $this->layout('template', [
        'title' => 'Members',
        'public_id'=>$this->e($public_id)
    ]);
?>

<graphjs-profile-list target="/?page=profile&id=[[id]]" box="disabled"></graphjs-profile-list>
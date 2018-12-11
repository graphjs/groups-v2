<?php
    $this->layout('template', [
        'title' => 'Messages',
        'public_id'=>$this->e($public_id)
    ]);
?>

<graphjs-messages box="disabled"></graphjs-messages>
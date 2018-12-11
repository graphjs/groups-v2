<?php
    $this->layout('template', [
        'title' => 'Forum',
        'public_id'=>$this->e($public_id)
    ]);
?>

<graphjs-forum box="disabled"></graphjs-forum>
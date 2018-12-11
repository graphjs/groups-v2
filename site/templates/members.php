<?php 
    $this->layout('template', [
        'title' => 'Members', 
        'id'=>$this->e($id)
    ]); 
?>
<graphjs-profile-list box="disabled" target="/?page=profile&id=[[id]]"></graphjs-profile-list>
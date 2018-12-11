<?php 
    $this->layout('template', [
        'title' => 'Groups', 
        'id'=>$this->e($id)
    ]); 
?>
<graphjs-group-list box="disabled" target="/?page=group&id=[[id]]"></graphjs-group-list>
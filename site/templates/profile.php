<?php 
    $this->layout('template', [
        'title' => 'User Profile', 
        'id'=>$this->e($id)
    ]); 
?>

<h1>User Profile</h1>
<p>Hello, <?=$this->e($name)?></p>
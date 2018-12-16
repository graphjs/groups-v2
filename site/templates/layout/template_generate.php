<?php $this->layout('layout/base', $this->data) ?>

<?= $this->section('content') ?>

<?php $this->start('footer') ?>

<script type="text/javascript" src="/dist/<?=$name?>/init.js"></script>

<?php $this->stop('footer') ?>

<?php $this->layout('layout/base', $this->data) ?>

<?= $this->section('content') ?>

<?php $this->start('footer') ?>

<script>
	GraphJS.init('<?=$this->e($public_id)?>', {
			host: '<?=$this->e($host)?>',
			streamHost: '<?=$this->e($stream_host)?>',
			streamId: '<?=$this->e($public_id)?>',
			theme: {
					primaryColor: '<?=$this->e($primary_color)?>',
					textColor: '<?=$this->e($text_color)?>',
					backgroundColor: '<?=$this->e($background_color)?>'
			}
	});
</script>

<?php $this->stop('footer') ?>

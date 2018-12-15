<?php
    $this->layout('layout/template_'.$this->e($goal), [
        'title' => 'Home',
        'brand'     => $this->e($brand),
        'public_id'=>$this->e($public_id),
        'primary_color' => $this->e($primaryColor),
        'text_color' => $this->e($textColor),
        'background_color' => $this->e($backgroundColor),
        'host' => $this->e($host),
        'stream_host' => $this->e($streamHost)
    ]);
?>

<main role="main" class="groups-content container">
  <div class="row">
    <section class="col-md-12 col-lg-8">
      <graphjs-feed></graphjs-feed>
    </section>
    <aside class="d-none d-lg-block col-lg-4">
      <graphjs-auth-register min-width="100%" max-width="100%"></graphjs-auth-register>
      <div>

      </div>
    </aside>
  </div>
</main>
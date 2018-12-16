<?php
    $this->layout('layout/template_'.$this->e($goal), [
        'title' => 'Home',
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
  <div class="row">
    <section class="col-md-12 col-lg-8">
      <graphjs-feed></graphjs-feed>
    </section>
    <aside class="d-none d-lg-block col-lg-4">
        <div class="register-box d-none"> 
             <graphjs-auth-register min-width="100%" max-width="100%"></graphjs-auth-register>
        </div>
      <div class="private-features d-none">
            <a href="https://www.addtoany.com/share#url=https%3A%2F%2Fgr.ps&amp;title=" target="_blank"><img src="https://static.addtoany.com/buttons/a2a.svg" width="32" height="32" style="background-color:royalblue"></a>
            <a href="https://www.addtoany.com/add_to/email?linkurl=https%3A%2F%2Fgr.ps&amp;linkname=" target="_blank"><img src="https://static.addtoany.com/buttons/email.svg" width="32" height="32" style="background-color:royalblue"></a>
            <a href="https://www.addtoany.com/add_to/facebook?linkurl=https%3A%2F%2Fgr.ps&amp;linkname=" target="_blank"><img src="https://static.addtoany.com/buttons/facebook.svg" width="32" height="32" style="background-color:royalblue"></a>
            <a href="https://www.addtoany.com/add_to/twitter?linkurl=https%3A%2F%2Fgr.ps&amp;linkname=" target="_blank"><img src="https://static.addtoany.com/buttons/twitter.svg" width="32" height="32" style="background-color:royalblue"></a>
            <a href="https://www.addtoany.com/add_to/linkedin?linkurl=https%3A%2F%2Fgr.ps&amp;linkname=" target="_blank"><img src="https://static.addtoany.com/buttons/linkedin.svg" width="32" height="32" style="background-color:royalblue"></a>
            <a href="https://www.addtoany.com/add_to/whatsapp?linkurl=https%3A%2F%2Fgr.ps&amp;linkname=" target="_blank"><img src="https://static.addtoany.com/buttons/whatsapp.svg" width="32" height="32" style="background-color:royalblue"></a>
            <a href="https://www.addtoany.com/add_to/reddit?linkurl=https%3A%2F%2Fgr.ps&amp;linkname=" target="_blank"><img src="https://static.addtoany.com/buttons/reddit.svg" width="32" height="32" style="background-color:royalblue"></a>
            </div>
    </aside>

  </div>
</main>
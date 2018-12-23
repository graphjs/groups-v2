<?php
    $this->layout('layout/template_'.$this->e($goal), [
        'title'     => 'General Settings',
        'brand'     => $this->e($brand),
        'public_id' =>$this->e($public_id),
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

<main role="main" class="groups-content container-fluid" onload="window.alert()">
  <form class="groups-settings" id="general-settings">
    <div class="form-group">
      <label>Grou.ps ID</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="groups-input-prefix input-group-text">https://gr.ps/</div>
        </div>
        <input type="text" class="id groups-input form-control" value="<?=$this->e($name)?>" placeholder="your_id">
      </div>
    </div>
    <div class="form-group">
      <label>Title</label>
      <input type="text" name="brandTitle" class="title groups-input form-control" value="<?=$this->e($brand)?>" placeholder="Please enter your title" onKeyUp="changeTitle(event)">
    </div>
    <div class="form-group">
      <label>Dark Theme</label>
      <input type="checkbox" class="theme groups-input switch form-control" onChange="changeTheme(event)">
    </div>
    <div class="colors form-group">
      <label>Colors</label>
      <span>
        <input type="color" name="primaryColor" class="primary-color groups-input form-control" value="#ffffff" onChange="changeColor(event)" />
        <label for="primaryColor">Primary Color</label>
      </span>
      <span>
        <input type="color" name="textColor" class="text-color groups-input form-control" value="#ffffff" onChange="changeColor(event)" />
        <label for="textColor">Text Color</label>
      </span>
      <span>
        <input type="color" name="backgroundColor" class="background-color groups-input form-control" value="#ffffff" onChange="changeColor(event)" />
        <label for="backgroundColor">Box Backgrounds</label>
      </span>
    </div>
    <button type="button" class="btn btn-secondary">Save</button>
    <a class="text-danger" href="<?php if($goal==="show"): ?>/?page=home<?php else: ?>/<?=$name?>/home<?php endif ?>">Exit without saving</a>
  </form>
</main>

<script type="text/javascript" src="/site/scripts/settings.js"></script>
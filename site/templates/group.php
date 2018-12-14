<?php
    $this->layout('template', [
        'title' => 'Group',
        'brand'     => $this->e($brand),
        'public_id'=>$this->e($public_id)
    ]);
?>

<main role="main" class="groups-content container-fluid p-0 mt-0"> 
  <script>
    function $_GET(param) {
        var vars = {};
        window.location.href.replace( location.hash, '' ).replace( 
            /[?&]+([^=&]+)=?([^&]*)?/gi, // regexp
            function( m, key, value ) { // callback
                vars[key] = value !== undefined ? value : '';
            }
        );

        if ( param ) {
            return vars[param] ? vars[param] : null;	
        }
        return vars;
    }
    document.writeln('<graphjs-group id="'.$_GET["id"].'" box="disabled"></graphjs-group>');
  </script>  
</main>
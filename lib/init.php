<?php

return function(
    string $id, 
    string $primaryColor = 'rgb(111, 135, 159)', 
    string $textColor = 'rgb(63, 95, 127)',
    string $backgroundColor = 'white',
    string $host = "",
    string $streamHost = ""
    ): string
{
    $host_param = "";
    $streamHost_param = "";
    if(!empty($host)) {
        $host_param = sprintf("host: '%s',", $host);
    }
    if(!empty($streamHost)) {
        $streamHost_param = sprintf("streamHost: '%s', streamId: '%s',", $streamHost, strtoupper($id));
    }
    $init_script = <<<'EOS'
    GraphJS.init('%s', {
        %s
        %s
        theme: {
            primaryColor: '%s',
            textColor: '%s',
            backgroundColor: '%s'
        }
    });
EOS;
    return sprintf($init_script, $id, $host_param, $streamHost_param, $primaryColor, $textColor, $backgroundColor);
};
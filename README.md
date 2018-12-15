## Grou.ps v2

A simple static page generator for Grou.ps v2 sites.

Please note, this repo covers only the frontend components. For the backend, you need to install [GraphJS-Server](https://github.com/phonetworks/graphjs-server). GraphJS-Server can be run on your own servers, or it can be deployed in one-click to Heroku. For more information, check out [GraphJS-Server README](https://github.com/phonetworks/graphjs-server/blob/master/README.md) 

### Installation

For getting started, you just need to install the PHP dependencies using [Composer](https://getcomposer.org/) by typing in:

```sh
composer install
```


### Usage

To generate a Grou.ps site, type in:

```sh
bin/generate.php {group_name} {public_graphjs_id} {group_title}
```


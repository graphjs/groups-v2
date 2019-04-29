## Grou.ps v2

**DEPRECATED REPO** please check out https://github.com/phonetworks/groups-frontend/

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

where:
* **group_name** is a short ASCII string
* **group_title** is the title of your site; may contain space and special characters.
* **public_graphjs_id** is your GraphJS ID. You can fetch one from https://graphjs.com

Your site will be generated under `dist/{group_name}` ready to be served statically.

You may follow the steps shown at https://pages.github.com/ to host your site on Github for free.

### License

MIT, see [LICENSE](https://github.com/phonetworks/pho-microkernel/blob/master/LICENSE).


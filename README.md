## Grou.ps v2

A simple static page generator for Grou.ps v2 sites. 



### Installation

For getting started, you just need to install the Node dependencies using [NPM](https://www.npmjs.com/get-npm) by typing in:

```sh
npm install
```

Please note, this repo covers only the frontend components. For the backend, you need to install [GraphJS-Server](https://github.com/phonetworks/graphjs-server). GraphJS-Server can be run on your own servers, or it can be deployed in one-click to Heroku. For more information, check out [GraphJS-Server README](https://github.com/phonetworks/graphjs-server/blob/master/README.md) and/or this instructional video https://youtu.be/K7bWKlT0k_g


### Usage

To generate a Grou.ps site, type in:

```sh
bin/generate {group_name} {group_title} --id {public_graphjs_id}
```

where:
* **group_name** is a short ASCII string
* **group_title** is the title of your site; may contain space and special characters.
* **public_graphjs_id** is your GraphJS ID. You can fetch one from https://graphjs.com

Your site will be generated under `dist/{group_name}` ready to be served statically.

Alternatively, you may generate a dynamic site by typing:

```sh
node server
```

but this is not the recommended way to run your site, it is good for preview only. You would need to create a .env file in the root of the installation; check out .env.example to see what values are required for the .env file. Then, the network can be displayed in a browser at the address http://127.0.0.1:8000/?page=home (with default settings.)

### License

MIT, see [LICENSE](https://github.com/phonetworks/pho-microkernel/blob/master/LICENSE).


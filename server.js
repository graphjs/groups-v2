const express = require('express');
const bodyParser = require('body-parser');
const cookieParser = require('cookie-parser');
var morgan = require('morgan');
const asyncMiddleware = require('./lib/asyncMiddleware');
const app = express();

let args = process.argv;
const port = args[2] || 8000;

// load environment variables
require('dotenv').config();

app.use(cookieParser());
app.use(bodyParser.urlencoded({
    extended: true,
}));

app.use(morgan('combined', {
    immediate: true
}));

app.get('/', asyncMiddleware(require('./index')));
app.get('/generate', asyncMiddleware(require('./generate/index')));
app.use('/site/vendor', express.static('site/vendor'));
app.use('/site/scripts', express.static('site/scripts'));
app.use('/site/styles', express.static('site/styles'));
app.use('/site/images', express.static('site/images'));
app.use('/site/404.html', express.static('site/404.html'));
app.use('/dist', express.static('dist'));
app.get('*', function(req, res) {
    res.redirect('/site/404.html');
  });

app.listen(port, () => console.log(`Example app listening on port ${port}!`));

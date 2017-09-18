# META+LAB Web Services

> The landing page for [api.sandbox.csun.edu](api.sandbox.csun.edu) / [api.metalab.csun.edu](api.metalab.csun.edu)

## Development Dependencies

Make sure you meet the following dependencies and install them in the following order. 

- [php](https://secure.php.net)
- [composer](https://www.getcomposer.org)
- [jigsaw](http://jigsaw.tighten.co/)

### Optional Dependencies
- [node](https://nodejs.org/en/) / [npm](https://www.npmjs.com/)

### Optional Installation

```$ npm install```

## Serving the Site

Once you have the dependencies installed, simply issue one of the following commands in your terminal:

```
$ jigsaw build            // builds using config.php
$ jigsaw build production // builds using config.production.php
$ jigsaw build sandbox    // builds using config.sandbox.php
```

...to serve the application with the built-in PHP server:

```
$ jigsaw serve            // serves the contents inside build_local
$ jigsaw serve production // serves the contents inside build_production
$ jigsaw serve sandbox    // serves the contents inside build_sandbox
```
# META+LAB Web Services

> The landing page for [api.sandbox.csun.edu](api.sandbox.csun.edu) / [api.metalab.csun.edu](api.metalab.csun.edu)

# Table of Contents
1. [Development Dependencies](#development-dependencies)
2. [Serving](#serving-the-site)
3. [Pushing Changes](#pushing-changes)

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

## Pushing changes

After we have built the specified environment, we are ready to push our files to their respective branches.
Since we're using jigsaw to automate the build process as much as possible there's a special way to push to the respective branches ```dev```, ```master```, and ```demo```
First we'll need to do a force add replacing <build_type> with the respective build: local, sandbox, production

```
$ git add -f build_<build_type>
```

Then we proceed to commit as normal.

```
$ git commit -m "<Your Message Here>"
```

After which we issue the following command

```
$ git subtree push --prefix build_<build_type> origin <branch_name>
```

*Notes:* _The mappings to builds and branches are as follows_

```
build_local      --> dev
build_production --> master
build_sandbox    --> demo
```
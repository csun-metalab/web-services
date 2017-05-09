var gulp = require('gulp');
var elixir = require('laravel-elixir');
var argv = require('yargs').argv;
var bin = require('./tasks/bin');

elixir.config.publicPath = 'source';

elixir(function(mix) {
    var env = argv.e || argv.env || 'local';
    var port = argv.p || argv.port || 3000;

    mix.exec(bin.path() + ' build --pretty=false ' + env, ['./source/*', './source/**/*', '!./source/_assets/**/*'])
      .browserSync({
          port: port,
          server: { baseDir: 'build_' + env },
          proxy: null,
          files: [ 'build_' + env + '/**/*' ]
      });
});


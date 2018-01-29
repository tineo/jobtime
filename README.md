
# JobTime

Job exchange demo.
##### https://jobtime.herokuapp.com/

This project use :

* Symfony 4 (https://symfony.com/4)
* Bootstrap 4 (https://getbootstrap.com/)
* React 16 (https://reactjs.org/)
* Webpack 3 (https://webpack.js.org/)
* Sass (http://sass-lang.com/)
* Yarn (https://yarnpkg.com)




Deploy on Heroku
---------

[![Deploy](https://www.herokucdn.com/deploy/button.png)](https://heroku.com/deploy?template=https://github.com/tineo/jobtime)

Enable production mode in Heroku
```
heroku config:set APP_ENV=prod
```

Enable PHP and Node in Heroku

```
heroku buildpacks:add heroku/php
heroku buildpacks:add heroku/nodejs
```
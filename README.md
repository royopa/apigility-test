<<<<<<< HEAD
My Tests With Apigility
=======================
=======
# apigility-test
>>>>>>> 29df7154bf23fc57366060481f8c4e1e70f27121

My tests using [apigility](https://apigility.org/)

Installing
---
  
With [composer](https://getcomposer.org/) already installed I used the commands below:

```
  cd ~/my_projects_folder
  
  composer create-project -sdev zfcampus/zf-apigility-skeleton path/to/install
```

Put the application in development mode
----

After install I need put the application in development mode with the command:

```
  cd path/to/install
  
  php public/index.php development enable # put the skeleton in development mode
```

Testing the application
----

Use the built in PHP server to put the application online

```
  cd path/to/install
  
  php -S 0.0.0.0:8888 -t public public/index.php
```

So I can visit the site at [http://localhost:8888/](http://localhost:8888/) - which will bring up a welcome page and the ability to visit the dashboard in order to create and inspect my APIs.

WordWrap
==============

Clone the repo

git clone git@github.com:PHP-TDD-Projects/WordWrap.git

open the project in phpStorm

open terminal in phpStorm

npm install

grunt init

open preferences (cmd ,)

php->composer

if using MAMP and php version 5.5.26 path to exicutible is
    /usr/bin/php
   
Click the browse files button to select the Path to PHP exicutable
    navigate to project directory
    select composer.phar file
 
Click the browse files button to select the Path to the composer.json
    navigate to the project directory
    select composer.json file
    apply and click ok


Add new php interpreter
    select PHP
    Select PHP language level 5.5
    Click the browse files button to create a new Interpreter
    Change the name to PHP 5.5 mac
    Set the PHP executable: /usr/bin/php
    click ok
    
To exicute the composer.phar file
    select Tools->commandLineToolSupport
    Click the plus sign to add the path to the executable
    Path to PHP executable: set to /user/bin/php
    Path to composer.phar: navigate to the project directory, select composer.json file
    click ok
    
Click apply and ok
 
Under the tools dropdown select the run command
    c install  (this will install all the composer dependencies)
    Once compleate a popup will ask if you want to add the files to git
    Click Cancel
    

setting up a UnitTest
    in the run dropdown click the edit configurations
    click the add button is a plus sign
    select PHPUnit

   set the Name to 'Run all test'
   set the directory to run test files to 
        (projectDirctory)/tests
   apply and click ok


This is the link to the tutorial that we are following to get a feel for the workflow
http://code.tutsplus.com/tutorials/lets-tdd-a-simple-app-in-php--net-26186


This will be the end of  the READ.md












About
--------------

URL: [https://github.com/sprov03/WordWrap](https://github.com/sprov03/WordWrap)

Author: sprov03



Build dependencies
--------------

In order to build your generated Composer project from its source, you will need Grunt and PHP on the command line.

So, you must install PHP5 on your system on your command line. Test it:

```
php --help
```


To install Grunt globally on the command line (and run the above build task), run:

```
npm install -g grunt-cli
```

Run composer install to make sure the new changes are updated

```
npm install
```


Then, with Grunt, you can install Composer, PhpDocumentor, PhpUnit and PhpCPD locally. Just run once:

```
grunt init
```

Then, you can install PhpDocumentor, PhpUnit and PhpCPD locally. Just run once:

```
php composer.phar install -v
```

Finally, you should also install the PHP extension named Xdebug, which will be used by PhpUnit for code coverage.

```
git clone git://github.com/xdebug/xdebug.git
```


Build the sources
--------------

Once all your dependencies are installed, you can build your project with Grunt:

```
grunt build
```

The build process will run the following tasks:

* PhpLint: runs php -l over the "src" folder
* Runs the tests located in the "tests" folder with [PHPUnit](http://phpunit.de/)
* Generates a [PhpDocumentor](http://phpdoc.org) documentation in the "doc" folder from the files of the "src" folder
* Detects copy/paste of code in the files of the "src" folder with [PhpCPD](https://github.com/sebastianbergmann/phpcpd)

[![Built with Grunt](https://cdn.gruntjs.com/builtwith.png)](http://gruntjs.com/)






Credits
--------------

WordWrap was initiated with [generator-composer](https://github.com/T1st3/generator-composer), a [Yeoman](http://yeoman.io) generator that builds a PHP Composer project.

This project uses the following as development dependencies:

* [PHPUnit](http://phpunit.de/)
* [PhpDocumentor](http://phpdoc.org)
* [Php Copy/Paste Detector](https://github.com/sebastianbergmann/phpcpd)


License
--------------

[License](https://github.com/sprov03/WordWrap/blob/master/LICENSE)

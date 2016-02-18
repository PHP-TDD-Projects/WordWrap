#WordWrap

## Clone the repo
```
$ git clone git@github.com:PHP-TDD-Projects/WordWrap.git
```

## Setting up PhpStorm

open the project folder with PhpStorm.
open terminal in phpStorm

&nbsp;&nbsp;&nbsp;    if npm is not installed 
&nbsp;&nbsp;&nbsp;    browse to https://nodejs.org/en/download/ and install node
    
&nbsp;&nbsp;&nbsp;   There is a good video on how to fix permissions if you need to 
&nbsp;&nbsp;&nbsp;   https://docs.npmjs.com/getting-started/fixing-npm-permissions 

```
npm install

npm install -g grunt-cli

grunt init
```

## Setting up composer executable
Shortcut to preferences is (cmd ,)

**Preferences->Languages&Frameworks->PHP->Composer**
```
    Path to exicutable: /usr/bin/php
    Path to composer.phar: {**Project Directory**}/composer.phar
    Path to composer.json: {**Project Directory**}/composer.json
```

## Setting up interpreter

**Preferences->Languages&Frameworks->PHP**
```
    PHP language level: 5.5
    Click the browse files button to create a new Interpreter
        Name: PHP 5.5
        PHP executable: /usr/bin/php
        click ok
```
 
## To exicute the composer.phar file

**Preferences->Tools->commandLineToolSupport**
```
    Click the plus sign to add the path to the executable
        Choose Tool: Composer
        Visibility: Project
    click ok
    Path to PHP executable: /user/bin/php
    Path to composer.phar: {**Project Directory**}/composer.json
    click ok
```
Click apply and ok

## Running Composer install inside PhpStrom

**_`Tools->run command`_**
```
    c install  (this will install all the composer dependencies)
    Once compleated, a popup will ask if you want to add the files to git, Click Cancel
``` 

## Setting up a UnitTest

**_`Run->edit configurations`_**
```
    click the plus sign to add configuration
    select PHPUnit

    Name: Run all test
    Directory: {**Project Dirctory**}/tests
    click apply and ok
```

This is the link to a youtube video on how to use unit test in PhpStorm
https://www.youtube.com/watch?v=H5gDybRDVog&index=5&list=PLgTb0cfBmbMBXOm9qnWn3CSezmQc3bmxS

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

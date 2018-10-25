# CakePHP Application Skeleton

[![Build Status](https://img.shields.io/travis/cakephp/app/master.svg?style=flat-square)](https://travis-ci.org/cakephp/app)
[![Total Downloads](https://img.shields.io/packagist/dt/cakephp/app.svg?style=flat-square)](https://packagist.org/packages/cakephp/app)

A skeleton for creating applications with [CakePHP](https://cakephp.org) 3.x.

The framework source code can be found here: [cakephp/cakephp](https://github.com/cakephp/cakephp).

## Installation

1. Download [Composer](https://getcomposer.org/doc/00-intro.md) or update `composer self-update`.
2. Run `php composer.phar create-project --prefer-dist cakephp/app [app_name]`.

If Composer is installed globally, run

```bash
composer create-project --prefer-dist cakephp/app
```

In case you want to use a custom app dir name (e.g. `/myapp/`):

```bash
composer create-project --prefer-dist cakephp/app myapp
```

You can now either use your machine's webserver to view the default home page, or start
up the built-in webserver with:

```bash
bin/cake server -p 8765
```

Then visit `http://localhost:8765` to see the welcome page.

## Update

Since this skeleton is a starting point for your application and various files
would have been modified as per your needs, there isn't a way to provide
automated upgrades, so you have to do any updates manually.

## Configuration

Read and edit `config/app.php` and setup the `'Datasources'` and any other
configuration relevant for your application.

## Layout

The app skeleton uses a subset of [Foundation](http://foundation.zurb.com/) (v5) CSS
framework by default. You can, however, replace it with any other library or
custom styles.
Création de l'application cake :
php composer.phar create-project --prefer-dist cakephp/app blog

Création du dépot distant
cd blog
git init 				#initialisation du dépot git
git add -A				#indexation des fichiers à suivre
git commit -m "création du projet"	#commit initial
git remote add origin https://github.com/juli1legall/blogcakephp.git #ajout du dépot distant
git push -u origin master		push

Création de la BDD
mysql -u root -p
CREATE USER 'root'@'localhost' IDENTIFIED BY 'root';
CREATE DATABASE blog;
GRANT ALL PRIVILEGES ON blog.* TO 'blog'@'localhost';

Création de la table
CREATE TABLE IF NOT EXISTS `posts` (
     `id` int(11) NOT NULL auto_increment,
     `title` varchar(50) default NULL,
     `content` text,
     `created` datetime default NULL,
     `modified` datetime default NULL,
     `published` tinyint(1) NOT NULL default '1',
     PRIMARY KEY (`id`)
);

INSERT INTO `posts` (`id`,`title`,`content`,`created`,`modified`,`published`)
VALUES (1,'Premier article', 'Contenu du premier article','2008-06-19 18:26:11','2008-06-19 18:26:11',1),
(2,'Second article', 'Contenu du second article','2008-06-20 18:26:11','2008-06-20 18:26:11',1),
(3,'Troisème article', 'Contenu du troisième article','2008-06-21 18:26:11','2008-06-21 18:26:11',1);

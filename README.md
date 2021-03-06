# Dime Timetracker

A time tracker based on Symfony2, backbone.js and Twitter Bootstrap.

## General Purpose

The project's purpose is tracking working times with hourly rates.

An API and open architecture will serve additional purposes:

  * accounting and invoicing (generate invoices, add non-time related items)
  * manage customers (CRM)
  * project management
  * issue tracking

## IRC

Our IRC channel is #dime-timetracker on Freenode.

## Demo

  * URL: <http://demo.dime-timetracker.de/>
  * User: admin
  * Password: kitten

## Installation

Permissions:

    chmod -R u+w app/cache app/logs

Copy parameter.yml.dist to parameters.yml and edit the database section:

    cp app/config/parameters.yml.dist app/config/parameters.yml

Download composer:

    curl -s http://getcomposer.org/installer | php

Download vendors:

    php composer.phar install -v

Check application config in browser:

    http://path/to/web/config.php

Create database with fixtures:

    app/console dime:create-db

Publish all needed assets for Dev and Production:

    app/console dime:publish-assets
    app/console dime:publish-assets --env=prod

## Update

Update to last version

    git pull
    php composer.phar self-update
    php composer.phar install -v
    app/console dime:publish-assets --env=prod

If you have any problem remove vendor and install again

    rm -fR vendor

Update database

    app/console doctrine:migrations:migrate

## Bundles

By now there are two bundles: the `DimeTimetrackerBundle` which offers a REST API, and the `DimeTimetrackerFrontendBundle` on top of that. Refer to their `Resources/doc` folders for details.

## Contributing

Please feel free to contribute issues, improvements and feedback.

For code contributions, [Symfony2 Coding Standards] are the way we want to go.

Please write in English and use the `doc` folders for documentation and proposals rather than Github wiki.

[Symfony2 Coding Standards]: http://symfony.com/doc/master/contributing/code/standards.html

## Development-Branches

The branches API and Frontend are gone. We switch now to feature branches. Every feature branch will be created from master. Here the steps to go.

Create remote feature branch:

    git pull origin master
    git push origin ISSUENO-and-a-short-description
    git checkout -t ISSUENO-and-a-short-description

or for short bugfixing create only a local branch:

    git pull origin master
    git checkout -b ISSUENO-and-a-short-description

keep up to date with the master (not sure with this - have to test it):

    git fetch origin master
    git rebase orgin/master

if your work is done, merge back to master:

    git checkout master
    git fetch
    git rebase
    git merge ISSUENO-and-a-short-description

Finally remove remote feature branch:

    git push origin :ISSUENO-and-a-short-description

and the local branch too:

    git branch -d ISSUENO-and-a-short-description

## Run Test

Install PHPUnit: http://symfony.com/doc/current/contributing/code/tests.html

    $ pear channel-discover pear.phpunit.de
    $ pear channel-discover components.ez.no
    $ pear channel-discover pear.symfony-project.com
    $ pear install phpunit/PHPUnit

Run tests:

    phpunit -c app/

## Alternatives

### Time tracking

* Freckle <http://letsfreckle.com>
    * with nice input box: <http://letsfreckle.com/blog/2011/10/more-than-meets-the-eye-the-quick-entry-box/>
* Toggl <https://www.toggl.com>
* Harvet <http://www.getharvest.com>
* Invoicera <http://www.invoicera.com>
* Tick <http://www.tickspot.com>
* Mite <http://mite.yo.lk/en>
* Kimai <http://www.kimai.org>
* Make some time <http://makesometime.com>
* Clocking IT <http://www.clockingit.com/> (Open Source, Ruby)

### Beyond

* Mint <https://www.mint.com>
* Billings <http://www.marketcircle.com/billings>
* Taskwarrior <http://www.taskwarrior.org>

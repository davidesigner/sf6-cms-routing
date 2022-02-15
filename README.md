# Symfony 6 with CMS Routing

## To reproduce the problem

1. install the project on your local.
2. try to run `bin/console d:m:diff` (you will see the error reported on [this issue](https://github.com/symfony-cmf/routing-bundle/issues/477)).

## Install (for OSx)

1. Install PHP

```bash
# Install PHP 8.1
brew install php@8.1
   
# Install PHP Switcher to be able to switch between php versions with "phpswitch.sh 8.1"
brew install brew-php-switcher
```  

2. Install [Composer](https://getcomposer.org/download/)
3. Install [Docker](https://docs.docker.com/desktop/mac/install/)
4. Install [Symfony](https://symfony.com/download)
5. Check if your host is ready: `symfony check:requirements`
6. Retrieve the project on your host:

```bash
git clone git@github.com:davidesigner/sf6-cms-routing.git
cd sf6-cms-routing
composer install
```


## Start coding

```bash
# Start the server in the background then open the website
./bin/server start

# Stop the server
./bin/server stop
```

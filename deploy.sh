#!/bin/bash

git pull 
composer2 install --no-dev --optimize-autoloader
php bin/console asset-map:compile
composer2 install --no-dev --optimize-autoloader
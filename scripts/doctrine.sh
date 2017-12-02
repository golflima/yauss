#!/bin/bash
rm -vf src/App/Entity/*.php*
rm -vf src/App/Repository/*.php*
php bin/console orm:generate-entities src
php bin/console orm:generate-repositories src
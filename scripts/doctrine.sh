#!/bin/bash
php bin/console orm:generate-entities src
php bin/console orm:generate-repositories src
# GL YAUSS :: Contribute

## Setup a working development environment

1. See [README.md](README.md) about installation procedure
2. Use Docker to run the application

## Use Doctrine

* Do *NOT* make changes in files located at `src/App/Entity`, they are automatically generated with:
  * Mapping files located at: `res/doctrine/mapping`
  * Command: `docker-compose run web php bin/console orm:generate-entities src`
* Do *NOT* make changes in files located at `src/App/Repository`, they are automatically generated with:
  * Mapping files located at: `res/doctrine/mapping`
  * Command: `docker-compose run web php bin/console orm:generate-repositories src`
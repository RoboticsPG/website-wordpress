# Robotics Playground Website
This is the new website for Robotics Playground, it is a generic Wordpress website with a custom theme.

This repo holds the custom theme and the setup for a docker based development environment.

## Directory structure

- `dev_environment`: Contains the docker based dev environment
- `roboticspg`: Contains the wordpress theme

## Development

Install the following:
- Docker

To run the project:

```bash
cd dev_environment
docker-compose up -d
```

Wordpress will be hosted on `localhost:8000`.

During the first run, you will need to follow the standard Wordpress
installation steps.

## Docker Compose commands

Start the dev environment
```bash
docker-compose up -d
```

Stop the dev environment
```bash
docker-compose down
```

Delete the dev environment, including the database
```bash
docker-compose down --volumes
```

Shelling into a container
```bash
docker container ls

docker exec -i -t  #container_id /bin/bash
```

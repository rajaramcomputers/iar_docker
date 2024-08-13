# Docker Quickstart Guide

This repository provides a quick introduction to using Docker. You can try most of the commands without installing Docker by using an online playground or by following the instructions to install Docker on your machine.

## Quickstart without Installation

You can try out Docker commands online using this [Docker Playground](https://killercoda.com/ijikeman/scenario/docker-playground).

## Installing Docker

If you'd like to install Docker on your local machine, follow the instructions provided [here](https://docs.docker.com/engine/install/).

## Basic Docker Commands

```bash
docker image ls
docker pull hello-world
docker run hello-world
docker container rm <container_id>
```
## Working with Alpine Linux
```bash

docker pull alpine
docker run -it alpine
```
## Common Commands to Try in Alpine Container
```bash
df
nano
clear
apk update
apk add nano
nano
history
```
### To exit the container without stopping it: Ctrl + pq
## Managing Containers
```bash
docker run --name iir -it alpine
docker exec -it iir /bin/sh
docker attach <container_id>
docker container stop <container_id>
docker start <container_id>
docker stop <container_id>
docker rm <container_id>
docker rm -f <container_id>
```
## Working with Nginx
### Create a directory named nginx-project, and inside it, create the following files:
### (folder available.. check it)
## Dockerfile
```Dockerfile
FROM nginx:alpine
COPY index.html /usr/share/nginx/html/
~~
## Build and Run the Nginx Container
```bash
docker build -t my-nginx-image .
docker run -d -p 9001:80 my-nginx-image
docker cp index.html <container_id>:/usr/share/nginx/html/
```
## Working with MySQL and PHP
### Create a Docker Network
```bash
docker network create my-network
```
MySQL Container
```bash
docker run --name my-mysql -e MYSQL_ROOT_PASSWORD=mysql@123 -d --network my-network mysql:latest
docker exec -it my-mysql mysql -u root -p
```
## Create a database and table in MySQL:
```sql
CREATE DATABASE my_database;

USE my_database;

CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    age INT
    );

INSERT INTO students (name, age) VALUES
      ('Rahul Sharma', 22),
      ('Aisha Khan', 21),
      ('Suresh Patel', 23),
      ('Priya Desai', 20);
```
## PHP Container
```bash
docker build -t my-php-app .
docker run --name php-app --network my-network -p 8080:80 my-php-app
```
### Or alternatively:
```bash
docker run -d --name php-app --network my-network -p 8080:80 my-php-app
```
## Additional References
### To stop a running container:
```bash
docker kill <container_id> or <container_name>
```
### To remove the network (reference):
```bash
docker network rm my-network
```

# iar_docker
reference to github.
https://github.com/rajaramcomputers/iar_docker.git
Try without installation most of the command will work.
https://killercoda.com/ijikeman/scenario/docker-playground
or 
###install docker and try
###https://docs.docker.com/engine/install/
----
docker image ls
docker pull hello-world
docker run hello-world
docker containter rm <containter_id>
----

Alpine
docker pull alpine
docker run -it alpine
--some command to test
df
nano
clear
apk update
apk add nano
nano
history
--
ctrl +pq - to exit without stopping the container
--
docker run --name iir -it alpine
docker exec -it iir /bin/sh
docker attach container_id
docker container stop container_id
docker start container_idd
docker stop container_id
docker rm container_id
docker rm -f container_id
---
Nginx
Create a folder nginx-project
1. Dockerfile is created
2. index.html is created
Content of Dockerfile is as follows:

FROM nginx:alpine

COPY index.html /usr/share/nginx/html/
--c510 is the container id--
docker build -t my-nginx-image .
docker run -d -p 9001:80 my-nginx-image
docker cp index.html c510:/usr/share/nginx/html/
----
mysql and php

docker network create my-network
--to remove - docker network rm my-network

docker run --name my-mysql -e MYSQL_ROOT_PASSWORD=mysql@123 -d --network my-network mysql:latest
docker exec -it my-mysql mysql -u root -p

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

docker build -t my-php-app .
docker run --name php-app --network my-network -p 8080:80 my-php-app
--- other option 
docker run -d --name php-app --network my-network -p 8080:80 my-php-app
-- additional reference 
docker kill <container_id> or <container_name>

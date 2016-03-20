# Laravel homestead-docker
Create a homestead docker container for your development env. ( files taken from laravel settler: provision.sh (modified) + serve.sh )

### Install docker && docker compose
please refer to these tutorials:
* install docker (https://docs.docker.com/installation/ubuntulinux/)
```shell 
curl -sSL https://get.docker.com/ | sh
```
* install docker compose (https://docs.docker.com/compose/install/)
```shell
curl -L https://github.com/docker/compose/releases/download/1.6.0/docker-compose-`uname -s`-`uname -m` > /usr/local/bin/docker-compose
```

### Build the homestead image
```shell
git clone https://github.com/shincoder/homestead-docker.git
cd homestead-docker
docker build -t shincoder/homestead .
```

### Launch your containers
There are only two containers to run. web container ( includes everything except your database ), and mariadb container.
```shell
sudo docker-compose up -d
```
this will build the image, and start it.

### SSH into the container (password: secret):
```shell
ssh -p 2222 homestead@localhost
```

### Add a virtual host
Assuming you mapped your apps folder to ```/apps``` (you can change mappings in the docker-compose.yml file, it's prefered to use absolute paths), you can do:
```shell
cd / && ./serve.sh default /apps/laravel/public
```
In the host, update ``` /etc/hosts ``` to include your app domain:
```shell
127.0.0.1               myapp.dev
```

### Everything should work - enjoy !!!
Our web container starts nginx, php5-fpm, redis, beanstalk. and has gruntjs, gulp, bower.
some relevant ports have been added to docker-compose.yml ( livereload standard port, karma server port ), change them if you need to.

### Notes
- Use docker's local IP address to connect to your database. Run `docker inspect --format '{{ .NetworkSettings.IPAddress }}' ${CID}`, where `${CID}` is docker container ID of the database
- Databases: by default mariadb is used as a database, but you are free to use any database you want: choose from these excellent images by Tutum: [tutum/mysql](https://github.com/tutumcloud/mysql) or [tutum/postgresql](https://github.com/tutumcloud/postgresql), they expose different environment variables, so don't forget to update your docker-compose file accordingly.


### TODO
- [ ] use supervisor (should monitor: redis, nginx, php-fpm, beanstalk, ssh server)

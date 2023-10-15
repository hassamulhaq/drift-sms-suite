## Setup Project

- install docker, docker compose and follow below cmds

```text
sudo systemctl apache2 stop
sudo systemctl mysql stop
sudo systemctl mariadb stop // if you have
```


```text
./vendor/bin/sail composer install

./vendor/bin/sail npm install

./vendor/bin/sail artisan migrate

./vendor/bin/sail npm watch

./vendor/bin/sail up
```


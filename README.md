uitest_reporter
===============

A Symfony project created on June 8, 2017, 11:27 am.

## Get started

To run the server, execute the following command.

```bash
$ docker-compose up
```

Now you are able to access the site on TCP:8080 on your local machine.

```bash
$ curl http://localhost:8080

<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
...
```

If you no longer need the application, send `Ctrl + C` to stop the container and run `docker-compose down` to remove it.
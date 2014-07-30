Python FastCGI Nginx Configuration
==================================

A Python FastCGI script with Nginx configuration.

Using simplest configuration for load balancing with nginx (``upstream`` instruction).

After installing Nginx configuration, make sure to have a repository for receiving pid files.

```
mkdir /var/run/wsgisample
```

And just launch daemon with the following command.

```
/etc/init.d/wsgi-sample start
```

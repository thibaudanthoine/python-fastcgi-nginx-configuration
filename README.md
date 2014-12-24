Python FastCGI with Nginx Configuration
=======================================

A Python FastCGI script with Nginx configuration.

This script is based on WSGI specification (Web Server Gateway Interface) for interfacing Web servers and Python Web frameworks/applications.

Using a smartest configuration for load balancing with Nginx (``upstream`` instruction).

### Installation

After installing Nginx configuration, make sure to have directory to receiving pid files.

```
mkdir /var/run/wsgisample
```

And just launch daemon with following command.

```
/etc/init.d/wsgi-sample start
```

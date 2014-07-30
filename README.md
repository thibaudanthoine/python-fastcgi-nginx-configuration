Python FastCGI with Nginx Configuration
=======================================

A Python FastCGI script with Nginx configuration. This script is based on WSGI specification (Web Server Gateway Interface) for a standardized interface between Web servers and Python Web frameworks/applications.

Using simplest configuration for load balancing with nginx (``upstream`` instruction).

### Installation

After installing Nginx configuration, make sure to have a repository for receiving pid files.

```
mkdir /var/run/wsgisample
```

And just launch daemon with the following command.

```
/etc/init.d/wsgi-sample start
```

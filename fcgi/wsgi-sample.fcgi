#!/usr/bin/env python
# -*- coding: UTF-8 -*-

import sys, os
from flup.server.fcgi import WSGIServer
from cgi import escape
import getopt

def app(environ, start_response):
    start_response('200 OK', [('Content-Type', 'text/html')])

    yield '<h1>FastCGI Environment</h1>'
    yield '<table>'
    for k, v in sorted(environ.items()):
	 yield '<tr>'
         yield '<th>%s</th>' % (escape(k))
         if isinstance(v, basestring):
	     yield '<td>%s</td>' % (escape(v))
	 else:
	     yield '<td>%s</td>' % v
	 yield '</tr>'
    yield '</table>'

def output_usage(argv):
    print 'Usage: %s -i=<instance>' % argv[0]
    print '       -i | --instance=i instance to start'

# ######################## ENTRY POINT ########################

if __name__ == '__main__':
    # Mandatory arg: -i <instance number>
    if len(sys.argv) < 2:
        output_usage(sys.argv)
        sys.exit(2)

    # set the instance number
    try:
        opts, args = getopt.getopt(sys.argv[1:], 'i:', ['instance='])
    except getopt.GetoptError:
        output_usage(sys.argv)
        sys.exit(2)

    for opt, arg in opts:
        if opt in ('-i', '--instance'):
            instance = arg
            print 'Using instance=%s' % instance

    sock_path = '/var/run/wsgisample/fcgi/fcgi_%s.sock' % instance
    sock_umask = 0

    WSGIServer(app, bindAddress = sock_path, umask = int(sock_umask)).run()
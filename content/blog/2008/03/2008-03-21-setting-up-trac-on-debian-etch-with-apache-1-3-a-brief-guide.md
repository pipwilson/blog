+++
title = "Setting up Trac on Debian Etch with Apache 1.3 (a brief guide)"
date = "2008-03-21 15:34:17"
slug = "setting-up-trac-on-debian-etch-with-apache-13-a-brief-guide"
[taxonomies]
tags = ['general','linux','python','tools','trac','web']
[extra]
show_comments = "true"
+++

This is a summary of what I got from the [Trac](http://trac.edgewall.org/) installation instructions [here](http://trac.edgewall.org/wiki/TracInstall), [here](http://trac.edgewall.org/wiki/TracOnDebian), [here](http://trac.edgewall.org/wiki/TracModPython) and [here](http://trac.edgewall.org/wiki/TracModPython2.7). My life would have been easier if I was running Apache2, but for the site in question, I’m not.

The version numbers I am working with:

- apache – 1.3.34-4.1
- python – 2.4.4-2
- libapache-mod-python 2:2.7.11-2
- Trac 0.11b2

[Install easy\_install](http://peak.telecommunity.com/DevCenter/EasyInstall#installing-easy-install), followed by the Trac requirements:

<kbd> $ easy\_install Pygments  
$ easy\_install Genshi  
$ easy\_install Trac  
$ easy\_install sqlite  
$ apt-get install libapache-mod-python  
$ apt-get install python-pysqlite2  
$ cd ~  
$ mkdir trac/myprojectname  
$ trac-admin trac/myprojectname initenv </kbd>

(enter the details you need or just keep hitting <enter> to accept the defaults – it’s all configurable later)</enter>

Type the tracd line given to you at the end of the install and make sure it runs (probably need your IP at this point because it won’t bind to a hostname).

Add this inside your VirtualHost:

```
<Location /wherever/you/like>
  SetHandler python-program
  PythonHandler trac.web.modpython_frontend
  PythonOption TracEnv /absolute/path/trac/myprojectname
  PythonOption TracUriRoot /wherever/you/like
  PythonDebug On
</Location>
```

Patch /usr/lib/python2.4/site-packages/Trac-0.11b2-py2.4.egg/trac/web/modpython\_frontend.py with code from <http://trac.edgewall.org/wiki/TracModPython2.7> (yes, it’s all needed) – the “Known Issues” at the end of the code apply, most notably “There may be a character set issue” – for me this manifested itself in the &lt;title&gt; element of the page with a “â€“” separating my project name from the word “Trac” rather than a long hypen.

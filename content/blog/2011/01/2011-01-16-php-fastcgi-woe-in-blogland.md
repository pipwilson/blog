+++
title = "php-fastcgi woe in blogland"
date = "2011-01-16 12:27:49"
slug = "php-fastcgi-woe-in-blogland"
[taxonomies]
tags = ['blog','general','nginx','php','php-cgi','ubuntu']
[extra]
show_comments = "false"
+++

At the end of last week I upgraded my server from Ubuntu Intrepid to Jaunty (and have since gone all the way up to Lucid, a process that was not as simple as I would have liked). As far as I could tell, everything had gone smoothly, but my blog was unavailable (which I discovered very quickly thanks to the automated [Pingdom](http://pingdom.com) emails). My blog runs on php-fastcgi behind [nginx](http://wiki.nginx.org/Main), which had been very simple to install, but now, executing `/etc/init.d/php-fastcgi start` resulted in an “OK” status but no PHP server actually running!

Isolating the correct command from the startup script eventually got it running (although I still can’t work out whether it really is the quotemarks around $DAEMONARGS that’s causing this problem or not), but it stops again after a couple of hours. I can only guess that this is because I’ve been running it as a simple sudo and without &amp; – but surely [start-stop-daemon](http://man.cx/start-stop-daemon(8)) should handle all this for me?!

Anyway, an investigation into [PHP-FPM](http://php-fpm.org/) as an alternative is underway, and this here blog will be massively intermittent until then!

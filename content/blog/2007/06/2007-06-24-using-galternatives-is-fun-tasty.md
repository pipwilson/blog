+++
title = "Using GAlternatives is fun, tasty"
date = "2007-06-24 16:39:00"
slug = "using-galternatives-is-fun-tasty"
[taxonomies]
tags = ['java','java','ubuntu']
[extra]
show_comments = "true"
+++

[![G Alternatives screenshot](http://philwilson.org/blog/2007/06/G Alternatives_small.png)](<http://philwilson.org/blog/2007/06/G Alternatives.png>)

If you’ve got a raw Ubuntu box it probably came with `gij`, the GNU Java runtime interpreter. If you’ve installed Sun’s JDK using `sudo apt-get install sun-java5-jdk` then you’ll now have Sun’s runtime but gij will still be the default. This is maintained by the [alternatives system](http://www.die.net/doc/linux/man/man8/alternatives.8.html). You can either go and fix it yourself or you can `sudo apt-get install galternatives` followed by `galternatives` to run it (I haven’t noticed it in any menu although of course you can add it yourself).

This gives you a nice GUI onto all of the currently set commands in `/etc/alternatives` and what they can be set to. If you scroll down the list you’ll need to change the settings for `jar` and `java`.

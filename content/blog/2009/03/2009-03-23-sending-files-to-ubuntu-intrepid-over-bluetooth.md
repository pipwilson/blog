+++
title = "Sending files to Ubuntu Intrepid over bluetooth"
date = "2009-03-23 22:54:40"
slug = "sending-files-to-ubuntu-intrepid-over-bluetooth"
[taxonomies]
tags = ['bluetooth','general','linux','mobile']
[extra]
show_comments = "true"
+++

Out of the box you cannot send files over bluetooth to a computer running the latest stable version of [Ubuntu](http://www.ubuntu.com/), Intrepid Ibex, 8.10.

This is a bit of a problem for me since my main camera is my trusty Nokia N95. What you can do is send files to your phone, and browse its filesystem, just not receive. As you can imagine, there are some [open](https://bugs.launchpad.net/ubuntu/+source/bluez/+bug/283064) [bugs](https://bugs.launchpad.net/ubuntu/intrepid/+source/bluez-utils/+bug/211252) about this. The seemingly recommended solution of installing gnome-obex-server also installs apache2 and sendmail, which seems like a bit of overkill to me.

Enter [Blueman](http://blueman-project.org/). Just add these lines to your repositories config ([you can follow these instructions](https://help.ubuntu.com/8.04/add-applications/C/extra-repositories-adding.html))

```
deb http://ppa.launchpad.net/blueman/ppa/ubuntu intrepid main
deb-src http://ppa.launchpad.net/blueman/ppa/ubuntu intrepid main
```

and then <kbd>sudo apt-get install blueman</kbd>.

A quick click on System -&gt; Preferences -&gt; Bluetooth manager (it took a few minutes for the icon cache to update for me) and you have the new manager for your bluetooth devices. You don’t need to do anything special to be able to send files to Ubuntu now, just click “send” on your phone and you’ll be asked if you want to accept the file being sent. By default the files will be saved into your home directory. There’s more information on [the site](http://blueman-project.org/) and in [the forums](http://blueman-project.org/forum/). Have fun, kids!

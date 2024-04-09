+++
title = "Post to Twitter from Ubuntu Deskbar"
date = "2007-03-19 15:48:00"
slug = "post-to-twitter-from-ubuntu-deskbar"
[taxonomies]
tags = ['deskbar','general','twitter','ubuntu']
[extra]
show_comments = "true"
+++

Deskbar is a Gnome widget you can embed in a panel and can be used for opening applications, opening items from your browser history, doing web searches and all sorts. It’s not as good as [Quicksilver](http://docs.blacktree.com/quicksilver/what_is_quicksilver) but better than [Launchy](http://www.launchy.net/). It fires when you hit a key combo (mine is CTRL+SPACE) and looks a bit like this:

![Screenshot of Deskbar on Ubuntu](http://philwilson.org/images/deskbar-screenshot.png "Deskbar pops up with a list of suggested results")

For the soulless, <q cite="http://www.christopherspenn.com/2007/03/03/what-is-twitter/">Twitter is length limited asynchronous multicast IM</q>, for everyone else, it’s a nice way to keep up to date with what your friends are doing using the web, IM or SMS. [My rarely-posted to Twitter page is here.](http://www.twitter.com/pip)

Lucky for me, [Deskbar is easily extendable](http://live.gnome.org/DeskbarApplet/Extending) , and so that’s just what I’ve done. I looked at the [Twitter Wiki](http://twitter.pbwiki.com/), found [a Python Twitter library](http://code.google.com/p/python-twitter/) downloaded their little icon thing and written a sript to let you post to Twitter from your Deskbar. It looks like this:

![Screenshot of Deskbar with Twitter plugin installed](http://philwilson.org/images/twitter-deskbar-screenshot.png "You can post to Twitter")

To install:

1. [Install python-twitter](http://code.google.com/p/python-twitter/)
2. Grab [deskbar-twitter.py](http://philwilson.org/code/deskbar-twitter/deskbar-twitter.py) and [twitter.png](http://philwilson.org/code/deskbar-twitter/deskbar-twitter.png) and put them in ~/.gnome2/deskbar-applet/handlers/
3. Open your downloaded deskbar-twitter.py in an editor
4. Replace TWITTER\_USERNAME and TWITTER\_PASSWORD with your Twitter details
5. Replace YOUR\_USERNAME with your Ubuntu username

It took longer to write this blog post than the code, so patches welcome.

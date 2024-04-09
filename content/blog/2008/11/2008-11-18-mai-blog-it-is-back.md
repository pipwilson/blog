+++
title = "Mai blog! It is back!"
date = "2008-11-18 22:49:36"
slug = "mai-blog-it-is-back"
[taxonomies]
tags = ['apache','bbc','general','iplayer','ngingx']
[extra]
show_comments = "false"
+++

So, I finally finished the move from one host to another. It should not have taken as long as it did but after a frustrating night with the nginx config I spent a few days unwinding and catching up with the BBC’s new light entertainment series for Saturday nights, [Merlin](http://www.bbc.co.uk/programmes/b00dr74v/episodes/2008) by watching it on iPlayer. My god I love iPlayer. It’s amazing. Even though I already have a PVR which the wife and I use heavily, iPlayer has still changed how we think about and watch TV. Awesome.

Anyway.

In the process of moving server I also moved from my blog being served from Apache+mod\_php to Nginx+fastcgi (in particular I followed these instructions: [Perfect Setup: Ubuntu Hardy+Nginx+MySQL5+PHP5+Wordress](http://www.mensk.com/webmaster-toolbox/perfect-ubuntu-hardy-nginx-mysql5-php5-wordpress/)). I learnt a few things, although I’m sure most lessons will become apparent over the coming weeks. 😉

Firstly, [nginx](http://nginx.net/) is amazing. In-place binary upgrades; simpler (to me) config files; faster; smaller; less memory overheard. If memory is no object to you, then you’re probably safe staying with Apache2, otherwise I’d recommend the switch.

fastcgi is less good, taking more memory than I’d like, although it’s hard to do an apples-to-apples comparison because of course Apache2 masks the PHP usage. This may also be throwing off the nginx vs. Apache2 comparisons between my servers but only by a small amount I hope.

Another reason I’ve taken to nginx is that the documentation seems to have made a leap that Apache2’s never seems to have managed. That is to say, it is [a user-friendly wiki](http://wiki.codemongers.com/Main) with sections for both [user-contributed recipes](http://wiki.codemongers.com/NginxConfiguration) as well as a [complete config reference](http://wiki.codemongers.com/NginxModules). Apache’s documentation has always been a source of pain to me, and it’s almost always guaranteed that the answer you’re looking for is on someone’s blog or in a mailing list somewhere rather than closer to the main docs and having some vague authority of being halfway accurate.

Of course, this may just be because Apache2 is now a venerable beast (or at least the docs that also apply to Apache are), but it makes a big difference.

Anyway, I look forward to a world of excitement with my new nginx setup. I have yet to set up proper logging (like filtering 404s and logrotate for specific site logs) and I have a mass of images and videos still to bring over from my old site, plus wordpress maintenance like theme-munging and plugin installation, and at some point it might be nice to actually have [a home page…](http://philwilson.org)

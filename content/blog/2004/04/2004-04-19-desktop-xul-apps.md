+++
title = "Desktop XUL apps"
date = "2004-04-19 13:14:00"
slug = "desktop-xul-apps"
[taxonomies]
tags = ['general']
[extra]
show_comments = "false"
comments_file = "/content/blog/2004/04/2004-04-19-desktop-xul-apps-comments.csv"
+++

I was all set to write a post about how we should be using centralised apps with XUL frontends for aggregation to provide native interfaces regardless of location but I find that [Manuzhai beat me to it](http://www.manuzhai.nl/weblog/comments/location-independent-services/)

> I think an online XUL aggregator is perfect: a rich UI, but available from anywhere in the world.

He mentions [XUL Channels](http://fuckhedz.com/xulchannels/) which is no longer available because of hosting problems, and it’s certainly a start (the source is available and took me a grand total 2 minutes to set up). It’s missing a host of features such as multiple users, read/unread items, flagging, Atom supoprt etc. but given that the code alone is six months old this is probably fair enough.

Presumably with a bit of hacking it would be possible to make this an executable app (loading it via the chrome:// command like ChatZilla). It could also read any feeds for which an RDF transformation is available, and the missing features don’t seem like they’d be that hard to add in – XUL’s a doddle after all 😉

The hardest part would probably be dealing with HTML entities, which it currently appears to struggle with, but they could always be stripped out in the first instace. Do I smell the future burning bright?

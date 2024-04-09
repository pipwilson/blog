+++
title = "Hacking extensions"
date = "2005-02-01 13:11:00"
slug = "hacking-extensions"
[taxonomies]
tags = ['general']
[extra]
show_comments = "false"
+++

The thing I really love about Firefox extensions is just how eminently hackable they are.

I already know XUL, JS and RDF, but even if I didn’t, changing extensions to do what you want is so easy that anyone could do it.

Take [Feed Your Reader](http://projects.koziarski.net/fyr/ "Feed Your Reader Firefox extension") for instance – it’s a marvellous extension which replaces Firefox’s default feed-disovery behaviour (click the orange button and subscribe to feed as a Live Bookmark) with the ability to subscribe to a feed in an external aggregator.

The selection of aggregators is pretty good, and seeing as most support the old Radio Userland http://127.0.0.1:5335 method of subscribing, it’ll work in some that aren’t even listed.

Sadly though, I use [JabRSS](http://cmeerw.org/dev/node/7 "JabRSS is a Jabber-based aggregator") as my aggregator, so there’s no such support for it built in to <abbr title="Feed Your Reader">FYR</abbr>, as it requires a Jabber client to do the actual subscription. So, five minutes of coding later, and voila I have a JSP page which accepts a URL as a parameter, logs in as me, and sends a subscription request to JabRSS (using [Smack](http://www.jivesoftware.org/smack/ "Jabber client library for Java")). Another five minutes later, and I’ve hacked <abbr title="Feed Your Reader">FYR</abbr> to pass feeds through to my subscription page, so I now have JabRSS subscription from within my browser. Brilliant! I’ve actually been meaning to do this for about three months, but it’s one of those things that wasn’t important, just nice to have and so has just sat at the back of my mind, but now I’ve got it, it’s great! I can’t imagine why I possibly didn’t do it sooner!

+++
title = "Tello extends presence to SIP"
date = "2006-01-24 13:26:00"
slug = "tello-extends-presence-to-sip"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
comments_file = "/content/blog/2006/01/2006-01-24-tello-extends-presence-to-sip-comments.csv"
+++

Presence has been gradually seeping out from IM over the past few years into other applications, notably in the XMPP/Jabber community where presence is a key (it’s the first ‘P’ in XMPP!). The benefits of using XMPP are mainly that it’s an open, documented and extensible standard which allows anyone to make use of it.

In an article called [Say Tello for Presence](http://gigaom.com/2006/01/22/tello/) Om Malik writes about <q cite="http://gigaom.com/2006/01/22/tello/">a new VoIP focussed start-up called Tello, based in San Mateo, California. Doug Renert, a former executive at Oracle Corp heads up the start-up.</q>.

> The company, [The Wall Street Journal](http://online.wsj.com/article/SB113798191905653294.html?mod=technology_main_whats_news) writes, is going to allow users to “workers see on their computers or mobile devices whether the person they are trying to reach is on an office phone or cellphone or is logged on to instant messaging.” \[Read how it works over on [Business Week](http://www.businessweek.com/technology/content/jan2006/tc20060123_428347.htm?campaign_id=rss_tech).\]

They do this by installing SIP proxy servers so that as well as picking up your IM presence they can detect your telephony presence. This is an interesting innovation, and one which, had I been paying attention to this market, would have been immediately obvious.

What’s more interesting is that this kind of thing could be provided by an XMPP-based application but probably isn’t. On the [jdev mailing list](http://mail.jabber.org/mailman/listinfo/jdev "for discussion of Jabber programming and software development") we often hear about people implementing custom internal solutions utilising XMPP for backend communications and presence, but it’s much rarer that you’ll hear about large companies deploying commercial solutions based on XMPP or even startups. Of course, this could be for two reasons:

1. I’m just not hearing about them
2. Companies are reluctant to talk about the technologies they’re using, so there may be lots of XMPP commercial application but we don’t know about them

The latter is entirely possible, and in fact quite likely. The obvious recent exception is Google, whose [Talk](http://www.google.com/talk/) application not only uses XMPP but extends it in a well-documented way and provides example interop libraries.

The question though, is are there any others? Could Tello be using XMPP? Should this kind of solution already exist in XMPP so that, for example, I could start using it at home?

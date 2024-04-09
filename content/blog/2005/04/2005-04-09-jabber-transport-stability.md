+++
title = "Jabber transport stability"
date = "2005-04-09 01:12:00"
slug = "jabber-transport-stability"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
+++

Peter Saint-Andre has published [issue #22 of the Jabber Journal](http://www.jabber.org/journal/2005-04-08.shtml) and lists what he thinks need to be priorities over the next 12 months.

I certainly agree with his first two (friendler clients, easy-install/config servers) but the others I could probably take or leave. For me a more important issue would be maintaining stable transports in the wild.

Most people using a Jabber client for the first time probably have at least one account on another IM system (for the sake of argument, let’s say it’s an MSN Messenger account). The first thing they’re going to want to be able to do, having been seduced, encouraged or forced to use this Jabber client and having heard of its abilities, is to connect to their MSN account. Let’s skip over the difficulty of browsing services on different servers (entered manually btw) to find a suitable transport that actually works, and skip over the barrage of authentication messages they’ll get when they sign in for the first time, not knowing what to do with them. They’ve got a transport, it works, and they’re chatting to their friends when one day – no response. No chatting for them that day! Or the next! Or the next! And typically this will persist until someone running the server notices and restarts the service, except of course it will go down again at some unspecified point in the future for an indefinite period of time. But with their new knowledge of browsing for services, the intrepid user has already gone off and found a new working transport, and signed up for that. Until that one goes down. Let’s not even talk about what happens when they’ve signed up for another but haven’t deleted the first transport from their roster and it finally comes back online.

I’ve not really been using Jabber clients that long – a bit more than three years I guess, and in all that time I’ve probably used about ten different MSN transports, switching as each one proves itself to be unreliable. I have two MSN accounts, one on [anywise.com](http://www.anywise.com/) and another on [admin-networks.org](http://admin-networks.org/) – they’re both pretty good and have very low periods of downtime, but there are other problems, like when I close my Jabber client, I’m not logged out of my MSN accounts. It’s all such a trial.

Hopefully we’ll start to see not only much more reliable transports in the near future, spearheaded by [PyMSN-t](http://msn-transport.jabberstudio.org/) and the other Python-based transports (which I’d be running myself on jabbernet.org if I could figure out how to get Python 2.3 running on Debian stable, I’m more of a RedHat guy), but also better detection, configuration and a great end-user experience.

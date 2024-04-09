+++
title = "Why poll for changes?"
date = "2006-01-17 22:06:00"
slug = "why-poll-for-changes"
[taxonomies]
tags = ['general']
[extra]
show_comments = "false"
+++

Two things I’ve come across today have talked about the integration of external RSS feeds into a site or application: [SniffingGlu and user control of syndication](http://www.bath.ac.uk/dacs/cdntl/pMachine/morriblog_comments.php?id=499_0_4_0_C) and [Synchronizing REST Resources With Asynchronous Notification: A Practical Proposal](http://www.commerce.net/wiki/Synchronizing_REST_Resources_With_Asynchronous_Notification:_A_Practical_Proposal). The first is focussed on things like making it easy for users to roll their own version of [SuprGlu](http://www.suprglu.com/) ([my glu](http://pip.suprglu.com/), if you missed it before), the second says:

> When you render a web page that contains pieces [snarfed](http://www.jargon.net/jargonfile/s/snarf.html "http://www.jargon.net/jargonfile/s/snarf.html") from other web pages, such as a transcluded RSS box, you would often prefer to start spitting out your web page without waiting for the other web pages to load first. So you maintain a local cache you can consult quickly, which may be out of date, but you try not to let it get too out of date.
> 
> You can do this by polling the current state of the other web pages; in fact, when you begin to depend on a new web page, polling for its current state is unavoidable. But it would be nice to push change notifications instead of polling for them. If you run both web sites, you could install software on both of them to do the change-notification pushing; but how does that software work?
> 
> We will term the association between a web page and a recipient of change notifications a “subscription”.

Well, \*bing\* if we haven’t heard that before! Off the top of my head, if you’re going to start to want notifying web pages (read: applications, even if it’s just a state machine) that something has updated, at some point you’re almost certainly going to want to notify other things (like, er, people), so let’s use [PubSub](http://www.pubsub.com/docs/pubsub_xmpp_draft.html), yeah?! If you’ve not heard [me bang on about it before](http://www.google.co.uk/search?q=site%3Aphilwilson.org%20pubsub), PubSub is basically having information pushed at you (once you’ve asked to have that information). RSS, for example, typically works in exactly the opposite way – your aggregator just keeps on asking a server if it has any more information, again and again and again. With the PubSub way, your aggregator subscribes once, and then when there *is* something new, the server tells you.

The way this is implemented in the specification is over XMPP, the [Extensible Messaging and Presence Protocol](http://www.xmpp.org/), which is the basis of [Jabber](http://www.jabber.org/). There are currently XMPP libraries in every language you can think of: [PHP](http://cjphp.netflint.net/ "class.jabber.php"), [C](http://iksemel.jabberstudio.org/ "Iksemel"), [Java](http://www.jivesoftware.org/smack/ "Smack"), [Python](http://pyxmpp.jabberstudio.org/ "PyXMPP") [and more](http://www.jabber.org/software/libraries.shtml). There is currently an internet draft for [Transporting Atom Notifications over XMPP](http://www.xmpp.org/drafts/draft-saintandre-atompub-notify-04.html) (although this expires on Feb 20th this year!), and this is how [pubsub.com](http://www.pubsub.com/) implement [their search result browser sidebars and C# code libraries](http://www.pubsub.com/tools.php) (there is also [a tutorial for pubsub.com’s use of XMPP](http://www.pubsub.com/docs/pubsub_xmpp_draft.html)).

The point I’m slowly getting around to is: use Atom over XMPP for your notifications! It’s easy! It’s extensible! It’s buzzword-tastic!

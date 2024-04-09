+++
title = "Moving to Jabber in the workplace"
date = "2005-02-28 04:09:00"
slug = "moving-to-jabber-in-the-workplace"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
+++

[Jabber Journal Issue #21](http://www.jabber.org/journal/2005-02-25.shtml) is out, and with it come lots of links to Jabber servers and a link to [r.i.pienaar’s post](http://www.devco.net/archives/2005/02/22/jive_messenger.php) about [Jive Messenger](http://www.jivesoftware.org/messenger/) (a free, Java-based Jabber server).

There are a good number of easy-to-install Jabber servers these days (Jive Messenger is incredibly easy to install on both Linux and Windows machines, and I’d recommend it without reservation), but providing decent clients is a different issue.

If you want to roll out an internal IM-system, but can’t afford MS or AOL, then Jabber is probably the next-best choice in terms of servers, but no Jabber-only client I’ve seen can match the usability or feature-set of the current MSN client (let alone the ease of install and built-in access to Active Directory).

Before we starting crossing clients off our list, lets run through some features that an IM client in the workplace should have before they can be adopted:

- MUST run on Windows 2000/XP
- MUST be user-friendly to the level that non-technical drones can pick it up as easily as they use Windows/MSN Messenger
- MUST support client-client file transfer
- MUST have a low-cost pricing system (if not free)
- MUST be able to provide SSL communications
- MUST provide local logging of conversations (chat history)
- MUST be able to deploy the correctly-configured client easily
- SHOULD support video/audio transfer (e.g. webcam chat)
- SHOULD have a server-based update mechanism to force upgrades
- SHOULD be in active development

Well, that’s a pretty hefty list, so whilst I’m not really expecting anything to actually meet it, I’m certainly not letting the clients off the hook 🙂

Despite everything else in the list, ultimately the user interface will be the deal breaker. Not pretty enough? You’re out. Not consistent? Failure. Too complicated? No chance.

If we look at the most popular Jabber clients for Windows, we see [Exodus](http://exodus.jabberstudio.org/), [Rival](http://rival.chote.net/) and [Psi](http://psi.affinix.com/); none of then have particularly beautiful user interfaces, and are all quite hard to get started with. Of the three I prefer Psi, because it’s very clear what’s going on: “here is your roster list, click on it and do stuff”, but it’s inconsistent in places, minimal and very unlikely to win over any MSN users.

<div>[![a screenshot of pandion](http://philwilson.org/images/ss-pandion-thumb.png "The Pandion user interface")](http://philwilson.org/images/ss-pandion-full.png)</div>Looking further afield, there are two other noteworthy Jabber clients, [Pandion](http://www.pandion.be) and [neosmt](http://www.neosmt.com/). Pandion is excellent; its user-interface is very friendly to those coming from an MSN background; it’s free for internal use in a company; it’s also brand-able because the UI is provided by HTML and CSS rendered by <abbr title="Internet Explorer">IE</abbr>. It has a limited implementation of the XMPP standard, but it doesn’t really matter too much, because all the core features are there **but** it does have a *very* nasty bug which disconnects your client if, for example, your roster is too big and takes too long to deliver. neosmt, on the other hand, is a very good client with a fuller protocol implementation as well as other great (but proprietary) things like whiteboarding and audio/video sharing, automatic update checking and so on – all things which would be useful in a company. The user interface is pretty good, but suffers a major blow by actually having the main menu hidden away under a cryptic ”&gt;&gt;” icon on the title bar which doesn’t even look like a button and not (properly, at least) supporting JISP iconsets, so no MSN emoticons for all our poor we-fear-change clueless employees.

<div>[![a screenshot of neosmt](http://philwilson.org/images/ss-neosmt-thumb.png "The neosmt user interface")](http://philwilson.org/images/ss-neosmt-full.png)</div>If we cast out net wider to the multi-protocol clients we see things such as [GAIM](http://gaim.sourceforge.net/), [Trillian](http://www.ceruleanstudios.com/) and [Miranda](http://miranda-im.org/). In their default states, we take one look at GAIM and Miranda and instantly throw them away (Miranda can be made to look much prettier, but not without tweaking and so on, and no-one’s going to configure and rebuild the installer the way I want for me). Trillian is, er, definitely acceptable by the MSN crowd, but sadly the free version doesn’t support Jabber and Trillian Pro is $25/client, so *pfffff* to that.

Which leaves us back with neosmt and Pandion. neosmt is clearly the superior client (with more of the features listed above than any other client I looked at), but harder to use and a sea change from the clients most people are going to be used to. Pandion has the basic messaging and user interface down to a T, but little else (and that nasty bug to boot). Clearly a middle ground would be absolutely perfect, but is pretty unlikely.

In the end, selecting a client will come down to the needs of the users who are going to be using it, but I think giving neosmt a run and falling back to Pandion if neosmt proves unacceptable seems like a reasonable position to take for rolling out Jabber clients on a Windows network, and will probably be the approach I’d take.

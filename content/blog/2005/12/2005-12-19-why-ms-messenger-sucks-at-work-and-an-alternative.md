+++
title = "Why MS Messenger sucks at work (and an alternative)"
date = "2005-12-19 15:07:00"
slug = "why-ms-messenger-sucks-at-work-and-an-alternative"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
comments_file = "/content/blog/2005/12/2005-12-19-why-ms-messenger-sucks-at-work-and-an-alternative-comments.csv"
+++

Or at least, it sucks at work for most purposes.

Why?

1. You’re dependent on an external server that has nothing to do with your company
2. You’re passing your chat about work projects through a third-party server!
3. It’s against the <acronym title="Terms of Service">ToS for MS Messenger</acronym>
4. Limited message length (a complete pain for easily sharing code snippets)
5. No offline messaging
6. Single account, so you can only use one Messenger account at a time, potentially limiting your access to other people you know on other accounts, or meaning that everyone at work now knows your home e-mail address

Sadly, the benefits of casual use will normally outweigh these. i.e.

1. You already use it
2. Familiar UI
3. All your friends already use it, and you like to talk to them (er, because they’re a “learning resource”, right?)
4. You can send winks

OK, the last one is clearly a lie as no-one above the age of 16 sends or likes winks. Regardless, inertia alone will almost certainly carry MS Messenger from home into the workplace.

So, ideally then you’d buy [Microsoft’s Live Communication Server](http://office.microsoft.com/en-gb/FX010908711033.aspx) product, install it, and continue to use the tool and interface you’re used to with the benefits of message security and ToS compliance, but now without your external friends on it. Rubbish.

So, what to do? Well, I’d advocate something along these lines:

1. Install [Wildfire Server](http://www.jivesoftware.com/products/wildfire/) for your business use
2. Customise and package [Miranda](http://miranda-im.org/) with some sensible default options rather than the ones it comes with (which are madness)
3. Deploy your custom [Miranda](http://miranda-im.org/) build

[Miranda](http://miranda-im.org/) can connect to multiple Instant Messenger accounts at the same time, so that using the same client you can access your business IM network, your MS Messenger buddies, your Yahoo! pals, your AOL chums and your ICQ friends (although, apparently the [Microsoft Office Communicator 2005](http://www.microsoft.com/office/livecomm/prodinfo/publicim.mspx) client can connect to the public MSN, AOL and Yahoo! networks).

The biggest downside of this approach is that you lose the ability to use voice and video communication over your work network, as Miranda doesn’t support using these either over the XMPP protocol (provided by the Wildfire Server) or any of the others, so this may not be suitable if tele- or video-communications are a regular feature of your instant messenger sessions (hopefully voice communication should start appearing in XMPP clients soon because [Google have just published not only the protocol they use for chat](http://www.jabber.org/jeps/jep-0166.html) but also [some C++ libraries which implement it](http://code.google.com/apis/talk/index.html)). You could use another alternative, such as using [Skype](http://www.skype.com/), but then you lose your data security again so you’d probably be best off buying that Windows-client only MS Live Communication Server product for an exorbitant fee.

Of course, you could try and deploy a different client, for example an XMPP-specific one such as [Exodus](http://exodus.jabberstudio.org/) or [Psi](http://psi-im.org/), and use transports for communication to the other protocols like MSN, Yahoo! etc. but in my experience despite these being more “correct” they tend to be more hassle than they’re worth (the coming range of Python-driven transports may change this – see [PyAIM](http://pyaim-t.blathersource.org/index.php), [XMPP-IRC](http://xmpppy.sourceforge.net/irc/index.html), [PyMSN-t](http://msn-transport.jabberstudio.org/) and the [Python Yahoo transport](http://cvs.sourceforge.net/viewcvs.py/xmpppy/xmpppy/yahoo-transport/)).

+++
title = "Google Jabber client and server"
date = "2005-08-24 10:33:00"
slug = "google-jabber-client-and-server"

[taxonomies]
tags = [ "xmpp", "voip", "jabber",]

[extra]
show_comments = "false"
comments_file = "/content/blog/2005/08/2005-08-24-google-jabber-client-and-server-comments.csv"

+++

[Google Talk](http://www.google.com/talk/) is finally out and is based on XMPP for text chat. This means that any normal Jabber client can also connect to Google’s servers and use it. At the moment [you can’t use Google Talk to connect to the wider Jabber network](http://www.google.com/support/talk/bin/answer.py?answer=23907), and I can’t see that this will change any time soon. In theory you should be able to redirect which server it tries to connect to and access your normal Jabber userlist like that, although what exactly it would do with XMPP stanzas it doesn’t yet support I have no idea.

The built-in VoIP chat is currently a closed protocol which they will be publishing soon. As soon as they do, I can’t imagine other Jabber clients not releasing plugins to interoperate.

The client itself is clean and usable (a far, far cry from the monstrosity of MSN Messenger, which plagues your client with ads for FREE LOANS!), and ties directly into your Gmail contacts list. It’s also **very** beta. 🙂

It looks like Google are planning to use Talk to drive users to [Gmail](http://mail.google.com), and if they’re serious about it, this could mean one of the first massively scalable corporate XMPP server installations. This is a very attractive proposition, and since you can connect to it using a normal cross-protocol client, a nice way of allowing Jabber evangelists to finally point to a Jabber server which doesn’t keep falling over. Obviously the Google XMPP server doesn’t run any services like MSN transports itself so you’re still reliant on client plugins or third-party servers for that.
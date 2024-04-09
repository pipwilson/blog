+++
title = "New MSN transport for Jabber"
date = "2004-08-24 09:51:00"
slug = "new-msn-transport-for-jabber"
[taxonomies]
tags = ['general']
[extra]
show_comments = "false"
comments_file = "/content/blog/2004/08/2004-08-24-new-msn-transport-for-jabber-comments.csv"
+++

James Bunton has completely rewritten [the MSN transport for Jabber](http://msn-transport.jabberstudio.org/) in [Python](http://python.org/) using the [Twisted](http://twistedmatrix.com/) framework which has built-in support for [Jabber](http://www.jabber.org).

This looks to not only clear up long-standing bugs and memory leaks with [the original msn-t](http://msn-transport.jabberstudio.org/old/index.html) but also comes with far better [installation instructions](http://msn-transport.jabberstudio.org/docs/server.html) <del>(in wiki format no less so you can edit them yourself)</del> which go all the from installing Python and Twisted on Windows, Mandrake and Debian to writing the configuration files you’ll need.

I have two MSN accounts and so use two MSN transports (msn.here.dk and msn.jabber.zim.net.au) and at only one of them tends to be up at a time so I’ll be looking at running two PyMSNt instances on my jabber server (jabbernet.org) so I can reduce the reliance on external services (also it means it’ll be in my own best interest to keep them running). With the new useful instructions it should be any easy job. I’ll let you know. 🙂

+++
title = "Is there a C++ library for Atom handling?"
date = "2006-02-23 00:26:00"
slug = "is-there-a-c-library-for-atom-handling"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
+++

[FeedThing](http://feedthing.sourceforge.net/) is a desktop aggregator written in C++ by [Gareth Simpson](http://xurble.org/). The internals are split into several parts, including [libfeedthing](http://cvs.sourceforge.net/viewcvs.py/feedthing/libfeedthing/) which is the core liberal feed parser, but it hasn’t been updated for ages, and I don’t think even he uses it any more, so it only supports the interim (and deprecated) Atom 0.3.

Which is a shame, because if was still using it, it would probably have a working Atom 1.0 parsing library.

As far as I can tell, there isn’t a single open-source Atom 1.0 parser written in C++. Unlike Java, Python, PHP, Ruby and .Net which all have it good with *at least* one solid feed parser.

I want a proper parsing library for my Atom-over-XMPP application. I’ve just been upgrading Feed On Feeds to transmit Atom 1.0, so now I need something to receive it – so far this has been FeedThing, but I don’t really fancy upgrading it to support Atom 1.0. The obvious alternative is to pick an open-source desktop client which already supports Atom 1.0 or could do by upgrading the parsing library it uses, and use that instead, but the only one that meets the “appealing” criteria (see below) seems to be [Pears](http://come.to/project5/pears), which is a wxPython application (nice and cross-platform, and the xmpp libraries and [code samples](http://www.franklinmint.fm/blog/archives/000603.html) already exist) but that seems [destined to move to an HTML interface](http://project5.freezope.org/pears/future.html/) in a desktop frame, which doesn’t sound particularly pleasant, and frankly, having actually now used it for five minutes, I already want to jump out of the window just to alleviate my suffering.

So what shall I do? I suppose it would be good for me to write some C++, but ditto with Python, and I **have** been wanting to do some RSS/Atom integrating with [WikidPad](http://wikidpad.python-hosting.com/) – maybe this is my cue?

Those “appealing” criteria in full:

- desktop aggregator
- not .NET
- not Java
- three panes preferred
- allows nested folders in the feed list
- easy to upgrade to support Atom 1.0 if it doesn’t already
- XMPP libraries in the aggregator’s programming language already exist (and work!)
- must run in Windows (cross-platform a plus)

Of course, when I say “appealing”, I mean “non-negotiable”.

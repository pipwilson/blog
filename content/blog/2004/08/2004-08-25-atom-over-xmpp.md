+++
title = "Atom over XMPP"
date = "2004-08-25 09:36:00"
slug = "atom-over-xmpp"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
+++

Finally! Now that [Sam Ruby](http://intertwingly.net/blog/)‘s [sent it to the atom-syntax mailing list](http://www.imc.org/atom-syntax/mail-archive/msg08825.html) and [Mark Pilgrim](http://diveintomark.org/)‘s [b-linked it](http://diveintomark.org/archives/blinks/2004/08/#b20040824215132) people are finally \*finally\* [beginning to take notice](http://del.icio.us/url/bfcde044f4503c3714cee171b583c1d7) of this.

I genuinely think that this is the most exciting thing you could possibly want to do with Atom.

[stpeter](http://www.saint-andre.com/blog/), [ralphm](http://ralphm.net/?language=en) and [Bob Wyman](http://bobwyman.pubsub.com/) (and probably others) have been working hard on getting [pubsub](http://www.jabber.org/jeps/jep-0060.html) into a workable and working state, developing software that uses it, and feeding back into the spec process. It’s been a joy to watch.

I already have a hacked version of [Syndirella](http://sourceforge.net/projects/syndirella) which I use that uses [pubsubxmpp](http://sourceforge.net/projects/pubsubxmpp/) to connect to pubsub.com’s XMPP delivery service (via [JEP-0060](http://www.jabber.org/jeps/jep-0060.html)) and then parse the Atom content using [Atom.NET](http://atomnet.sourceforge.net/) and provides the items to the user completely transparently. It just looks like any other feed except that it’s updated by push, not pull, and is updated in real time – when a new article is published, that’s when I’m reading it.

(Ideally I think I’d have a hacked version of [FeedThing](http://feedthing.sourceforge.net/) to do this instead, just because it would mean an app that could actually redraw without me noticing, but that would mean dusting off my c++ and I’m not quite that desperate yet. 😉

This is a big step towards my perfect aggregator. In fact, if Atom starts supporting the concept of a “read state” on items then I could implement a proper distributed aggregator system using Atom over XMPP as its core extremely easily.

I can’t wait.

<ins></ins>

Oops, [stpeter points out](http://www.saint-andre.com/blog/2004-08.html#2004-08-25T13:36) that I should also have credited [pgmillard](http://www.pgmillard.com/blog/), who actually wrote the pubsub spec! Sorry about that Peter!

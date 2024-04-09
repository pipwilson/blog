+++
title = "Relating Atom entries and feeds"
date = "2004-06-23 11:03:00"
slug = "relating-atom-entries-and-feeds"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
comments_file = "/content/blog/2004/06/2004-06-23-relating-atom-entries-and-feeds-comments.csv"
+++

Bill de hÓra recently wrote [an interesting article on mapping Atom to RDF](http://www.dehora.net/journal/2004/06/atomrss_relating_entries_and_feeds.html), and in the process linking individual entries to the feed which contains them by virtue of a `<atom:feed rdf:resource="feed-url"/>`. This is a very interesting area to me at the moment, and it seems strange that an explicit child -&gt; parent relationship hasn’t previously been defined in the Atom syntax, only parent -&gt; child by virtue of the document structure.

The main use case I’m interested in, and have been thinking about for the past couple of months, was also posted to the [atom-syntax mailing list](http://www.imc.org/atom-syntax/index.html) by Bob Wyman over the weekend, that is, transmitting individual atom:entry elements over XMPP (Jabber) via [JEP-0060](http://www.jabber.org/jeps/jep-0060.html), which is an incredibly detailed and potentially useful specification which, AFAIK, only actually has two implementations: [Mimir](http://mimir.ik.nu/ "With Mimír you can be kept up-to-date to the latest news from several sources.") and the slightly more well known [PubSub.com](http://pubsub.com/ "PubSub is like a search that never stops.").

> we implement a content-based publish/subscribe system that distributes each newly discovered Atom entry (or RSS item) that matches a user’s subscription by publishing a single entry feed as the payload of a JEP-0060 event.
> 
> Basically, we’re forced to construct a full feed when all we really want to do is publish a single entry.

I’ve got my own aggregation system which does almost exactly the same thing except that it currently bundles the atom content inside of a normal Jabber chat packet, and this is exactly the problem I’m currently facing. Fortunately there are now a couple of proposals which would seem to cover this case, namely [Entry Origin](http://www.intertwingly.net/wiki/pie/PaceEntryOrigin "Supply /atom:feed/atom:entry with an atom:origin element indicating the original feed the entry came from.") and [Link Parent](http://www.intertwingly.net/wiki/pie/PaceLinkParent "This Pace specifies the addition of a parent link type for referring to the parent entry of an atom:entry."), so I’ll have to see what I can do with those, and spend some time following the mailing list to see what changes and decisions are made.

Bob also made a rather amazing statement which seems to have been rather passed over (there are no follow-ups to his mail on the list):

> In the near future, we’ll be making available code modules that will make it very easy for existing aggregator developers to incorporate support for Jabber into their news aggregators. Thus, if you’ve got a news aggregator, you’ll be able to provide support for receiving updates via Jabber without having to become a Jabber/XMPP expert.

As far as I’m concerned, this is really big news. I’ve started to run into problems with JabRSS where things like timely delivery of items is a must, and of course things like search just aren’t anywhere near as good as I’d like (plus the Atom support is very very basic and really only half-works), and so desktop aggregators are starting to have a brighter appeal. Of course, all the free ones are still rubbish, but I’m hoping that I can implement all the stuff I need in [FeedThing](http://sourceforge.net/projects/feedthing "A windows aggregator (RSS & Atom) with an ultral liberal feed reader"). Anyway, the point is that the fact that aggregators store all their data locally is killing me – it’s the reason I moved away from them in the first place. Implementing a desktop aggregator which uses JEP-0060 as its backend is the only solution which makes sense to me, and this offer from Bob looks too good to turn down.

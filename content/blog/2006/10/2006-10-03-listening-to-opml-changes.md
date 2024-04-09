+++
title = "Listening to OPML changes"
date = "2006-10-03 13:29:00"
slug = "listening-to-opml-changes"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
+++

![](http://philwilson.org/images/opml-icon-64x64.png)

At work we’re putting together a wiki page which lists which feeds we should probably all be subscribed to. This mirrors the increasing amount of RSS we’re creating both in the team and across the University as a whole.

We’re writing the list of feeds as a bulleted list which links to both the main site and the feed you’ll need to subscribe to. Obviously this is just an [XOXO](http://microformats.org/wiki/xoxo) list.

What this means is that we can use one of the many tools (hopefully [Les Orchard](http://decafbad.com/blog/2005/12/01/feedrolls-in-xoxo-from-opml-via-xslt-and-url-line-magic) will have done this for me) to convert this list to [OPML](http://www.opml.org) which anyone can then subscribe to in their aggregator.

The problem is this:

- we have to use desktop aggregators because many of the internals feeds use HTTP authentication and everyone also maintaine their own subscriptions
- the list of feeds we should be subscribed to will change occassionally (especially over the next few weeks)
- a change in the feed list means either each person will have to re-import the entire list, or identify the new/changed feed(s) and add them to their subscriptions.

What we really need is an aggregator which can subscribe to an OPML file (yes yes, this is the [OPML Reading List](http://www.google.co.uk/search?q=opml%20reading%20list) meme from ages ago).

At the moment, that means [BlogBridge](http://www.blogbridge.com/). BlogBridge is an open-source Java-based desktop aggregator (which actually responds quickly enough to feel native, although like all Swing apps it doesn’t look anything like a native application).

I’ve tried to use BlogBridge in the past and not really liked it, but back in July I [promised D’Arcy that I’d take a look at it again](http://philwilson.org/blog/2006/07/i-need-new-aggregator.html), and this looks like the time to make good on that promise (especially now that he’s been promoted to [expert guide](http://www.blogbridge.com/archives/2006/09/a_new_expert_gu.php)).

An initial go shows that it imports my [FeedReader](http://www.feedreader.com) OPML just fine (although it breaks up each folder of feeds into its own representation which it calls “Guides”) but that it doesn’t support “river of news” style reading. That is, I can’t select one of my “guides” and instantly see all the unread articles – I have to navigate between individual feeds (even if it’s just by pressing <kbd>space</kbd>). This is definitely not the behaviour I want, but [this blog post](http://www.blogbridge.com/archives/2006/01/river_of_news.php) suggests that I should be able to create a SmartFeed of unread items for each guide and read those instead, but again this probably isn’t what I want. I don’t even want to see the list of feeds – I just want to click each ‘Guide’ and view the unread items from all the feeds in that guide.

I guess it’s lucky I’m a Java developer then, right?

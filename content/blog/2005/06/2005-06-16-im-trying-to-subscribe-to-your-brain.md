+++
title = "I'm trying to subscribe to your brain"
date = "2005-06-16 20:54:00"
slug = "im-trying-to-subscribe-to-your-brain"
[taxonomies]
tags = ['general']
[extra]
show_comments = "false"
+++

Leigh’s beaten me to it very slightly by making [this post which explains how he wants to subscribe to an entire person’s output, and how to convert seeAlso’s to an OPML file](http://www.ldodds.com/blog/archives/000217.html).

I’ve gone about it a different way.

I now use [FeedOnFeeds](http://www.feedonfeeds.com) as my aggregator (having moved away from [JabRSS](http://cmeerw.org/dev/node/7) about six weeks ago). I’ve hacked it to do FOAF autodetection of the website every time you add a feed, and to periodically check for updates. Once it finds a FOAF file, it extracts all of the `foaf:OnlineAccount` details, and then performs RSS autodiscovery on those pages (and in a couple of cases does some hard-wired lookups for site which I know have RSS, but not autodiscoverable from user profile pages, like [Flickr](http://www.flickr.com) and [Upcoming.org](http://upcoming.org)).

This actually works (with the caveat that I’m not using a real RDF parser at the moment, but it’s only a small, replaceable part of the puzzle, so I’m not overly worried).

What’s *really* needed is a quick and simple form for people to either create a new FOAF file with their online account details in it, or which will accept a FOAF URL as well, and merge the details in. This sounds easy, but I don’t have time because I’m about to move house.

I also intend to have some kind of admin interface to this which allows me to assign OnlineAccounts to feeds I’m already subscribed to, like adding Russ Beattie’s [Flickr account details](http://flickr.com/people/russellbeattie) to [his weblog details](http://russellbeattie.com/notebook/). This data would all be kept privately on my server of course – if someone wants to expose all this in a FOAF file, they can do so themselves.

I realise that in effect, this means making a (limited) FOAF-management tool, so I’m a bit wary of how to start. I’m not currently using a triplestore as my backend, but I suspect that as soon as I want to start actually doing this, that’s what I’ll want to switch to.

I suspect that in most cases, I won’t actually want to merge a person’s feeds together (because most of the time it’s pointless – who wants constantly updating [Audioscrobbler](http://www.audioscrobbler.com) details cluttering up their valuable aggregator space?), rather the facility to switch between viewing a list of directly subscribed feeds, and a tree of authors which expands to show which feeds they produce. Probably. This is all just guesswork because I’m not there yet, but that’s where I want to be by the end of July; I’ll just have to see if I can fit it all in.

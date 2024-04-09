+++
title = "Making a lifestream useful"
date = "2007-05-19 15:44:00"
slug = "making-a-lifestream-useful"
[taxonomies]
tags = ['attention','general','lifestream','lucene']
[extra]
show_comments = "false"
+++

A few months ago [I slated Jeremy’s lifestream](http://philwilson.org/blog/2007/03/stream-of-rubbish.html), because it’s a single point-per-person summary of activity – and in particular my own activity which I already know all about.

So, having spoken to Jeremy briefly at XTech, and assuming that I don’t have a proper [digital lifestyle (or digital connections) aggreator](http://philwilson.org/blog/2007/03/digital-lifestyle-aggregation-vs.html), what can we do to make the lifestream interesting?

First of all we can start archiving your activities. A monthly archive as an Atom file will do to start with. You can then plug that in to any other Atom-supporting tool to get some visualisations of your data such as getting a timeline by plugging it into [Simile Timeline](http://simile.mit.edu/timeline/) using [My Timelines](http://www.mytimelines.net/).

Secondly we can index this for searching using [Lucene](http://lucene.apache.org/) or one of the many langauge ports like [PyLucene](http://pylucene.osafoundation.org/) or [Ferret](http://ferret.davebalmain.com/trac/) for Ruby so that you can search for items across time in a single location.

Thirdly we can provide a simple bit of PHP which glues files together from a set time period so we can get back an Atom file for a group of particular months or years.

Finally we can use the stored lifestream as an index for a scraper which can provide a local version of the full content of your activities. For example some people worry that Flickr has all their data – well, use this to monitor your Flickr and blog postings and pull them down and store them locally (or back them up to another location).

I might see if I can hack on some of this this week.

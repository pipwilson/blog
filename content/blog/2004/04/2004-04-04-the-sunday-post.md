+++
title = "The Sunday Post"
date = "2004-04-04 18:47:00"
slug = "the-sunday-post"
[taxonomies]
tags = ['general']
[extra]
show_comments = "false"
comments_file = "/content/blog/2004/04/2004-04-04-the-sunday-post-comments.csv"
+++

G says that there are never any posts on a Sunday, so here’s one just for him (late in the day as it may be).

A few days ago I finally got around to knocking up what I’ve decided to give the short title of The LiveJournal Friends Feed Creator.

My first foray into the murky world of Python it takes a LiveJournal nickname (say, [Xurble](http://xurble.livejournal.com/)), retrieves [that user’s FOAF file](http://xurble.livejournal.com/data/foaf), parses it to retrieve his list of friends, then locates and downloads the RSS file for each friend, and smushes them all together to make one big RSS file which can actually be subscribed to.

And so after all that you end up with (more or less) and RSS representation of [that user’s LiveJournal Friends page](http://xurble.livejournal.com/friends).

(G – I should have just let you write your screen-scraper!)

Anyway, after some wise words from [Jim](http://feetup.org/blog) on Friday I’ll have a go at actually turning this into a web service in the next few days, by which point the LJ authors will probably provide this functionality built in and all my work will be wasted. Here’s hoping.

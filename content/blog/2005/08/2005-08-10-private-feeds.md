+++
title = "Private feeds"
date = "2005-08-10 19:17:00"
slug = "private-feeds"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
comments_file = "/content/blog/2005/08/2005-08-10-private-feeds-comments.csv"
+++

Twelve months ago, [Stewart Butterfield](http://www.sylloge.com/) posted in the Flickr forums saying:

> We’re continuing to look at private feeds, but it is not easy. Surprisingly, this is not something that seems to have occured to the people who designed RSS or the people who make the readers…

I was just thinking today about a project I was working on about five years ago which supported RSS, and we had a problem with private RSS feeds, so we just didn’t provide them. In the same way, you can’t get an RSS feed for your FlickrMail today.

LiveJournal allows you to view private feeds using a URL like `http://username:password@www.livejournal.com/users/username/data/rss` in a similar way to FTP, so I suspect this is a alternative point of entry to a standard authentication method like HTTP Basic (but I hope I’m wrong!).

So is this a solved problem for RSS now? Do most desktop and web aggregators support HTTP authentication? Obviously this is dealt with at a more fundamental level in Atom (namely [section 5: Securing Atom Documents](http://www.atomenabled.org/developers/syndication/atom-format-spec.php#rfc.section.5)).

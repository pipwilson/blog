+++
title = "FeedOnFeeds storing feed item datestamps"
date = "2005-06-21 09:55:00"
slug = "feedonfeeds-storing-feed-item-datestamps"

[taxonomies]
tags = [ "feedonfeeds", "magpierss", "timestamp",]

[extra]
show_comments = "false"
comments_file = "/content/blog/2005/06/2005-06-21-feedonfeeds-storing-feed-item-datestamps-comments.csv"

+++

By default, when FeedOnFeeds polls a feed and stores new items, it will probably get the timestamp wrong – most likely in fact, it won’t get any timestamp at all. This is because FeedOnFeeds specifically looks for a `dc:date` element in each item. If it doesn’t find one, it doesn’t store a time or date for the item.

Fortunately, it’s a piece of cake to upgrade FeedOnFeeds to use [the latest version of MagpieRSS](http://sourceforge.net/project/showfiles.php?group_id=55691) which as of 0.7 has this rather nice feature:

> You can now get the value of dc:date, pubDate, or atom:issued as a PHP timestamp (epoch seconds) in $item\[’date\_timestamp’\].

So a quick hack to init.php and we’re suddenly storing times and dates again. Brilliant. Just a shame I can’t backdate it to items which have dropped out of feeds I’m subscribed to 🙁
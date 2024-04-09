+++
title = "Bloglines Web Services"
date = "2004-09-28 15:23:00"
slug = "bloglines-web-services"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
comments_file = "/content/blog/2004/09/2004-09-28-bloglines-web-services-comments.csv"
+++

Bloglines just announced their new [web services](http://www.bloglines.com/services/ "Bloglines Web Services") Including [feed synchronisation](http://www.bloglines.com/services/api/sync), and enabled in several aggregators including [FeedDemon](http://www.feeddemon.com/), [NetNewsWire](http://ranchero.com/netnewswire) and [BlogBot](http://www.blogbot.com/).

I was totally blown away when I read that aggregators were now providing feed synchronisation across multiple machines using Bloglines as the central data source. “Amazing!”, I thought “They’ve finally done it!”, but sadly it doesn’t really seem as though they have. Whilst you can synchronise the list of feeds you’re subscribed to, you can’t truly synchronise the state of the items in those feeds because although the desktop aggregator can specifically retrieve items for a feed which are marked as unread, the desktop aggregator can’t notify Bloglines about items it has marked as read.

I really hope they add the ability to do this. If they do, then voila! a fully-featured centralised aggregator. I need never use another service!

<ins datetime="2004-09-29T15:27:57Z"></ins>

Quoted on Robert Scoble’s blog, Nick Bradbury, creator of FeedDemon says:

> The best part is items you read in FeedDemon don’t show up as unread in Bloglines, and items you read through Bloglines don’t show up in FeedDemon. In other words, feed state is synchronized so that you don’t read the same item twice

But looking at the API calls Bloglines has published I just can’t see how this is true. The APIs are all one-way, so you can download all your unread items and leave them marked as unread or mark them all as read. Unless I’m missing something, there needs to be an API call to retrieve a single unread item and mark it as read in Bloglines which is called when an item is marked as read in the aggregator.

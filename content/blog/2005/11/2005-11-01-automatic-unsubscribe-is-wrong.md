+++
title = "Automatic unsubscribe is wrong"
date = "2005-11-01 20:59:00"
slug = "automatic-unsubscribe-is-wrong"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
comments_file = "/content/blog/2005/11/2005-11-01-automatic-unsubscribe-is-wrong-comments.csv"
+++

Last week sometime I read about FeedDemon’s new [automatic unsubscribe feature](http://nick.typepad.com/blog/2005/10/feeddemon_16_au.html) and it bothered me, but I couldn’t quite put my finger on it.

kellan’s just written an article on it called [Automatic Unsubscribe Considered Harmful](http://laughingmeme.org/articles/2005/11/01/automatic-unsubscribe-considered-harmful), and he makes some good points and it led me to what my problem with this feature is:

**From Nick’s description, the aggregator will *silently* unsubscribe you from a feed.**

Now, you could say that that’s fair enough. After all, you **did** ask it to unsubscribe you after a certain time period. But what if you’ve forgetten that you set it to unsubscribe? Given the number of feeds that most people I know subscribe to, it doesn’t seem too unlikely.

It’s not as if the feed is returning a [410 – Gone](http://diveintomark.org/archives/2003/03/27/http_error_410_gone "Embracing HTTP error code 410 means embracing the impermanence of all things."), where the aggregator would be right to stop polling the feed, it’s just an arbitrary cut-off point.

I like the idea of the feature, I just think it should ask you first.

(Incidentally, mentioning no longer polling a feed – is that what Nick means when he says ‘unsubscribe’? Or does he actually mean delete that feed and its history from the FeedDemon database?)

+++
title = "Web aggregators and favicons"
date = "2005-06-16 11:22:00"
slug = "web-aggregators-and-favicons"
[taxonomies]
tags = ['general']
[extra]
show_comments = "false"
+++

One of the nicest things about Bloglines is that it uses site favicons to display the list of feeds in the left-hand frame. Very nice it looks too.

There are three free self-hostable web aggregators that I know of: [FeedOnFeeds](http://www.feedonfeeds.com/), [Lilina](http://lilina.sourceforge.net/) and [Gregarious](http://www.gregarius.net/). All of them try and retrieve a site’s favicon by finding the URL of the website the feed describes and pegging /favicon.ico onto the end of it.

Whilst this is a reasonable attempt, it’s not great, and will only give about two-thirds of the favicons you need.

If you don’t find a favicon at FeedUrlReference/favicon.ico you should also:

1. check to see if a favicon exists in the base directory of the site you’re looking at (e.g. if FeedUrlReference points at www.example.com/myweblog/ and there isn’t a www.example.com/myweblog/favicon.ico then you should also check www.example.com/favicon.ico)
2. run a couple of regexes on the FeedUrlReference to see if it uses the `<link rel="shortcut icon" href="UrlToFavicon">` syntax (or the less popular `<link rel="icon" href="UrlToFavicon">` which also gets used)

Is this too much work just to get a nice image in your aggregator? I don’t think so, which is why my hacked copy of FeedOnFeeds now does it (with proper caching, too, as opposed to at the weekend, when it ran wild – sorry about that)

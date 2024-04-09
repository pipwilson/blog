+++
title = "No more NewsGator, no Google Reader API"
date = "2009-08-09 18:35:33"
slug = "no-more-newsgator-no-google-reader-api"
[taxonomies]
tags = ['general','newsgator','syndication']
[extra]
show_comments = "true"
+++

So everyone heard earlier this week that [NewsGator is shutting down their aggregator synchronising service and getting everyone to switch to Google Reader](http://blogs.newsgator.com/daily/2009/07/newsgator-consumer-rss-reader-product-changes-google-sync.html "http://blogs.newsgator.com/daily/2009/07/newsgator-consumer-rss-reader-product-changes-google-sync.html (http://blogs.newsgator.com/daily/2009/07/newsgator-consumer-rss-reader-product-changes-google-sync.html)").

There are two big problems for me:

- [Google Reader does not support authenticated feeds](http://www.google.com/support/reader/bin/answer.py?hl=en&answer=78730 "http://www.google.com/support/reader/bin/answer.py?hl=en&answer=78730 (http://www.google.com/support/reader/bin/answer.py?hl=en&answer=78730)"), NewsGator does
- Google Reader does not have an officially documented API, NewsGator does

There are also other issues of course, like Google owning yet another piece of monopoly pie, but the others affect me more directly right now.

Both [NetNewsWire](http:// "http://") and [FeedDemon](http:// "http://") now have the ability to sync with Google Reader, but there’s no published API, so I can’t mirror their behaviour in my own Linux desktop aggregator. At best I could use [Niall Kennedy’s work from 2005 ](http:// "http://")or maybe code from [pyrfeed](http://code.google.com/p/pyrfeed/ "http://code.google.com/p/pyrfeed/") which has some [documentation from 2007](http://code.google.com/p/pyrfeed/wiki/GoogleReaderAPI "http://code.google.com/p/pyrfeed/wiki/GoogleReaderAPI"). Neither is an option I would choose willingly.

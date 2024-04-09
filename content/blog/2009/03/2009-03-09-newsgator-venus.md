+++
title = "NewsGator + Venus?"
date = "2009-03-09 00:50:02"
slug = "newsgator-venus"
[taxonomies]
tags = ['feeddemon','general','newsgator','planet','python','syndication','ubuntu','wxvenus','wxwidgets']
[extra]
show_comments = "false"
comments_file = "/content/blog/2009/03/2009-03-09-newsgator-venus-comments.csv"
+++

I recently broke the graphics drivers on my Windows Vista installation, so re-partitioned and now run Ubuntu full-time at home.

On Windows I use [FeedDemon](http://www.newsgator.com/Individuals/FeedDemon/Default.aspx) as my full-time aggregator. It has a degree of speed and polish unmatched by any other web or desktop aggregator.

This means that all my feeds are automatically synced with newsgator.com – a web-based aggregator which is not fast and not particularly polished. Although it might be polished, I don’t know, it’s so slow that I tend to just give up ([sync with Google Reader is coming](http://nick.typepad.com/blog/2009/01/feeddemon-to-sync-with-google-reader.html)).

FeedDemon has significantly raised the bar for any aggregator I use. Web-based tools no longer cut it, in particular when I have hundreds of feeds and, at times, thousands of unread items.

On Ubuntu the options for a native aggregator are [Straw](http://live.gnome.org/Straw) or [Liferea](http://liferea.sourceforge.net/). Both are currently undergoing rewrites. Liferea seems like the better option for me, and it has [a plugin system](http://liferea.sourceforge.net/scripting.htm) which is appealing, but there’s no sync with any online tools.

NewsGator have [an HTTP-basd API](http://www.newsgator.com/ngs/api/default.aspx) (PDF [reference](http://www.newsgator.com/ngs/api/NewsGatorRESTAPI.pdf) and [sample code](http://www.newsgator.com/ngs/api/RestAPISamples.zip) which requires a minor tweak to run) which is quite straightforward. It gives back data which can be consumed by the [Universal Feed Parser](http://feedparser.org/). Venus uses the Universal Feed Parser in planet/spider.py after fetching data to create the cache which powers it.

This time last year I wrote a very very basic [wxWidgets tool for browsing the Venus cache](http://philwilson.org/blog/2008/03/wxvenus). A modification to planet/spider.py to use the NewsGator API would seem like an easy way forward, whilst gaining all the power of the Venus filters, plugins and existing XSLTs.

I might just have to try that.

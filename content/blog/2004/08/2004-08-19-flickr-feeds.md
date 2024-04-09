+++
title = "Flickr feeds"
date = "2004-08-19 09:46:00"
slug = "flickr-feeds"
[taxonomies]
tags = ['general']
[extra]
show_comments = "false"
+++

I don’t know when they started, but Flickr provides photo feeds in both RSS 2.0 **and** Atom! Hurrah! Maybe I **should** splice my own feeds together after all?

The problem is I now have various elements of me with feeds: my blog (Atom feed), what I’m listening to (RSS 1.0 feed), my bookmarks (RSS 1.0 feed) and my photos (RSS 2.0 or Atom feed). So if I want to splice, which way do I go? Do I convert everything to Atom? What benefits would I, as a publisher, have if I did that? Or should I convert it all to RSS 1.0? In theory that would mean I could do “interesting” things with my RDF data, but what could I actually do?

My biggest target at the moment is providing comment feeds for my posts. If I publish RSS 1.0 or 2.0 I can use the wfw:commentRss to provid a feed for post comments easily enough ([Phil Ringnalda](http://philringnalda.com/) is probably the best known blogger who does this well, just look at [his RSS feed](http://philringnalda.com/index.xml), although it seems very RSS 2.0 and very non-RDF), but what about Atom? [Sam Ruby](http://intertwingly.net/blog/) currently posts a feeds per-post which include comments but there’s no differentiation between his original post and the following comments in both his RSS feed for a post ([example](http://www.intertwingly.net/blog/2004/08/16/Over-Pronation.rss)) and the Atom feed for a post ([example](http://www.intertwingly.net/blog/2004/08/16/Over-Pronation.atom)). Rubbish.

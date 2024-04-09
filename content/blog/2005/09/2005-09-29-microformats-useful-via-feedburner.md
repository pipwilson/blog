+++
title = "Microformats useful via FeedBurner?"
date = "2005-09-29 16:01:00"
slug = "microformats-useful-via-feedburner"
[taxonomies]
tags = ['general']
[extra]
show_comments = "false"
+++

I route [my RSS feed](http://philwilson.org/rssify.php) through [FeedBurner](http://www.feedburner.com/). [My Atom feed](http://philwilson.org/blog/atom.xml) is created directly through Blogger and I don’t yet route that through FeedBurner.

FeedBurner does lots of cool things like stat collation and feed transformation so that given one type of feed as input, it can output any of the others. For example, [here’s my Atom feed translated into RSS 1.0](http://feeds.feedburner.com/pip/rdf)

I was just thinking that if I started producing content which used [microformats](http://microformats.org/), wouldn’t it be nice if FeedBurner, when set to output [RSS 1.0](http://web.resource.org/rss/1.0/ "RDF Site Summary (RSS) 1.0") extracted the microformat information and put it into the [review vocabulary](http://www.purl.org/stuff/rev)?

There are already tools which consume feeds containing this kind of review information, and this kind of facility, alongside cool tools such as [Les Orchard’s Greasemonkey hack for textareas](http://decafbad.com/blog/2005/06/08/greasemonkey-magic "Magic Microformat Forms Redux, Now with GreaseMonkey!"), would open up a world of possibility. From HTML to RDF in one easy step 🙂

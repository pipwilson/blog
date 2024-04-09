+++
title = "Auto-tagging items in FeedOnFeeds"
date = "2005-08-14 23:43:00"
slug = "auto-tagging-items-in-feedonfeeds"
[taxonomies]
tags = ['general']
[extra]
show_comments = "false"
comments_file = "/content/blog/2005/08/2005-08-14-auto-tagging-items-in-feedonfeeds-comments.csv"
+++

I’ve just added the facility to tag feeds in my version of FeedOnFeeds so that I can group blogs together and read through them more quickly, and in a more focussed manner.

I’m planning on adding support for storing automated per-item tags as well, but for a quite separate reason.

I want FeedOnFeeds to automatically detect and store any rel=”tag” attributes in feed items or dc:subject elements associated with items and to store them in its database.

To start with, I looked at two feeds which I knew stored tags alongside the main content: [Danny Ayer’s RSS 1.0 feed](http://dannyayers.com/feed/rdf/) and [my del.icio.us RSS 1.0 feed](http://del.icio.us/rss/pip). Both use &lt;dc:subject&gt; to define tags for each &lt;item&gt;. Sadly for me, they do it in different ways. Danny uses multiple &lt;dc:subject elements per item, one &lt;dc:subject&gt; for each tag like this:

```
<dc:subject>Semantic Web</dc:subject>
<dc:subject>Programming</dc:subject>
```

Del.icio.us uses just one &lt;dc:subject&gt; element, using spaces to separate the tags, like this:

```
<dc:subject>syndication tools web</dc:subject>
```

[According to Seth Ladd, dc:subject takes a Literal value](http://www.picklematrix.net/archives/000942.html), so Danny seems to have it right, but even he wasn’t, I’d still have to treat space-separated words as individual keywords for the cases where feeds had multiple tags were in the same element. Postel’s Law and all that.

This should all lead on to something far more interesting, which I’ll probably write about next week.

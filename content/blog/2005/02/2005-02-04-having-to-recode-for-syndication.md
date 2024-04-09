+++
title = "Having to recode for syndication?"
date = "2005-02-04 23:02:00"
slug = "having-to-recode-for-syndication"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
comments_file = "/content/blog/2005/02/2005-02-04-having-to-recode-for-syndication-comments.csv"
+++

I’ve just realised a flaw in my feeds.

When I provide a blockquote, I always fill in the `cite` attribute, and then use JavaScript to pull it out and display a link to the source after the quote itself, but of course this doesn’t work in aggregators, and they’ll never see the link to my source, let alone know where it’s from! They’d need to either look at the source of the feed, or visit my actual webpage to find out, but there’s nothing in the content of my post which hints that they might not be getting all the information.

What can I do about this calamity? My first thought is stylesheets, but nothing doing – the aggregator does what it likes!

Does this mean I’ll have to start including an explicit link to my source when I quote someone? Surely there’s something else I can do?

<ins datetime="2005-02-07T10:43:07Z"></ins>

Also check out [Invisible Information: Machines get all the fun](http://joeblade.com/154/invisible-information/) by Paul Haine.

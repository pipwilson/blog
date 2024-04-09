+++
title = "Microformats and aggregation"
date = "2005-06-19 20:39:00"
slug = "microformats-and-aggregation"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
+++

I always hit a mental wall when I think about microformats.

I’ve just been re-reading Charlene Li’s “[Structured blogging – an introduction and the implications](http://blogs.forrester.com/charleneli/2005/06/structured_blog.html)” and Alf Eaton’s “[About reviews and microformats](http://hublog.hubmed.org/archives/001129.html)” and I just can’t get over the fact that, as useful as it would be for specialised search engines for everyone to use some kind of marvellous microformat to mark-up the content of their reviews etc., it’s just not good enough for aggregation. I just don’t want to have to parse your content to see if it’s got a review stuck in the middle somewhere, I want all the review metadata in separate elements in the feed itself, preferably using [the RVW namespace](http://www.pmbrowser.info/rvw/0.2/) so that I can aggregate and store data sensibly and separately from, but related to, the main content.

The question Alf asks in his post is really good (I’ve only really just got around to reading it properly): <q cite="http://hublog.hubmed.org/archives/001129.html">is XHTML a good enough storage system?</q>

For storage of the marked-up data as-is, alongside the content, it’s probably fine, but as soon as want to do something useful, or practical with that data, it’s not.

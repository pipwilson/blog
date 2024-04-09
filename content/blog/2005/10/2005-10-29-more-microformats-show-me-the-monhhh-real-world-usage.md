+++
title = "More microformats - show me the mon^H^H^H real-world usage!"
date = "2005-10-29 12:56:00"
slug = "more-microformats-show-me-the-monhhh-real-world-usage"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
+++

This was just going to be a comment replying to [Ryan King’s comment](http://philwilson.org/blog/2005/10/microformats-in-practice.html#113057325433946245) on my blog, but it got a bit long, so here it is as a full post:

Hi Ryan thanks for replying.

Easy to implement and “easy enough” to parse are a side-issue to my question.

Firstly I’d dispute that nofollow is a microformat, although I understand where a similarity could be drawn.

hCard and hCalendar conversion is an interesting usage, and I think one with plenty of scope, but I don’t see any actual usage of the converted information, and your comment was that they’ve been proven to work in practice. Without usage, it’s just so much of an experiment.

Tagging is more intruiging, and a good example but I’m not sure if I’m sold on it as a solid application of the technology, although I can see that it clearly works in practice. I think I’m mainly distrustful of tagging in an open system, where gaming starts to come in to it in a far less controlled manner than say, closed systems like del.ico.us or flickr or for someone organising the posts on their own blog. Maybe I should make that clear – I’m distrustful of the utility of tagging in open systems. Too much chaff and too little wheat.

I’m not looking for an industry application usage, or some massive business usage, that’s not what I tend to care about anyway – I just want to see where **I** can use them. At the moment, they just sound like so much hype, so little substance.

It’s like Mark Pilgrim’s GM scripts to post discovered microformat data to an Atom store. It sounds like a massively impressive script, but would I really want every hCard I come across stored? No. Would I want every event I come across stored? No. I couldn’t care less.

On the other hand, I can see a massive potential for usage inside of my feed aggregator. If someone posts about an event and marks it up in hCalendar, I probably **do** want to know about it. If someone posts a review and marks it up in hReview, then I probably **do** want that stored somewhere so I can see what people I know (and people I subscribe to) are up to, and what they rate. As of yet, however, I haven’t seen any aggregators that do this.

I was going to make my hacked copy of FeedOnFeeds use [the XSLT you link to](http://suda.co.uk/projects/X2V) and <del datetime="2005-11-03T13:34:34Z">Alf Eaton</del> <ins datetime="2005-11-03T13:34:34Z">Danny Ayers</ins>‘ [hreview2rdfxsml](http://alf.hubmed.org/hreview2rdfxml.xsl) to pick out reviews and calendar events, but I can’t find any in the wild, so why I should Ido this? Again to clarify: I haven’t found *any* instances of hReview in feeds in the wild, including the sources mentioned in the [examples in the wild](http://microformats.org/wiki/hreview#Examples_in_the_wild) section on the hReview page on the microformats wiki. If I *have* missed one, I welcome pointers! So slightly chicken and egg here – if no-one is doing it, why should I bother adding the functionality to my parser?

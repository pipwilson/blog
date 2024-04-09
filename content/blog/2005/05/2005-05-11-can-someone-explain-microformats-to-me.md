+++
title = "Can someone explain microformats to me?"
date = "2005-05-11 09:28:00"
slug = "can-someone-explain-microformats-to-me"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
+++

I’ve spent a lot of time thinking about [microformats](http://developers.technorati.com/wiki/MicroFormats), wondering [what they are](http://www.xml.com/pub/a/2005/03/23/deviant.html), creating docs and writing code to deal with them, and my eventual conclusion is: I don’t get it.

I quite genuinely don’t understand the point of microformats. Not only do I not understand *why*, but I don’t understand *who* they’re for, or *how* they’re supposed to be used.

I understand [attention.xml](http://developers.technorati.com/wiki/attentionxml) slightly better, and it’s a nice idea that aggregators should be able to standardize on a format for indicating <q cite="http://developers.technorati.com/wiki/attentionxml">such information as, the last time the feed/post was accessed, the duration of time spent on the feed/post, recent times of feed/post access, user set (dis)approval of posts, etc.</q> but I just don’t understand the decision to use HTML.

I think this is possibly also my problem with microformats in general. If they were in an arbitrary XML language, people would be looking at things like [hCard](http://developers.technorati.com/wiki/hCard), [hCalendar](http://developers.technorati.com/wiki/hCalendar) and [hReview](http://developers.technorati.com/wiki/hReview) decrying them as redundant, and point at existing XML formats for these things. I don’t see why putting them in HTML makes them any more relevant. In the same way, I don’t understand why attention.xml would be in HTML instead of by a strictly defined XML schema or even, Lord help us, OPML (the format, not the application).

The *one* benefit I can see is that they’re instantly displayable on a webpage, but quite frankly, so what? Is this the magic that I’m not getting? (yes, I’ve read [“Can your website be your API?”](http://www.tantek.com/presentations/20040928sdforumws/semantic-xhtml.html "
Using semantic XHTML to show what you mean")). Maybe I’d understand it better if everyone was serving up completely valid XHTML and we could query webpages for inline reviews etc. using XPath, but they’re not, and this isn’t likely to **ever** change.

I understand [structuredblogging.org](http://structuredblogging.org/) slightly better, and I can understand both why, and who, even though I don’t have a copy of WordPress running for me to actually use the plugin they provide. It also makes more sense to me. This is how I’d serve up my data, XML alongside, or embedded within my webpage.

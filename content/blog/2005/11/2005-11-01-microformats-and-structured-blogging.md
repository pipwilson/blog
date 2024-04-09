+++
title = "Microformats and structured blogging"
date = "2005-11-01 12:50:00"
slug = "microformats-and-structured-blogging"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
+++

Stowe Boyd of Corante has gotten around to writing an article about microformats and structured blogging entitled [Microformats v Structured Blogging: A Small War With Big Consequences](http://www.corante.com/getreal/archives/2005/10/10/microformats_v_structured_blogging_a_small_war_with_big_consequences.php).

Both formats are about embedding more data into blog posts. If your blog post contains details of an event then tools should be able to extract that event and place it into your calendar. If your blog post contains a review then tools should be able to extract that review and add it into your store of recommendations. And so on.

The two approaches are very similar, but, using a review as an example, here are some broad differences:

- microformats embeds data directly into your review
- structuredblogging embeds a separate data node before or after your review using the `script` tag
- microformats can be parsed with JavaScript and highlighted with CSS
- structuredblogging `script` nodes cannot be parsed by JavaScript
- [compound microformats](http://microformats.org/wiki/compound-microformat) attempt to represent a 1-1 mapping of an IETF standard (this is true for hCalendar and hCard) in XHTML
- structuredblogging uses [custom XML schema](http://structuredblogging.org/wordpress/?page_id=13#schema) to represent events and reviews

Something that’s quite important to note, I think, is that whilst structuredblogging *does* have a more technical bent, both microformats and structured blogging are quite easy to understand and to write by hand, and *both* are easy to mess up by not nesting your tags properly!

Stowe’s article is reasonably ambivalent, but leaning towards microformats, noting

> My gut feel is that structured blogging requires too much formalization of what people do on their blogs, and microformatting tools are more likely to be adopted in a dynamic, bottom-up, changing, and innovative environment.

This seems like a reasonable assumption to make, but he goes on to say that

> It may come down to a battle of the tools — who creates a better set of tools for authors — rather than the pros and cons of the models themselves.

This is an interesting comment – the only structuredblogging tool is [a plugin released for WordPress](http://structuredblogging.org/wordpress/?page_id=8 "StructuredBlogging WordPress plugin") which offers complete integration into the blogging tool. On the other hand, whilst there are many tools for creating and extracting microformat data from webpages, there aren’t any which are integrated into a blogging tool (there appear to be some [private](http://sungnyemun.org/wordpress/?p=22 "Wordpress plugin for using hReview") [plugins](http://thedredge.org/2005/06/using-hcards-in-your-blog/ "Wordpress plugin for using hCard") that people are using, but there’s nothing that anyone can download and use).

According to his article, there are more structuredblogging plugins in the works, intended for other blogging platforms, and this would be great, because by far the weakest point of structuredblogging, head and shoulders above any technical detail, is the total lack of any obvious update since April 2005. To all intents and purposes, the site and project look dead from the outside, offering only an email address where you can send comments and suggestions. The people behind microformats on the other hand opened up a wiki to store their project details, and a mailing list where people can discuss things. The process and project are both more visibly open than structuredblogging, and because of this microformats are bound to get not only more eyeballs, but also more supporters as people feel that they can actually get involved.

As much as [I think that using XML Schema to define item types is the “right” way to go about things](http://philwilson.org/blog/2005/09/blogging-different-types-of-content.html "Blogging different types of content with XML schemas"), I can’t see that structuredblogging stands a chance of gaining a foothold unless it opens up in the same way that the microformats crowd currently do.

+++
title = "Getting going with Gemini"
date = "2023-10-19 21:08:29"
slug = "getting-going-with-gemini"
[taxonomies]
tags = ['general']
[extra]
show_comments = "false"
+++

I’ve been really interested in [Gemini](https://communitywiki.org/wiki/Gemini) space for about a year now, having read the protocol and used a few [web proxies to explore Gemini space](https://portal.mozz.us/gemini/geminiprotocol.net/).

I finally went whole hog and downloaded a Gemini browser, [Lagrange](https://github.com/skyjake/lagrange) on my home computer in order to explore Gemini space better, faster and using the experience the actual Gemini users get. (Kudos to Lagrange for being a browser written in C which actually compiled first time when I wanted to make a small change!)

Gemini has been great!

It’s incredible to find all these people publishing content on the internet which is totally invisible to the web. It’s been said [many](https://nox.im/posts/2021/0703/gemini-revival-of-simplicity-and-the-old-internet/) [times](https://cheapskatesguide.org/articles/old-internet-coming-back.html) [before](https://blog.devgenius.io/tired-of-the-modern-web-try-the-gemini-protocol-ba847f102fe6) but it really does feel like the early days of blogging, where people are exploring the new formats, new types of engagement and ways of browsing, editing, uploading and exploring each other’s content.

The limitations of the format (no styles!) means there are some really interesting pieces of functionality in the client, like auto-selecting a colour palette based on the domain name, or adding in-page references or tables of contents as part of the native browser, rather than through a plugin. This works especially well in Gemini because there is no server-side layout to consider, so the browser is free to use the full width of its window to provide affordances in a consistent way across multiple sites.

Another of the really interesting aspects is [Titan](https://communitywiki.org/wiki/Titan). This is an extension to the Gemini protocol which allows for editing and uploading of content in Gemini space, in a way much more similar to the original envisioning of [the read/write web by Tim Berners-Lee back in the 90s](http://news.bbc.co.uk/1/hi/technology/4132752.stm). A good example of this is through using [the Phoebe wiki software](https://metacpan.org/pod/phoebe).

And so the question remains what best to do to join in with this fun?

Well, it turns out that it’s absolutely trivial to run a Gemini server on a Raspberry Pi, of which I have many in a box, and so I chose [agate](https://github.com/mbrubeck/agate) (download binary, execute binary), created some pages, added some firewall rules and lo! up and running!

So, plenty of playing to do now and to see if I can use some conversion tools (and editing discipline) to multi post both to here and its Gemini equivalent. Exciting!

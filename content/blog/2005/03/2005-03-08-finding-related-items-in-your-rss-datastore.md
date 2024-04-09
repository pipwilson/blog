+++
title = "Finding related items in your RSS datastore"
date = "2005-03-08 17:42:00"
slug = "finding-related-items-in-your-rss-datastore"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
comments_file = "/content/blog/2005/03/2005-03-08-finding-related-items-in-your-rss-datastore-comments.csv"
+++

Jon Udell’s latest screencast [“The on-demand blogosphere”](http://weblog.infoworld.com/udell/2005/03/07.html) shows how he mines the data stored by his aggregator to find out who on his blogroll has made a post related to what he’s reading at a given moment, based on anything from the currently selected word in a block of text, to the URLs the text links to.

It’s all very clever, and probably quite useful if you only skim read your aggregator, or have a veritable mountain of sources to look at, but it’s clearly version 0.1 as far as this kind of thing goes (as Jon himself suggests).

For me, the next step would be to automate the searching; using either Greasemonkey or an extension to display either a sidebar or a section in-page containing the related links.

Taking Jon’s step of then searching out through the blogrolls of the people you’re subscribed to is harder by an order of difficulty, primarily because there’s no easy way of discovering exactly who they subscribe to (if they even make it public). There’s always the chance that they might have a FOAF file, but then the problem becomes one of identifying which link in their FOAF file is to a blogroll file (probably in OCS or OPML) before you’ve actually downloaded it.

I imagine there’s some way you could centralise it all by using Bloglines and associating the blogs you read with user IDs, and then harvesting the public blogrolls, but that’s just a wild guess.

Tantalisingly though, all this stuff seems just out of reach. I can’t think of any truly practical way of going about it (especially in a decentralised way, which would be the most useful). I’m sure this is the moment where I’m supposed to say that the semantic web will save us, but I really can’t think of any way it helps here, sorry 🙂

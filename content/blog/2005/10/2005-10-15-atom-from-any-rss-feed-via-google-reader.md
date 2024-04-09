+++
title = "Atom from any RSS feed via Google Reader"
date = "2005-10-15 14:01:00"
slug = "atom-from-any-rss-feed-via-google-reader"
[taxonomies]
tags = ['general','google','google reader','syndication']
[extra]
show_comments = "false"
comments_file = "/content/blog/2005/10/2005-10-15-atom-from-any-rss-feed-via-google-reader-comments.csv"
+++

Got a site which only provides an RSS feed? Do you wish you could have an Atom feed of it, but don’t have mad XSLT skillz or somewhere you can host your own PHP conversion script? Fear not, because under the hood, Google Reader is all about the Atom, baby.

For example: I have [a del.icio.us account](http://del.icio.us/pip "My del.icio.us account"), del.icio.us is gracious enough to provide me with [an RSS feed for my account](http://del.icio.us/rss/pip "The RSS feed for my del.icio.us account"), Google Reader converts that internally into Atom. [Voila](http://www.google.com/reader/atom/feed/http://del.icio.us/rss/pip "The Atom feed on my del.icio.us account, via Google Reader"). That URL is eminently hackable, just use http://www.google.com/reader/atom/feed/ followed by the URL of your own feed.

What’s nice to note is that in this case it actually retains the tags, using the `category` element. Lovely.

Much respect goes to [Robert Sayre](http://www.franklinmint.fm), who [spotted this](http://www.franklinmint.fm/blog/archives/000474.html "Very Nicely Done").

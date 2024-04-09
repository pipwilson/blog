+++
title = "Atom doesn't exist in OPML"
date = "2005-10-16 20:44:00"
slug = "atom-doesnt-exist-in-opml"
[taxonomies]
tags = ['general']
[extra]
show_comments = "false"
comments_file = "/content/blog/2005/10/2005-10-16-atom-doesnt-exist-in-opml-comments.csv"
+++

A few days ago, Dave Winer posted some [Guidelines for validating OPML](http://www.opml.org/guidelinesForValidation). I know, hilarious, but if you can stop laughing for a second you’ll notice this:

> A subscription list document is a possibly multiple-level list of subscriptions to feeds. Each sub-element of the body of the OPML document is a node of type rss or an outline element that contains nodes of type rss.

Just recently I contacted [Rojo](http://www.rojo.com/) because they were using exactly this attribute in exactly the same way that Dave Winer describes, which means that Atom feeds are marked as `type="rss"`, which is not only misleading but actually meaningless. I think it’s wrong. Just to be clear, I think it’s a sociological and technological way (and I accept that it could be entirely unconscious) of attempting to sideline Atom via technologies that he has massive sway over.

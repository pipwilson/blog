+++
title = "FOAF support in Safari"
date = "2005-05-06 09:32:00"
slug = "foaf-support-in-safari"
[taxonomies]
tags = ['general']
[extra]
show_comments = "false"
comments_file = "/content/blog/2005/05/2005-05-06-foaf-support-in-safari-comments.csv"
+++

Sometimes it’s just better to blog something then to spend time actually thinking about it.

A week ago I saw [this photo](http://www.flickr.com/photos/jeresig/11246011/ "FOAF Support in Safari RSS") in [John Ressig’s photostream](http://www.flickr.com/photos/jeresig/) and asked him to post a larger screenshot, [which he did](http://www.flickr.com/photos/jeresig/11477517/): [![Safari FOAF Support, from John Ressig's Flickr photostream](http://photos7.flickr.com/11477517_3739616bd9_m.jpg)](http://www.flickr.com/photos/jeresig/11477517/).

John also posted [a comment on the second photo explaining what it is](http://www.flickr.com/photos/jeresig/11477517/#comment3060999), but basically it’s Safari’s view of an RSS feed with an additional list of people retrieved from a FOAF file in the sidebar. The FOAF file isn’t referenced from the RSS, so Safari is going off to the &lt;link&gt; URL in the the &lt;channel&gt; element, autodiscovering the FOAF file link, retrieving it, parsing it and then displaying it alongside the RSS data with each foaf:nick linking to their foaf:weblog. That’s a lot of work for something most people probably won’t notice 🙂

+++
title = "Time to meet the (foaf:)maker"
date = "2004-04-05 13:14:00"
slug = "time-to-meet-the-foafmaker"
[taxonomies]
tags = ['general']
[extra]
show_comments = "false"
comments_file = "/content/blog/2004/04/2004-04-05-time-to-meet-the-foafmaker-comments.csv"
+++

Whilst writing my [LJ Friends Feed](http://pipthepixie.tripod.com/blog/archive/2004_04_01_blog.html#108110446742533879) script I noticed that in the

 section of every livejournal user’s page there’s a meta tag describing the foaf:maker of that page. [G’s page](http://xurble.livejournal.com/), for example, contains this: ```
<meta name="foaf:maker" content="foaf:mbox_sha1sum '1ac73dd5910fd8615d2ae27efaf24258a84c3e66'" />
```

Paired with the `foaf:weblog` statement in [his FOAF file](http://xurble.livejournal.com/data/foaf) this provides simple validation for both statements. Awesome. I hadn’t thought of using meta tags like this, and had really assumed that rdf-in-xhtml would have to be used for it, but provided there’s a common way of doing it (especially within a closed system like LJ) then there’s no reason not to.

Interesting stuff!

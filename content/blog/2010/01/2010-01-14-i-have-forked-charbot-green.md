+++
title = "I have forked Charbot Green"
date = "2010-01-14 00:22:09"
slug = "i-have-forked-charbot-green"
[taxonomies]
tags = ['bbc','general','iplayer','ruby','twitter']
[extra]
show_comments = "true"
comments_file = "/content/blog/2010/01/2010-01-14-i-have-forked-charbot-green-comments.csv"
+++

About a year ago Libby Miller [wrote Charbot Green](http://planb.nicecupoftea.org/2009/02/03/charbotgreen-a-twitter-radio-4-announcement-bot/), a [BBC Radio 4 announcement bot for Twitter](http://twitter.com/charbotgreen2). It’s written in [JRuby](http://jruby.org/), uses the [H2 database](http://www.h2database.com/) and [the source code is in SVN here](http://svn.foaf-project.org/foaftown/2009/charbotgreen/).

![A screenshot of CharbotGreen on Twitter](http://philwilson.org/blog/wp-content/uploads/2014/04/charbotgreen-twitter1.png "charbotgreen-twitter")

It’s a really great app and I thought I’d have a play, but half-way through the install I realised that setting up an H2 DB server was a step too far, so instead I rewrote it to be a pure Ruby app using the SQLite3 database. Using SQLite3 keeps it a self-contained app in a single directory without the need to run a database server.

You can [get the code from GitHub here](http://github.com/pipwilson/charbotgreen/).

My small changelist looks like this:

- H2 replaced by SQLite3
- links to iPlayer use the short form of the URL
- if available, the subtitle, such as episode number is displayed
- now a pure ruby app!

I haven’t tested it very hard, just run it up a couple of times, so please do let me know of bugs or feel free to go fork it yourself!

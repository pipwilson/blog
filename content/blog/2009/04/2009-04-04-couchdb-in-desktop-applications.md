+++
title = "CouchDB in desktop applications"
date = "2009-04-04 17:10:41"
slug = "couchdb-in-desktop-applications"
[taxonomies]
tags = ['couchdb','general','python','venus','wxvenus']
[extra]
show_comments = "true"
comments_file = "/content/blog/2009/04/2009-04-04-couchdb-in-desktop-applications-comments.csv"
+++

Following [my last post](http://philwilson.org/blog/2009/03/storing-feedparser-objects-in-couchdb "http://philwilson.org/blog/2009/03/storing-feedparser-objects-in-couchdb") I was considering writing a [Venus filter](http://intertwingly.net/code/venus/docs/filters.html "http://intertwingly.net/code/venus/docs/filters.html") which adds all feed items into a [CouchDB](http://couchdb.apache.org/ "http://couchdb.apache.org/") database. This could then be queried by a modified [wxVenus](http://philwilson.org/code/wxvenus/ "http://philwilson.org/code/wxvenus/") or a webapp (using the[ CouchDB jQuery library](http://plugins.jquery.com/project/jqcouch "http://plugins.jquery.com/project/jqcouch")) or whatever.

Thinking specifically about wxVenus, which is a desktop appliaction, CouchDB is like MySQL in that you must have the server up and running before your application tries to use it, and (afaik) there is no way to embed the server itself into your application, which places quite a bit of burden on the user.

My initial plans were to use [SQLite](http://www.sqlite.org/) which I can embed and use happily without another daemon running beforehand, but would mean I have to set up a schema and do all that tedious INSERTing, SELECTing and so on (I appreciate I could go all ORM [on](https://storm.canonical.com/ "Storm ORM (https://storm.canonical.com/)") [its](http://www.sqlalchemy.org/ "SQLAlchemy ORM (http://www.sqlalchemy.org/)") [ass](http://www.aminus.net/dejavu "Dejavu ORM (http://www.aminus.net/dejavu)"), but again the development effort is much much higher than that with CouchDB).

So, what to do? I suspect that for the moment I’ll go about getting CouchDB all nice and integrated, but it doesn’t look like it’d leave me with an application people can download, install the dependencies, and just run, does it?

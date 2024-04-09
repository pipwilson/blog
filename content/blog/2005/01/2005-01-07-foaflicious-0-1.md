+++
title = "FOAFlicious 0.1"
date = "2005-01-07 14:46:00"
slug = "foaflicious-01"
[taxonomies]
tags = ['general']
[extra]
show_comments = "false"
comments_file = "/content/blog/2005/01/2005-01-07-foaflicious-0-1-comments.csv"
+++

FOAFlicious is an application for generating a [FOAF](http://www.foaf-project.org/) file from your [del.icio.us](http://del.icio.us/) inbox.

FOAFlicious is written in [Groovy](http://groovy.codehaus.org/ "a new agile dynamic language for the JVM combining lots of great features from languages like Python, Ruby and Smalltalk and making them available to the Java developers using a Java-like syntax."), and can be seen in action on <http://philwilson.org:8180/foaflicious/foaflicious.groovy> (hopefully this URL will become better in time).

This is the first time I’ve ever used Groovy and so far I’ve not been able to configure it to accept URL parameters (answers on a postcard please) so it’s currently hardcoded to return a FOAF file based on [my del.icio.us inbox](http://del.icio.us/pip "my del.icio.us inbox"), here’s looking at v0.2 🙂

The del.icio.us inbox facility is currently turned off except for the list of subscriptions so it currently works by masses of screen-scraping. As soon as the inbox comes back it should be able to switch to using the [del.icio.us API](http://del.icio.us/doc/api) (probably using David Czarnecki’s [delicious-java API](http://sourceforge.net/projects/delicious-java/)).

Currently it uses the del.icio.us page for each user listed in your inbox to extract a user’s real name and homepage, then looks at their homepage to see if they have a FOAF autodiscovery link, and if so includes it in a `<rdfs:seeAlso rdf:resource="blah"/>` block.

The (terrible) code is available on <http://philwilson.org/projects/foaflicious/foaflicious-0.1.groovy>. it was only written in a couple of hours, so no abuse please 🙂 In order to run it you’ll need the Groovy libraries, [commons-httpclient](http://jakarta.apache.org/commons/httpclient/), [commons-logging](http://jakarta.apache.org/commons/logging/) and [JTidy](http://jtidy.sourceforge.net/).

If you want to stay notified about this project, it has [its own feed](http://philwilson.org/projects/foaflicious/atom.xml).

For reasons of my own sanity, you can add comments and questions about this [over here](http://philwilson.org/projects/foaflicious/2005/01/foaflicious-01.html).

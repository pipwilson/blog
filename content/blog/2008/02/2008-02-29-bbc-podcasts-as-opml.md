+++
title = "BBC Podcasts as OPML"
date = "2008-02-29 17:08:23"
slug = "bbc-podcasts-as-opml"
[taxonomies]
tags = ['general','mp3 syndication']
[extra]
show_comments = "true"
+++

The BBC make all of their podcast programme information [available as an XML file](http://downloads.bbc.co.uk/podcasts/ppg.xml).

Literally five minutes of XSLT gives me this:  
<http://philwilson.org/code/bbc-podcasts.xslt>

`$ xsltproc bbc-podcasts.xslt <a href="http://downloads.bbc.co.uk/podcasts/ppg.xml">http://downloads.bbc.co.uk/podcasts/ppg.xml</a> > bbc-podcasts.opml `

outputs to: <http://philwilson.org/code/bbc-podcasts.opml>

which you can then render to something like this: <http://tinyurl.com/2edfvs>

Obvious improvements are grouping by radio station etc. but this will be very handy as-is for my N95 🙂

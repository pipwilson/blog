+++
title = "FOAF and social networking"
date = "2004-12-26 04:28:00"
slug = "foaf-and-social-networking"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
comments_file = "/content/blog/2004/12/2004-12-26-foaf-and-social-networking-comments.csv"
+++

The most interesting thing I’ve noticed about Flickr in the past week is that within one or two-degrees of [my Flickr profile](http://flickr.com/people/pip) I’ve found so many people whose weblogs I subscribe to. Evhead, Kottke, Anil Dash, BluishOrange – all these are ones which just spring to mind now, there are plenty of others.

So what I want are FOAF profiles for the people I’m subscribed to which not only gives their usernames on systems like Flickr but then shows me how closely related to them I am (maybe via TouchGraph if I wanted it in a map style, but HTML will do me just fine – Orkut actually did a good job of this) based on what other relationships I have with them and any they may have with me.

So. We have part of this with Seth Ladd’s recent work on [generating FOAF from Flickr](http://www.picklematrix.net/archives/000951.html). What else do we need? Well ideally, unless we want to spider the entire networks behind these systems we need these people to generate FOAF which links to FOAF files of the accounts they have on various networks (so in [my FOAF file](http://philwilson.org/philfoaf.rdf) I should link to a FOAF file of [my Flickr account](http://www.flickr.com/people/pip/), my [del.icio.us account](http://del.icio.us/pip), IM account, etc).

Of course, this is pretty unlikely to happen. So what would happen if someone started doing it for them? Is centralising someone’s distributed persona a problem? Presumably they’ve put that much detail about themselves online for a reason, but as we saw recently when Plink was turned off because of FUD-fuelled complaints, some people don’t like it.

On the other hand, mapping Flickr relationships through [FOAF-naut](http://www.foafnaut.org/) would be a great way to visualise the centres and communities in Flickr: find out who’s a ‘contact whore’ by adding people but isn’t added themselves (oh yes, Flickr supports the notion of reciprical contact acknowledgement very well), who belongs to the most communities and so on.

Sounds great to me! Seth should set his [FOAFverse](http://www.picklematrix.net/archives/000962.html) app to harvest his own FOAFlickr data and display it for the world to see via the SVG magic that is [FOAFnaut](http://www.foafnaut.org/) 🙂

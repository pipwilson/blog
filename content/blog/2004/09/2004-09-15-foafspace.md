+++
title = "FoaFSpace"
date = "2004-09-15 11:40:00"
slug = "foafspace"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
comments_file = "/content/blog/2004/09/2004-09-15-foafspace-comments.csv"
+++

[FoafSpace](http://www.foafspace.com/) is a new FOAF search engine by [Gene McCulley](http://www.foafspace.com/search?query=mcculley) which was just announced on the [rdfweb-dev mailing list](http://rdfweb.org/mailman/listinfo/rdfweb-dev). Normally I’d just bookmark it using [del.icio.us](http://del.icio.us/) but the fact that I loaded the site, typed in my nick and it came back with [my details](http://www.foafspace.com/search?query=pip) in sub-second time was pretty impressive.

At the time of writing, it’s currently got 1039950 people listed and provides interesting stats like [the top 20 websites in terms of the number of FoaF files that have been spidered](http://www.foafspace.com/hosts) and which of the people it knows about [have their birthdays today](http://www.foafspace.com/birthday).

I’d just started thinking about writing my own FOAF [scutter](http://rdfweb.org/topic/Scutter), since [Jim Ley’s data dumps](http://jibbering.com/foaf/dumps/) are in MySQL format (I’d prefer the raw triples) and a bit out of date and I need a chunk of FOAF data to do some analysis on, and you can never have too many [hacky, poorly-written scutters](http://jibbering.com/foaf/foafnaut.scutter.1) 😉 Hopefully FoaFspace will release their data dump, and maybe [plink.org](http://www.plink.org) could do the same?

Ha! Now I’ve said that I’d prefer it in triples I’ve found [Morten Frederiksen’s Perl script for converting Jim’s DB dump file directly into triples](http://www.wasab.dk/morten/2004/03/jim2ntriples.pl), I’ll have to give that a go.

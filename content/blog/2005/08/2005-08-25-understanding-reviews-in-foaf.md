+++
title = "Understanding reviews in FOAF"
date = "2005-08-25 11:35:00"
slug = "understanding-reviews-in-foaf"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
comments_file = "/content/blog/2005/08/2005-08-25-understanding-reviews-in-foaf-comments.csv"
+++

A few months ago I signed up for FilmTrust. It’s an interesting project in which you can rate and reviews films and also add friends and add how much you trust their film ratings. The natural progression would be a personalised film recommendation system, but this doesn’t appear to exist yet.

FilmTrust output a FOAF file for each user. For example, here’s [my FOAF file as FilmTrust sees me](http://trust.mindswap.org/cgi-bin/FilmTrust/foaf.cgi?user=pip).

In it, you can see that I’ve added Danny Ayers and Dan Brickley as contacts, and you can also see that I’ve rated several films. All these films are listed in my `<foaf:Person>` element as `<foaf:made rdf:resource='#tt0066921'/>` but then my reviews are referenced like this: `<rdf:Description rdf:about="http://imdb.com/title/tt0066921/">` – so am I missing something, or do these not actually refer to one another?

<ins datetime="2005-08-25T15:55:55Z"></ins>

Oops, just to clarify, the review itself is actually referenced in the generated FOAF file by `<review:Review rdf:ID="tt0066921-pip">`, but this doesn’t match the foaf:made resource ID either.

<ins datetime="2005-09-23T22:25:55Z"></ins>

Hurrah! That’s now been fixed thanks to a quick email exchange with Jennifer Goldbeck, and the graph now looks lovely. Thanks Jennifer!ma

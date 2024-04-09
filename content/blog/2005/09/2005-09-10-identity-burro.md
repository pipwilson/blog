+++
title = "Identity Burro"
date = "2005-09-10 20:31:00"
slug = "identity-burro"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
comments_file = "/content/blog/2005/09/2005-09-10-identity-burro-comments.csv"
+++

> Identity Burro is a Greasemonkey script for Firefox that gives quick access to all the public aspects of a person: photos, blog, preferred sites, preferred songs, etc. Precisely, when you navigate \[to\] the Web page of a certain user on Flickr, it inserts into the Web page links to the page of the same user on Del.icio.us, Technorati, CiteULike, WebJay, Last.tm/Audioscrobbler, Rojo, 43things, 43places, AllConsuming, LiveJournal, Simpy.

Discovered from [this post in FlickrHacks](http://flickr.com/groups/flickrhacks/discuss/80644/), and referenced in [this blog post](http://moloko.itc.it/paoloblog/archives/2005/08/29/identity_burro_making_social_sites_more_social.html).

This is a fantastically interesting Greasemonkey script.

As the blog post says, its biggest limitation is that it only links to the same username on these sites. Other than this of course, the list of sites it links to is totally fixed. I don’t have a CiteULike, Rojo, Livejournal or Simpy account, but they’ll still be listed in the script, perhaps linking to an existing account on those systems which has nothing to do with me.

What I’d really like to see is a script like this, which, when you visit one of any number of sites (if you list them explicitly in GM, or it could work for all sites) looks up a data store to see if that account is listed, and if so, all the others specified for that user, using FOAF as its data seed.

I think this should be easily achievable via a simple form along the lines of the forms Leigh and I cooked up for our respective needs which allows people to create FOAF files which list OnlineAccount membership for a person which as well as providing a raw FOAF also stores the data.

I see two instant problems:

1\) bootstrapping it in the first place. This is could be partly counter-acted via network effects.

2\) Someone adding someone else’s information who then objects. It would be simple enough to remove requested triples (at the expense of generated networks being incomplete, but that’s ok), but what to do to stop those triples being added again? Maintain a “banned triples” datastore and do a search and compare each time you try and add a new triple to the main datastore? I suppose that’s possible, but it sounds ludicrously expensive. I wonder what the real solution would be.

Anyway, I think the main thrust of this should be very easy to do, I’ll get cracking 🙂

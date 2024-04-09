+++
title = "Don't use Neutrino, use FOAF"
date = "2005-05-18 16:53:00"
slug = "dont-use-neutrino-use-foaf"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
comments_file = "/content/blog/2005/05/2005-05-18-dont-use-neutrino-use-foaf-comments.csv"
+++

OK, so in [my last post](http://philwilson.org/blog/2005/05/argh-more-dumb-meta-proliferation.html) I rather eloquently described my distaste for [the neutrino.xml format](http://neutrinoxml.com/wiki/index.php?title=Main_Page).

My problems with it are manifold. In no particular order:

- it’s yet another meta-format and yet another format to parse
- it doesn’t describe anything new
- it suffers from any number of the problems it claims to solve
- users shouldn’t have to know about feed URLs

A number have people have asked [Why not just use OPML?](http://inessential.com/?comments=1&postid=3071). The neutrino.xml wiki says:

> Whilst it may be possible to implement most of what Neutrino hopes to achieve with OPML, this would be by convention rather than by design. Passing an OPML file to an aggregator gives no guarantees about what the file will contain or mean. Neutrino is specifically person-oriented whilst OPML is general-purpose.

To this I say “Tish and pshah, OPML can have anything you like in it. Define some attributes and you‘re away!”, except of course this isn’t a very good solution because you‘re defining an arbitrary data set onto a format already used for something else within the syndication world.

“But wait!”, I hear you say, “if the main argument against using OPML is that it has no idea of identity, then why not use a format which does, like FOAF?” Well, the author of neutrino has thought of this:

> Whilst FOAF attempts to describe properties of an individual and their entire social network, Neutrino stops at the boundary of the individual.

I hate to shatter the illusion, but a FOAF file doesn’t have to describe an “entire social network”, it can just describe a single person. In which case, we‘re in business. Regardless of this though, I firmly believe that a user shouldn’t have to know the URLs of any feeds in order to create a file listing their various feeds. Feeds which belong to and represent a user are very almost always going to be site syndication, and not synthetic (such as a feed of search results), and so a list of sites which provide feed autodetection should be sufficient. If my workplace suddenly decides to start syndicating their website in a feed, every member of that company shouldn’t have to go and update an XML file, it should already contain the main site URL and they can let autodetection do its work.

What happens when my workplace silently drops their RSS 2.0 feed and switches to Atom? An ideal world would see a 301 redirect, but in the real world that doesn’t happen (especially not for weblogs in hosted environments or with the technological nous to do this), so I’d have to a) notice and b) update my file. Far better to have your file point at the site instead (i.e. what is actually being syndicated).

In addition, people shouldn’t have to specify a title and description – these are elements present in the feed already! What’s with the duplication?

Anyway, that’s plenty long enough to be getting on with, and I haven’t even begun to cover other benefits of using FOAF, such as using the OnlineAccount property so that you can list all the people in your blogroll who have a Flickr account…

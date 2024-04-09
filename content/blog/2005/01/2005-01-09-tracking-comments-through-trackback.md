+++
title = "Tracking comments through trackback"
date = "2005-01-09 22:24:00"
slug = "tracking-comments-through-trackback"
[taxonomies]
tags = ['general']
[extra]
show_comments = "false"
+++

Also inspired by the complete quality that is [Flickr’s ‘recent comments’ page](http://www.flickr.com/help.gne#31), [Matt Haughey’s also after the same thing for normal blog commenting](http://a.wholelottanothing.org/2005/01/posted_elsewher.html "Posted Elsewhere needs to go internet-wide"), and touches on [the idea that I mooted last month](http://philwilson.org/blog/2004/12/tracking-comments.html "Redirect the comment form to your own tracker") but disregards it because <q cite="http://a.wholelottanothing.org/2005/01/posted_elsewher.html">anything remotely manual gets dropped eventually</q> (and he’s right of course). In the course of this though, he actually comes up with a reasonable solution based on trackback (it’s actually made clearer in [the comments on one of his Flickr images](http://www.flickr.com/photos/mathowie/3134739/#comment629160)).

The idea, summarised, runs thusly:

1. Your home page has an [RSD](http://archipelago.phrasewise.com/RSD "Really Simple Discovery") link to a trackback page
2. When you leave a comment on a weblog, you always have to leave your URL
3. The comment script looks up the address of your trackback script from the URL you’ve left
4. The comment script pings your trackpage page with the details of your comment
5. tada! You have an automatically-generated list of all the comments you’ve made

Of course then, not only do you have a list of the comments you’ve made, but the comment script could also ping you each time someone makes a comment after you, letting you know exactly what’s going on. There’s a potential scalability problem there – what do you do for posts that get comments from hundreds of different people? Well, sites that mandate a login before you can comment (like TypePad and Blogger) should enable you to follow your conversations through a central page anyway (which, by the way, they currently don’t), but trying to ping 300 previous commentors of your new post whilst still allowing comments on other posts would bring most people’s servers crashing to the ground.

The main problem with all of this, of course, is that you need not only all of the different blogging systems to implement this, but for non-hosted or centralised services you need the users to actually upgrade the version of the software they’re running. On the other hand, it should be almost trivial for the implementors, so there could (and should) be a quick uptake if this is deemed a good enough solution.

In the meantime though, I’m thinking about using [Greasemonkey](http://greasemonkey.mozdev.org/) to rewrite the form submissions for every page I visit to go through my proxy page, so that I get to see exactly what I’m submitting, where and when. If I wanted it would be easy enough to blacklist certain URLS (like bug trackers and so on) where I don’t need to be reminded about the comment. It’s not a great solution, but for the time being, it’ll just about work.

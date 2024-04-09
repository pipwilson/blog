+++
title = "The merits of a bug database"
date = "2012-11-06 22:59:19"
slug = "the-merits-of-a-bug-database"
[taxonomies]
tags = ['general']
[extra]
show_comments = "false"
+++

[![Ladybug lost in Echinops Ritro](http://farm7.staticflickr.com/6080/6045026195_b682c44475_n.jpg)](http://www.flickr.com/photos/adulau/6045026195/ "Ladybug lost in Echinops Ritro by Alexandre Dulaunoy, on Flickr")

I just realised that we no longer have a functional bug database at work, meaning we have gone down by a point in [the Joel Test](http://www.joelonsoftware.com/articles/fog0000000043.html).

We don’t produce a single product (unless you count “the website and the quarter of a million pages it contains” as a product) and in the past have created standalone Trac installs for the larger pieces of software infrastructure we’ve written, and used the bug tracker in that to manage progress. Typically we then reached either a quality or time threshold and regardless of what bugs were there, and it was time for the next project.

We then never came back to those projects, and the collected bugs and issues would sit there for years, collecting mental dust as we moved onto other projects, or enhancing other bits of the site, all of which had their own bugs too. This is quite a depressing state to be in, and although on rare occassions we bundled up some of this work into “technical debt” projects, the mental weight would carry on, and eventually our rapid pace between projects, and an improved in-project process meant that we were meeting our goals on each project, and moving to the next without tracking known issues in any way at all because, y’know, it served no purpose other than to make us sad.

This has to change.

Clearly we’re at the point where a different bugtracker per backend software product won’t cut it. We’ve tried Jira in the past, and although it does a lot, it’s probably too much for us. So what should we do instead? My thinking is to use a tool which is set up to track a single project, and we use categorisation and tagging to differentiate what area of the site, what aspect of the site, and what backend tools are relevant – this should allow us to slice and dice across tens of thousands of lines of JS, Java and PHP and probably millions of lines of HTML, with impunity. Issues can be collated and then bundled into projects which we manage separately. I’m definitely *not* thinking about todo-list management software like Trello!

My gut call is to go to [Lightouse](http://lighthouseapp.com/) – but I’ve been out of the game for a while, have you got a recommendation, free or not, which might help us out? Let me know!

(I should note that this all occured to me when looking at [a job opening at BERG](http://careers.stackoverflow.com/jobs/26841/). If it’s not closed by now, [go have a look](http://careers.stackoverflow.com/jobs/26841/) and work for the lovely, lovely people there!)

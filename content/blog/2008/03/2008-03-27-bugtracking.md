+++
title = "Bugtracking"
date = "2008-03-27 00:08:39"
slug = "bugtracking"
[taxonomies]
tags = ['bugtracking','general','management','wxvenus']
[extra]
show_comments = "true"
+++

<embed align="right" src="http://philwilson.org/code/wxvenus/FeedThing.svg"></embed>

With [wxVenus](http://code.google.com/p/wxvenus/), I wanted to set up a public butracker. I wanted to avoid [Google Code](http://code.google.come) because of my recent account problems. At a previous company we used [FogBUGZ](http://www.fogcreek.com/FogBugz/) and the developer-focussed bug-entry and editing was brilliant, so I was looking for something similar. I couldn’t find anything I liked immediately and so just to get started I began using [Lighthouse](http://www.lighthouseapp.com/) which has a very nice, clear and simple user-interface which requires minimal effort to use (\*cough\*bugzilla\*cough\*), but it was locked to private-only. If I’d wanted to pay up I could have got anon-view but no anon-submissions IIRC.

At work we use a default install of [Trac](http://trac.edgewall.org/), which is reasonably horrible, but I know that it’s heavily customisable via a simple config system and [plugins](http://trac-hacks.org/) so I gave that a go (hence [the previous post on mod\_python](http://philwilson.org/blog/2008/03/setting-up-trac-on-debian-etch-with-apache-13-a-brief-guide)). I obviously got something wrong when I was setting it up though because loading a single page took at least five seconds to appear as well as murdering my server, and it was completely unusable as a bugtracker. I tried running tracd (the standalone trac web server) and it responded much, much more quickly but still not fast enough to use.

In the end I did [set up home on Google Code](http://code.google.com/p/wxvenus/), but I’m not very happy about it. The interface is quite good, although typically for Google, sparse, but there’s no obvious API if I want to get my wiki pages or issues out, and I certainly don’t trust Google not to close my account again, even if by accident, so I’d be much happier hosting my own – tied into bzr ideally.

So is there anything out there that meets my simple, fast and free bugtracking needs? I am not bothered about milestones, priorities, ticket progress trackers or due dates. Just a list of bugs which I can arbitrarily re-order and add comments to will keep me happy.

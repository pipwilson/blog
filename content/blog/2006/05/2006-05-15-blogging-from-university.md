+++
title = "Blogging from University"
date = "2006-05-15 14:26:00"
slug = "blogging-from-university"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
comments_file = "/content/blog/2006/05/2006-05-15-blogging-from-university-comments.csv"
+++

When I blog about things at work, it’s normally stuff that’s already been done. Completed tasks. In the past, as it were. This is some discussion about things that haven’t been decided, and reflects only my thoughts, and I’m not terribly important, so don’t read any more into this than you would the mumbling drunk at the bus-stop.

We’re looking into rolling out some kind of blogging at work. One blog per student, one blog per member of staff, one group blog per module in a degree, one group blog per department, one group blog per some-people-who-want-a-group-blog and so on. That kind of thing.

As far as I can tell, there are two primary candidates: [WordPress MU](http://mu.wordpress.org/) and [Roller](http://rollerweblogger.org/page/project). WordPress MU is the software behind [wordpress.com](http://www.wordpress.com) and most people have heard of it. Roller is <q cite="http://rollerweblogger.org/page/project">the open source blog server that drives Sun Microsystem’s blogs.sun.com employee blogging site, \[and\] IBM DeveloperWorks blogs</q>.

Some important attributes:

- WordPress MU is PHP
- Roller is Java
- WordPress MU does not appear to support LDAP
- Roller supports LDAP via [Acegi](http://www.acegisecurity.org/)
- WordPress MU has good community support and a lot of plugins and themes (via WordPress and wordpress.com)
- Roller looks like a more solid codebase, but has a smaller community and far fewer plugins and themes

I think it would be easy for us to look at the WordPress community and choose it because of that over other alternatives, which we hadn’t given a chance. It would be interesting to know why exactly [Warwick](http://blogs.warwick.ac.uk/ "warwickblogs") chose to implement their own blogging infrastructure as opposed to working with the Roller team, since it appears to be similar in a number of ways.

I’m also biased; we’re a Java shop and I’d hate to see us rule out a Java option if it would be better in the long run, but I’m wary of selecting it just because it *is* Java. It’s a tough choice to make, and at the moment time is precious so a full evaluation is unlikely, or “for the future”. Any thoughts are warmly welcomed.

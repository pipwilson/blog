+++
title = "Using JSPWiki in the enterprise"
date = "2006-01-10 00:20:00"
slug = "using-jspwiki-in-the-enterprise"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
comments_file = "/content/blog/2006/01/2006-01-10-using-jspwiki-in-the-enterprise-comments.csv"
+++

I’m quite a fan of [JSPWiki](http://jspwiki.org/).

I first came across it when I rolled it out at my last place of work, as an experiment. It worked out quite well, being used by just about every department of the company, and we did some internal extension of it via plugins so that it generated things like timetables out of Microsoft Project. By the time I left I think it had something like 800 pages (my former colleagues can correct me on that). In fact, its success was so complete that it induced the rollout of a proper intranet (which happened after I left).

I’ve just rolled out the latest stable version of JSPWiki at my new place, and it seems to be going OK so far. There’s a slower take-up, but then again the team is much, much smaller. It also reminded me that the default install requires you to enter “\\” when you want a single line-break. This is completely brain-dead, and I can’t imagine any circumstance when you would possibly want this behaviour. For what it’s worth, [MediaWiki](http://www.mediawiki.org/) also sports this mis-feature. In the earlier 2.0.52 I had applied a patch by [Kieron Wilkinson](http://www.jspwiki.org/wiki/KieronWilkinson) which allowed for what you’d expect the default behaviour to be: implicit linebreaks.

The biggest complaint I received about my first rollout of JSPWiki (which was version 2.0.52) was the lack of <acronym title="Access Control Lists">ACLs</acronym>. At first, there weren’t any, but the further the wiki moved into the sphere of people in a more, er, traditional mindset, the more complaints I got.

The latest version of JSPWiki (2.3) has an entire [Security 2.3](http://jspwiki.org/wiki/Security2.3) system and allows the administrator to set both per-wiki and per-page permissions. The documentation is very good, but maybe the most informative information for those wishing to deploy JSPWiki in a business comes in the response to a question in the [Security 2.3 FAQ](http://jspwiki.org/wiki/Security2.3FAQ):

> The authentication system is totally pluggable, and is based on a Java-standard API — JAAS. \[…\] You should be able to use container-managed authentication to establish who the user is by plugging Tomcat in to an LDAP server or JDBC database… just use their realm support, and turn on the single sign-on (SSO) feature to share cookies between webapps.
> 
> Now, as to the subject of what the user can do after authentication, if you are using container-managed authentication you can also use externally defined groups (such as those in LDAP or a database) to establish group membership (accounting, IT, sales, etc.) Then, you simply add access control lists (ACLs) to each page that specify which of those groups can access the page. If you want to set a default security policy for \*all\* pages or ranges of pages, too, that’s also possible. The policy file is a standard Java policy file, so that should be pretty straightforward to customize. But that’s it. A few config files to fiddle with, but no code to write — and it should hook into your web container security and enterprise realms without any difficulty at all.

I’ll definitely be trying this out when I get some time.

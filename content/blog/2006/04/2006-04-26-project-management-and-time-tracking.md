+++
title = "Project management and time tracking"
date = "2006-04-26 22:38:00"
slug = "project-management-and-time-tracking"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
comments_file = "/content/blog/2006/04/2006-04-26-project-management-and-time-tracking-comments.csv"
+++

How much time is it sensible to track? Who needs this information?

At work we use [Trac](http://www.edgewall.com/trac/ "Trac is a web-based software project management and bug/issue tracking system.") to look after our projects. It’s very useful for what we do because a) it’s free b) it has tight Subversion integration c) it has a wiki d) it has a customisable issue tracker. It does also have downsides like its atrociously [unfriendly wiki-syntax](http://projects.edgewall.com/trac/wiki/WikiFormatting), but seeing as we weren’t using anything at all before, it’s a step in the right direction.

![](http://philwilson.org/code/greasemonkey/timeestimatetotaller.png "Screenshot of the Trac time estimate totaller")

By default, Trac doesn’t do any kind of time management, so in a couple of projects we’ve added in a `time_estimate` field to issues and a bit of javascript for totalling up time estimates for milestones (in fact, it’s [this Greasemonkey script](http://philwilson.org/code/greasemonkey/timeestimatetotaller.user.js)), which is very handy indeed.

Trac is also useful to us because it generates iCalendar files for project roadmaps and RSS files for just about everything else.

So here’s the problem:

- I have multiple projects
- each project has its own Trac install
- each Trac install has a list of the issues assigned to me and the time estimate for each one
- I can retrieve and aggregate this data in order to find out how busy I’m going to be (we don’t store dates at the moment, but that could be done)

So, what about work I do that isn’t on a project?

- investigating technology X
- mentoring John
- a day at a conference

Where do these days go?

Some suggested solutions:

- We use calendaring software; should I put completed items in there, and then use that as another data source to compile with my Trac data?
- should we use “proper” project management software (OpenWorkbench, Basecamp), dropping the Trac time\_estimate field? 
    - if so, how do we keep the PM software and our Trac issue list in sync?
- should we switch to a mega-simple approach such as [Joel Spolsky’s Painless Software Schedules](http://www.joelonsoftware.com/articles/fog0000000245.html) using Excel?

At the moment I don’t really know what to do. I suspect that we should use something which imports Trac milestones and the corresponding issues and use that tool to schedule the tasks. This would also give us the option to add in custom, one-off tasks like the ones listed above. I suspect also, that we should do as Joel does and ignore dependencies and let the developers actually sort that out.

In fact, the more I think about it, the more I think that we should get the latest version of [Jakarta POI](http://jakarta.apache.org/poi/) and wire up Excel to Trac to keep track of all. It’s got to be the easiest solution, hasn’t it?

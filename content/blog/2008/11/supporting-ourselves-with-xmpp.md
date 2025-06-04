---
title: "Supporting ourselves with XMPP"
slug: supporting-ourselves-with-xmpp
date: 2008-11-20 12:57:51
taxonomies:
  tags:
    - development
    - tools
    - hungrybot
    - icalendar
    - rt
    - xmpp
  collections:
    - university of bath
extra:
  originalLocationName: The University of Bath Web Services Blog
  originalUrl: http://blogs.bath.ac.uk/webservices/2008/11/20/supporting-ourselves-with-xmpp/
---
Our team is the first-line support for the University's web needs. This means we get a lot of diverse requests landing in our bug tracker, [RT](http://bestpractical.com/rt/), ever day. To help us share the load, we each deal with the support queue on rotating basis, [as you can see in our schedule](http://wiki.bath.ac.uk/display/bucswebdev/Support+schedule). We use the wiki rather than the University calendaring system just because it's quicker and easier to set up, enter events and edit them.

However, using the wiki means that there aren't any alarms or reminders.

So I took a few hours the other day and built a new module for [our open-source Hungrybot](http://wiki.bath.ac.uk/display/bucswebdev/Hungrybot) which does the reminding.

The wiki calendar has an [iCalendar](http://en.wikipedia.org/wiki/Icalendar) export, so every two hours or so Hungrybot looks at that, works out who is on support today, checks the RSS feed of unassigned tickets and then lets the person on support know about them. In practice, it looks something like this (here you see I've prompted it to tell me about the new tickets):

[![](http://blogs.bath.ac.uk/webservices/files/2008/11/rt.png)](http://blogs.bath.ac.uk/webservices/files/2008/11/rt.png)


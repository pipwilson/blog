+++
title = "Changing Jabber status based on my calendar"
date = "2005-03-18 15:37:00"
slug = "changing-jabber-status-based-on-my-calendar"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
comments_file = "/content/blog/2005/03/2005-03-18-changing-jabber-status-based-on-my-calendar-comments.csv"
+++

[Eileen Brown writes about the new Office Communicator](http://blogs.msdn.com/Eileen_Brown/archive/2005/03/15/396059.aspx):

> you know, its the little things that make such a difference. Like the fact that my status automatically turns to busy – (a blue no entry sign) when my Outlook calendar is marked with a meeting

Bingo! Wow, what a nice feature that really is – especially useful in the workplace, let alone at home. So, how can I emulate it in my IM clients? Let’s start with (what I hope are) some facts:

- my preferred client, [Psi](http://psi.affinix.com/), does not support plug-ins
- although we use Outlook at work, I have a Python script which extracts my Outlook calendar into the [iCalendar](http://www.ietf.org/rfc/rfc2445.txt) (.ics) file format
- Miranda and Exodus, among other popular Jabber clients, support plug-ins
- a third-party (such as a bot) can’t trigger a change in another user’s status

So then. What can be done? For the clients without a plugin architecture, I don’t think there’s anything that can be done (this kind of thing is too niche to become an accepted patch although of course you could build your own if you were a sado-masochist). For the others though, there’s a real chance that this could become quite a useful feature.

I can’t see, by the way, how Office Communitor isn’t going to be massively popular in businesses all around the world.

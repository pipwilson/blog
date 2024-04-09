+++
title = "Presence-driven interruptions"
date = "2006-03-30 12:52:00"
slug = "presence-driven-interruptions"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
+++

As well as only being interrupted at regular, predictable times, I want any interrupt-driven tools (like aggregator and email toaster alerts) to respect my calendar and presence status. In fact, it should be possible to drive my presence status from my calendar.

If my calendar marks me as being in a meeting, or busy in any way at all, then I want my IM status to be changed automatically, and my aggregator and email client to stop popping up. I’ve seen the SharpReader toaster alerts pop-up during other people’s presentations often enough to know how useful this would be.

My instant messenger of choice is [Miranda](http://www.miranda-im.org) for which there is [a simple command line tool for changing your status](http://addons.miranda-im.org/details.php?action=viewfile&id=399).

So what I need is a tool which reads my calendar, finds out when I’m busy or free and modifies my status accordingly (with a useful status message saying when I’ll be back, too). My aggregator and my email client then need to be able to access that status and only provide popups when I’m actually at my computer and free.

The easiest way of doing this for my aggregator is just to build a simple Jabber client into it and to add it to my user roster. This way it will always know when I’m no longer marked as available.

My mail client is Thunderbird, for which there is [a Jabber client](https://addons.mozilla.org/extensions/moreinfo.php?application=thunderbird&id=867) but it only supports Thunderbird 1.0, and there’s no deep integration. Presumably the best option here would be to modify the mail.biff.show\_alert preference in user.js except that I believe changes to this file are only registered when you start Thunderbird, so it’s not really that useful and a more integrated way of supressing notifications would have to be found. Suggestions on a postcard please.

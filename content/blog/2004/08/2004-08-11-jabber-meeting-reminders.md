+++
title = "Jabber meeting reminders"
date = "2004-08-11 11:44:00"
slug = "jabber-meeting-reminders"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
+++

I need a bot, transport whatever, which can query either my exchange server or my running copy of Outlook (via a small desktop app) and then send my meeting notifications via Jabber.

Why is so that a) I don’t have to run Outlook just for my calendar and meeting notifications (which is probably about 70% of my current use for Outlook) and b) it can use my Jabber presence indicator to see whether I’m actually in the meeting or still at my desk since Outlook has no idea, so that I’m I’m still available I’m clearly not in a meeting and c) I sometimes click “dismiss” instead of “snooze” and d) I don’t have to be running Outlook locally to get meeting reminders.

I think the easiest way to do this would be:

- Write a generic reminder bot which stores events per user (via a simple command interface, or uploading iCalendar or vCalendar files like from [EventSherpa](http://www.eventsherpa.com/home/home.html), or pointing at existing online iCal files like from [iCalShare](http://icalshare.com/)) and reminds the user when the event is imminent, uses a configurable timeout system based on user presence to prompt the user to go a meeting
- write a script which runs [Outport](http://outport.sourceforge.net/) every so often and uploads my latest calendar info to the web where my reminder bot can get at it
- Sit back and relax

Obviously it would then be nice if I could publish my calendar info to the web a la [Michael Sippey’s timeline and calendar solution](http://www.sippey.com/timeline/)

The problem there of course is that every time Outport accesses Outlook it prompts to allow it, so I need to find a way of either getting at the data directly without using Outlook’s OLE interface or putting Outport on some kind of whitelist of applications which are allowed access to Outlook’s data.

The situation I’m currently in is that my PDA syncs with Outlook and so when I’m at work they both remind me about meetings. I only need one reminder, thanks. Moving my notifications to Jabber and turning off Outlook alarms would definitely improve my attitude to meetings, as well as allowing the same system to notify me of private events as well as work-related events.

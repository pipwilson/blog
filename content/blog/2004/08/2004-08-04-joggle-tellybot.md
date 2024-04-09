+++
title = "Joggle Tellybot"
date = "2004-08-04 16:04:00"
slug = "joggle-tellybot"
[taxonomies]
tags = ['general']
[extra]
show_comments = "false"
+++

I keep putting off writing about it, but here’s a spare five minutes I prepared earlier.

The Joggle Tellybot is a Jabber transport for letting you know what’s on the terrestrial television stations in the UK.

It runs as a transport on the jabbernet.org server so register for it as you would any other transport (via Service Discovery in Psi, Register with a Service in Exodus). You won’t need a username or password.

You can then send it commands to find out what’s on telly. For example:

- sending the string “now” will return what’s on at this precise moment
- sending a 24-hour time like “18:30” will return what’s on at 6.30 in the evening
- sending just the hour of the day like “18” will return what’s on at 6.00 in the evening
- sending the string “eastenders” will return the next few instances of programmes with “eastenders” in their title with times and dates

It’s reasonably stable and uses data from [bleb.org](http://www.bleb.org//tv/data/listings/).

I’m tempted to add per-user channel listings, but seeing as I only have terrestrial myself I’ll only do it if people actually ask. 🙂

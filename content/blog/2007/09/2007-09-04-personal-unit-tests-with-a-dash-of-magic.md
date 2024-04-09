+++
title = "Personal Unit Tests with a dash of magic"
date = "2007-09-04 22:24:00"
slug = "personal-unit-tests-with-a-dash-of-magic"
[taxonomies]
tags = ['testing','xmpp','xmpp']
[extra]
show_comments = "false"
comments_file = "/content/blog/2007/09/2007-09-04-personal-unit-tests-with-a-dash-of-magic-comments.csv"
+++

I love this idea of [Personal Unit Tests](http://withoutane.com/rants/2007/08/personal-unit-tests).

It’d be easy enough to fill in a piece of paper each day or remember to fill in the wiki page with my details, but I think I can do better than that (read: that’s too easy and dull, and would get me started sooner).

How my thoughts progressed:

- cron a script (maybe even a GUI with wxPython) to popup at the start of each day and ask about the previous day’s tests from a hard-coded list, taking pass/fail answers and saving them to a wiki similar to how I record my daily work
- cron a jabber bot to send me a data form with pass/fail radio buttons for hard-coded tests and save to a wiki page
- cron a jabber bot to send me a data form with pass/fail radio button for hard-coded tests and save to Google Spreadsheets
- cron a jabber bot to read questions from the first column of a Google Spreadsheet, present them to me using a data form, then save the results back to the spreadsheet

Doesn’t that all sound so much more [like Web 3.0](http://www.readwriteweb.com/archives/eric_schmidt_defines_web_30.php)?

So let’s look at some practical issues. Data Forms is [XEP-0004](http://www.xmpp.org/extensions/xep-0004.html) – the last time I looked for supporting clients was 2005 and they were thin on the ground.

The important issue back then was that [according to the spec](http://www.xmpp.org/extensions/xep-0004.html#protocol) `<jabber:x:data>` stanzas can be sent as a child of either an `<iq>` stanza or a `<message>` stanza but only the former was supported in most tools and I needed the latter.

Looking again, apparently Smack [now supports this](http://jabberportal.mray.de/libraries/smack) (and so hopefully Spark, the client based on Smack, should do too – [this page seems to confirm it](http://jabberportal.mray.de/clients/spark)) as does [Gajim](http://trac.gajim.org/wiki/GajimXEPSupport) . Exodus has supported this [since 0.9.0.35](http://mail.jabber.org/pipermail/exodus/2004-November/000443.html). As far as I remember Psi supported the <iq> type in 2005, so I can only hope that two years has been enough to also support <message> data forms.</message></iq>

So it looks like there’s enough client support for this to be feasible. Next post I’ll see about getting some of this running in practice – in the meantime you can play with one of this year’s Summer of Code projects, the [Data Form Designer Suite for XMPP](http://ayena.de/).

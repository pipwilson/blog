+++
title = "Jabber presence for my phone calls"
date = "2004-07-25 23:29:00"
slug = "jabber-presence-for-my-phone-calls"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
+++

I’ve got a Bluetooth-enabled phone, and a Bluetooth-enabled computer. I’m online and I’m using Jabber. Except I’ve set my status to “Do Not Disturb” – when I do, it’s not for fun, there’s a reason, so it’s pretty annoying when my phone then rings or bleeps and vibrates to let me know I’ve got a message. *I don’t care about messages – I’m busy.*

So why can’t my phone know about my current Jabber status automatically? I have a Jabber client on my phone, (I use Agile Messenger) so it can talk the lingo, but what I need is an app on the phone which every now and again asks my PC “what’s your current presence?” and if I’m marked as “Online”, or “Available for chat” just lets calls and messages through as normal but if I’m set to “Do not Disturb” or “Extended Away” automatically moves my phone profile to “Silent” – when I change back to “Online” it should move my profile back to “General” which actually means my phone will ring.

I have no idea if this kind of thing is even possible, although it sounds as though it should be.

Like [Russ](http://www.russellbeattie.com/notebook), [Jim](http://feetup.org/blog) and [Matt](http://postneo.com) I’m on the Nokia’s Amaretto test program for Python on Series 60 phones (which, btw, has been very very easy to develop in – much, **much** easier than the hellish Symbian C++ API), but I’ve not tried anything this ambitious yet mainly due to a lack of time.

Poking around on the web a bit, I’m unsurprised to see I’m not the first person to have thought of at least this *type* of thing. [SmartProfiles](http://www.symbianware.com/product.php?id=sprofiles60&pl=n6600) is an app which <q cite="http://www.symbianware.com/product.php?id=sprofiles60&pl=n6600">allows automatic profiles switching according to your schedule or calendar</q>, which is at least a start (it shows it can be done, at least), although it costs 9 euros. Related, there’s also the [SMS Assistant](http://www.vzavenue.net/~eerola/tuomas/download.html) which <q cite="http://www.vzavenue.net/~eerola/tuomas/download.html">sends your predefined message automatically to people calling you or sending messages to you</q> and is free – turning something like this on automatically might be nice.

Logging on to [\#mobitopia](irc://irc.freenode.net/mobitopia), I got a suggestion to go and look at how [Bemused](http://bemused.sourceforge.net/) works, a C++ app for controlling Winamp via Bluetooth, and I will, but I’d much rather use Python for it. For a starters it’d just be easier to write!

Really none of this is new though. [Jim’s talked about it before](http://www.mobitopia.com/20030325.html#153511) and back in March 2003 [MobileEntropy talked about software literally driven by proximity detection](http://www.mobileentropy.com/archives/000197.html):

> when I arrive back at the flat, iTunes starts playing again. When I leave again, it pauses playback until I return.

There’s a good [article about mobile Jabber clients and presence on mobilewhack](http://www.mobilewhack.com/messaging/im/jabber/agilemessenger__jabber__presence__and_you.html) which says:

> Would I like it if Agile or other Jabber clients could automatically set me Not Available if I was presently scheduled to be in a meeting at that time in my Calendar? Of course!

Do you know that hadn’t even occurred to me? It’s easy enough to scan (for example) your Outlook calendar which you could then pass to an app, but the problem is in getting that to auto-set your presence as away in your desktop client – it would likely mean client hacking, which is a world of pain – especially if you’re using a closed client! Alternately it would be very easy to send a message to your Jabber client when you’ve got a meeting, which would prompt you to set your presence as away, which your phone would then pick up on. That sounds like too many steps to me, but it’s the best I can think of.

Anyway, that’s plenty of food for thought. Now all I need is some running code….

<ins datetime="2004-07-26T09:59:36Z"></ins>

Of course, I’m a dumbass – you wouldn’t need to hack a client, just run a bot which was subscribed to your presence; that bot would get notified whenever your presenced changed and could trigger a message to your phone. Bingo.

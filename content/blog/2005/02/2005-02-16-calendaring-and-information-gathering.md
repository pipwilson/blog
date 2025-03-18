+++
title = "Calendaring and information gathering"
date = "2005-02-16 12:57:00"
slug = "calendaring-and-information-gathering"

[taxonomies]
tags = [ "foaf", "hula", "caldav", "dashboard",]

[extra]
show_comments = "false"
comments_file = "/content/blog/2005/02/2005-02-16-calendaring-and-information-gathering-comments.csv"

+++

Just some stream of consciousness:

The [Hula Server](http://hula-project.org/index.php/Hula_Server) [was announced](http://www.nat.org/2005/february/#15-February-2005) the other day. <q cite="http://hula-project.org/index.php/Hula_Server">Hula is a calendar and mail server.</q>

They’re planning on using [CalDAV](http://ietfreport.isoc.org/idref/draft-dusseault-caldav/) as the backend for the calendaring system, which is a nice idea, but probably not realistic. I don’t think I know of any WebDAV-enabled servers I can use, and I certainly wouldn’t install it on my own server. I can understand why they’d want to do it. There is no free decent alternative to Exchange etc. on Linux (I’ve posted about this [a few times](http://www.google.com/search?ie=utf-8&oe=utf-8&q=exchange+&btng=Search&domains=philwilson.org&sitesearch=philwilson.org) before).

Apparently their original idea had been a whole groupware-scale “solution”, but fortunately [jwz put the kybosh on that](http://www.livejournal.com/users/jwz/444651.html) (that link is worth reading regardless – it’s great content on how to make software that people like, and want).

I’m not really sure why a mail server needs a mail client in it really. Surely if you just make sure that Thunderbird, KMail and Evolution can use it you’re fine and don’t have to put the early effort in to make the web interface, better doing it somewhere else?

The calendar stuff is interesting. I have my own half-solution based on a hacked version of my [Tellybot](http://philwilson.org/blog/2004/08/joggle-tellybot.html), but it’s not really terribly good (I have a Python script which outputs my Outlook calendar [courtesy of Aaron Johnson](http://cephas.net/blog/2004/09/17/sending_your_outlook_calendar_using_python.html) but it’s not hooked up to anything) – it sends me reminders, but that’s about it. I’m thinking about having it output .ics files and letting PHPiCalendar pick those up and display them as well as emitting RSS files. [RSSCalendar.com](http://www.rsscalendar.com) is another possibility, but doesn’t have an API, so as much as I like it (in stark contrast to my intial hating of it), I wouldn’t use it for my own stuff (I would however recommend it if my family wanted to do stuff, and then pull down the .ics files myself and put them into my own calendaring stuff).

Along with all this groupware-style stuff I clump in tools like [Dashboard](http://www.nat.org/dashboard/) so that in some interface I can type in someone’s name and have all sorts of info about them returned to me, like in this screenshot (click for bigger):
[![](http://photos4.flickr.com/4896542_abba6c9cec_m.jpg)](http://photos4.flickr.com/4896542_abba6c9cec_o.png) which I should also point out is a copy of [this image](http://www.nat.org/dashboard/mail.png) from the Dashbaord website, reproduced without permission).

At the moment I’m doing some preliminary work on a sort of personal portal like [the kind mentioned by barb dwybad](http://www.geeked.org/archives/thoughts-on-the-digital-lifestyle-aggregator/) that includes my flickr photos, my books, my del.icio.us bookmarks, my music and my IM history (parsed from the Psi and MS Messenger history files), which is just a PHP page using Magpie (because all those things are available in RSS format) but I can’t see a reason why this could be extended to work for anyone who had those details (i.e. those URLs) specified in a FOAF file. Well, actually I can, and that’s that I can’t think of a way for machines to recognise that a URL is a link to an RSS feed of bookmarks rather than anything else, other than by detecting the “del.icio.us” in the URL, which is incredibly lame since I thought RDF was supposed to free us from that kind of thing.

Of course, a lot of people don’t have FOAF files, or even if they do, don’t link to all their other feeds and so on (we can’t all be [Leigh Dodds](http://www.ldodds.com/blog/archives/000129.html)), so how acceptable is it to create those files for people (whether they’re then published privately or publically)? For example: [Jason Kottke](http://kottke.org/) – who has a [has a weblog](http://kottke.org/), [listens to music](http://audioscrobbler.com/user/jkottke), [takes photos](http://flickr.com/photos/jkottke), [reads books](http://allconsuming.net/weblog.cgi?url=http://kottke.org) and so on.

So, in summary: Hula looks nice, but I don’t think it will take off; Dashboard is great, but mainly unavailable; FOAF can provide us with Dashboard-like features; calendering is hard; writing FOAF files about people is rude.

I thank you 🙂
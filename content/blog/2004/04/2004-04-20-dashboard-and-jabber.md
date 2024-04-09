+++
title = "Dashboard and Jabber"
date = "2004-04-20 11:00:00"
slug = "dashboard-and-jabber"
[taxonomies]
tags = ['general']
[extra]
show_comments = "false"
+++

> In the Dashboard architecture, cluepackets are used to send messages between front and back-end applications. Now what if there was a way to tunnel cluepackets through Jabber? Has someone explored this already?

It would be trivial to embed a jabber client core into an application which sends Cluepackets to a transport which then does all the work.

But of course your frontend needs to actually be able to send the cluepackets in the first place, which for the majority of Windows applications, just ain’t gonna happen.

I actually tried writing an Jabber cluepacketer (for want of a better word) a couple of months ago, but I didn’t have access to a GNOME box and didn’t find [the cluepacket doc that Leigh links to](http://anoncvs.gnome.gr.jp/viewcvs.cgi/dashboard/doc/cluepacket.txt?view=markup) (which is very useful – I’d been trying to read the C source to see what the structure should look like! Looking around now I suddenly find things like [a useful wiki page about CluePackets](http://www.pipetree.com/space/CluePacket) but I **swear** it wasn’t there before! 🙂 ).

DJ Adams (author of [Programming Jabber](http://www.oreilly.com/catalog/jabber/) and any number of introductory Jabber articles) [hints](http://www.pipetree.com/qmacro/2003/07/11#dashboard) that using the Publish-Subscribe mechanism of Jabber ([JEP-0060](http://www.jabber.org/jeps/jep-0060.html) for those who care) would be the most interesting thing to do, but quite frankly, it also looks like it would be the hardest thing to do. 🙂

Looking around, there are already some interesting frontends, including [one for Firefox/Mozilla](http://6v8.gamboni.org/article.php?id_article=13) (there are some [good links to other Dashboard docs on the same site](http://6v8.gamboni.org/rubrique.php?id_rubrique=4)).

Maybe I should reinstall my linux box at home, follow the [Getting dashboard Running](http://www.pipetree.com/space/GettingStartedWithDashboard) instructions and see how it goes. Is it worth it?

<ins datetime="2004-04-20T12:09:31Z"></ins>

The Dashboard lxr is currently offline so instead [the docs are available on this URL](http://cvs.gnome.org/viewcvs/dashboard/doc/), which I expect to become redundant as soon as the Dashboard lxr comes back online. 🙂

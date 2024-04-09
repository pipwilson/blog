+++
title = "More on Jabber non-adoption"
date = "2005-03-13 23:24:00"
slug = "more-on-jabber-non-adoption"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
+++

Jabber frustrates me a great deal, mainly because I think it should be doing a lot better and acting more coherently than it currently does. The decentralised nature of the system itself seems to have persisted into development efforts (i.e. there are [eight different open-source Jabber server implementations, and another six commercial implementations](http://www.jabber.org/software/servers.shtml); that’s fourteen different server implementations. You can tell it’s too many because in the “Feature Score” column on that list, not one of them scores 100% and the highest score for an open source server is 79%).

The clients, [as I’ve discussed before](http://philwilson.org/blog/2005/02/moving-to-jabber-in-workplace.html), are in an even worse state.

The\_Tick discusses some of these issues and more in his latest blog post “[Some of the reasons that jabber isn’t where it should be](http://brok3n.org/archives/000044.html)“.

My problem, of course, is that I’ve got a big mouth, and not much to back it up with (my main dev. language is Java, and all of the Java clients are comparatively immature). So, OK, what can a frustrated developer do to help things along? First thing – don’t start a new client. Next, look at the state of the current clients and see what you can do there. So OK, let’s look at [jabber.org’s list of recommended clients for Windows](http://www.jabber.org/software/clients.shtml):

- [Exodus](http://exodus.jabberstudio.org/) – open source, Delphi
- [Gush](http://2entwine.com/) – closed source
- [JAJC](http://jajc.ksn.ru/) – closed source, possibly dead
- [Pandion](http://www.pandion.be/), open source, nasty disconnection bug
- [Psi](http://psi.affinix.com/) – open source, C++, QT
- [Trillian](http://www.ceruleanstudios.com/), closed source

So OK, realistically you’re now down to contributing to Exodus and Psi (or fixing Pandion’s disconnection bug, which doesn’t look like an easy task).

Until recently, even looking at the source for Psi was pointless because it depends on [QT](http://www.trolltech.com/products/qt/ " Qt is a complete C++ application development framework."), which hasn’t been available (for free) on Windows. Trolltech recently announced that [starting with QT4, QT will be available for open-source development on Windows for free](http://www.trolltech.com/newsroom/announcements/00000192.html) ([see what the Psi forums had to say](http://psi.affinix.com/forums/index.php?act=ST&f=1&t=2491)). This is great news, because Psi is my favourite client; but on the other hand Psi used to advertise itself as the Jabber client for power users (they don’t do this any more), and whilst they’re now doing massive work on usability and the development community is very active (they have leadership and focus, I think the Psi community is very impressive) I think it’s likely to stay fairly focussed on power users.

Personally, I’ve always found Exodus pretty hard going, but it \*is\* in Delphi, which I can write, and it looks as though it should pretty simple to make a number of improvements to the UI without too much hard work, but I don’t have a copy of Delphi 7, which it appears to be written in, and which no longer seems to be available from Borland. Which would be a problem.

So, given that I’m lazy, this leaves me doing one of the following:

1. buying (or, er, “obtaining”) Delphi and hacking on Exodus
2. searching for another client with equally good JEP support to hack on
3. spending my life unconstructively complaining on my blog, frustrating all and sundry

but seeing as I hate both whiners and hypocrites I’ll aim for the first 🙂

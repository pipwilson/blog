+++
title = "Tracking comments"
date = "2004-12-26 01:39:00"
slug = "tracking-comments"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
comments_file = "/content/blog/2004/12/2004-12-26-tracking-comments-comments.csv"
+++

Tracking conversations on other weblogs is a perennial problem. Some people swear by [Feedster](http://www.feedster.com), others by [Technorati](http://www.technorati.com/), maybe you could track incoming links to your own site where new people have clicked through from a comment you left on another site (to give some idea of activity). Some weblogs (notably [WordPress](http://wordpress.org/)) provide a per-post RSS feed, but that can be annoying if your aggregator displays your feed list and you watch it spiral out of control and have to spend time managing it. Other weblogs like Movable Type (and, I guess, Typepad) let you subscribe to comments on posts via email. And there’s trackback, which is even usable, to an extent.

Needless to say, all of these methods are rubbish.

Until Firefox 1.0 I was using the Bookmark schedule/notify feature to keep track of posts I’d commented on – I’d make a comment, bookmark the post and set a daily schedule for checking if it had changed, but [it was backed out for 1.0](https://bugzilla.mozilla.org/show_bug.cgi?id=253478) and is currently on [the “todo” list for post 1.0](http://wiki.mozilla.org/index.php/Firefox:Branch_Landing). But obviously I now need a new method.

There are [quite](http://weblogs.asp.net/kclemson/archive/2004/03/12/88935.aspx "tracking with Newsgator and Outlook 2003") [a](http://davextreme.com/2004/03/typekey_and_the "TypeKey and the Benefits of Centralization") [few](http://www.ideaspace.net/users/wkearney/archives/entries/000391.html "Weaving a rich comment path") other ideas about how comment tracking could work, and out of these there are a few practical ideas and suggestions.

First of all [Blogger](http://www.blogger.com), [Typekey](https://www.typekey.com/) and [LJ](http://www.livejournal.com/) (and other gated communities) should let you track comments you’ve made on those systems in the same way that [Flickr](http://www.flickr.com/) lets you track comments you’ve made on other people’s photos. If you haven’t used Flickr yet, the feature looks like this:

![A screenshot of how 'my comments' work in Flickr](/images/flickr-mycomments.png "How 'my comments' work in Flickr")

Of course that still leaves every other system under the sun. At first I thought the solution would be a personal web proxy which stores the contents of textareas when you POST a FORM, but that seems a) pretty heavy implementation-wise and b) isn’t portable – as soon as I move to another PC I’d have to install my proxy again.

[Bill Kearney’s long post musing on the subject](http://www.ideaspace.net/users/wkearney/archives/entries/000391.html) gave me a better idea: Never post directly to the site. Instead use a bookmarklet which pulls out the FORMs on a page and passes them through to a hosted proxy where you can then fill it out etc. etc. (or use a bookmarklet to rewrite the form so that it posts to your proxy with the old POST URL as a hidden INPUT so you can stay on the same page). Then your proxy server can poll the original page for updates and inform you when it changes by whatever means you like: RSS, Email, IM, etc.

I’m aware that there are any number of desktop applications or hosted services which will monitor webpages for changes for you, but the desktop apps are out for reasons of portabiity and all of the hosted ones I know of are commercial.

I don’t think this would be too hard to get going, at least in a rough fashion. Now someone just needs to write it for me 🙂 How about you, [lazyweb](http://www.lazyweb.org)?

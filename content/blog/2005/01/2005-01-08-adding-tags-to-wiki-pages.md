+++
title = "Adding tags to wiki pages"
date = "2005-01-08 23:44:00"
slug = "adding-tags-to-wiki-pages"
[taxonomies]
tags = ['general']
[extra]
show_comments = "false"
+++

You know, it’s interesting that [Jon Udell should talk about adding tags to wiki pages for categorisation](http://weblog.infoworld.com/udell/2005/01/06.html) when just a few days before his post [Gareth](http://www.xurble.org) and I were talking about exactly the same thing.

The problem with the existing systems, and the examples Jon quotes is that you not only need to know **what** you’re doing, you have to know **how** to do it.

Jon says that [c2](http://c2.com/cgi/wiki) and [SocialText](http://www.socialtext.net) actually do it already, is by using “category” as a keyword, so at the end of a doc you add “categoryTAG”, then you can list all pages with that tag by performing a search on “categoryTAG”. Except that’s not *really* true. It actually is what it sounds like, a relatively artificially imposed flat classification, with no true backinking or relationships where the “tagging” can get lost in the middle of any page. The success of this system is almost entirely down to good stewardship by the people who run the wikis which use it.

[Trac](http://www.edgewall.com/trac/) also lets you do this with the rather arcane `[[TagIt(wiki, folksonomy)]]`. Well wow, I had trouble explaining to some people how using asterices around a word made it bold. Good luck explaning that one.

So what would be better? Well, given a web-based wiki where you have to explicity move between “read” and “edit” modes, what’s wrong with asking the user to add some tags when you first create the page and listing them alongside it? Basically, I think what I’d aiming for is “copy Flickr” (just like everything else that’s good on the web these days), where you can edit the tags assigned to a photo without having to move into editing all of its other properties.

Keeping tags as a property of the page, rather than an intrinsic part would allow you to start actually doing work with them such as page relationship analysis and subject categorisation, instead of trying to manually maintain lists of pages which contain your magic linking words, which is what c2 and SocialText do.

I think tagging pages is a natural progression for wikis, and a damned good idea, but that it needs to actually be added to the underlying wiki system, not awkwardly shoe-horned in by the users.

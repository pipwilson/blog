+++
title = "Square-bracket hell"
date = "2007-02-16 13:52:00"
slug = "square-bracket-hell"
[taxonomies]
tags = ['usability','wiki','wiki']
[extra]
show_comments = "true"
+++

There is little wiki syntax interoperability. In fact, it’s [so bad](http://www.google.co.uk/search?q=wiki%20conversion) that there are [dedicated](http://confluence.atlassian.com/display/CONFEXT/Universal+Wiki+Converter) [libraries](http://moinmoin.wikiwikiweb.de/JspWikiConverter) for converting between almost every wiki system, the best probably being a Perl library called [HTML::WikiConverter](http://search.cpan.org/~diberri/HTML-WikiConverter-0.61/lib/HTML/WikiConverter.pm) which also has [an online demo](http://diberri.dyndns.org/wikipedia/html2wiki/) and can covert HTML to sixteen different syntaxes. Sixteen!

There have been several efforts over the years to come up with a common syntax, and they’ve all petered out. The latest is called [Creole](http://www.wikicreole.org/) and at their last workshop [Ward Cunningham](http://en.wikipedia.org/wiki/Ward_Cunningham) was on the Panel. In their own words:

> Creole is a common wiki markup language to be used across different Wikis. It’s not replacing existing markup but instead enabling wiki users to transfer content seamlessly across wikis, and for novice users to contribute more easily.

They also have a reasonably impressive [list of wiki engines with plugins for supporting this interchange syntax](http://www.wikicreole.org/wiki/Engines)

You can see the wiki syntax they propose in [the latest version of the spec](http://www.wikicreole.org/wiki/Creole0.4) (0.4 at the time of writing).

It’s not too bad so long as you can read words mixed between five vertical bars \[\[a bit|like this\]\] \[\[and|then\]\] \[\[maybe something|like this\]\]. It’s obviously to maintain the “all formatting is double-character” and to allow people to keep putting things in square brackets. Which of course they do all the time. Or, in the several thousand wiki pages I’ve seen, twice.

At least it doesn’t use [MediaWiki’s markup for italics and bold](http://en.wikipedia.org/wiki/Wikipedia:Cheatsheet). Visual clutter is crap.

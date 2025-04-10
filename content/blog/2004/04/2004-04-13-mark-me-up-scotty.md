+++
title = "Mark me up, Scotty"
date = "2004-04-13 09:49:00"
slug = "mark-me-up-scotty"

[taxonomies]
tags = [ "markup", "textile", "xhtml",]

[extra]
show_comments = "false"
comments_file = "/content/blog/2004/04/2004-04-13-mark-me-up-scotty-comments.csv"

+++

[Simon writes about the legion of non-HTML text markup languages](http://simon.incutio.com/archive/2004/04/13/myriadOfMarkupSystems) and introduces his own (we have enough. please stop now. Maybe writing your own markup language is the new “writing your own wiki“, which was the new “writing your own aggregator” ?)

Anyway, he points out that anyone entering *italic\*italic-bold*bold\* into most engines <q cite="http://simon.incutio.com/archive/2004/04/13/myriadOfMarkupSystems">and that includes Markdown, Textile and \[his\] home-rolled Python solution… will output vadly (sic) formed XHTML</q>.

I’m glad to be able to say that [JTextile](http://philwilson.org/code/jtextile/ "G wrote this") gets it right, producing:

```
<p><em>italic*italic-bold</em>bold*</p>

```

It still doesn’t do normal line-breaks, but hey, nothing’s perfect. 😉

<ins datetime="2004-04-16T13:26:30Z"></ins>

[G](http://xurble.org) fixed the linebreak problem at long last. Stupid StringTokenizer 🙂
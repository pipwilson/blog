+++
title = "Dear Magpie: Don't unescape my content, thanks"
date = "2005-08-14 01:52:00"
slug = "dear-magpie-dont-unescape-my-content-thanks"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
comments_file = "/content/blog/2005/08/2005-08-14-dear-magpie-dont-unescape-my-content-thanks-comments.csv"
+++

[Bug 1212662: Don’t unescape html entities in ‘description’ or ‘content’](http://sourceforge.net/tracker/index.php?func=detail&aid=1212662&group_id=55691&atid=477913)

Currently, when [MagpieRSS](http://magpierss.sourceforge.net/) (otherwise marvellous general-purpose feed parser) encounters escaped content, it unescapes it, thus turning hard fought-for “&amp;lt;”s into “&lt;“s.

Obviously this makes it really hard to read other geek bloggers who post code samples which use pointy brackets. In fact, it makes it a complete pain. I’ve looked at the source, but I’m pretty much a PHP-lamer and can’t see where this unescaping is going on – the file is [available through ViewCVS for you to look at](http://cvs.sourceforge.net/viewcvs.py/magpierss/magpierss/rss_parse.inc?rev=1.31&view=auto) so you can tell me what to change to fix this.

I look forward to seeing what it makes of this post 🙂

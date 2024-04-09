+++
title = "Syndirella with Atom and a question about comments"
date = "2004-08-19 10:17:00"
slug = "syndirella-with-atom-and-a-question-about-comments"
[taxonomies]
tags = ['general']
[extra]
show_comments = "false"
comments_file = "/content/blog/2004/08/2004-08-19-syndirella-with-atom-and-a-question-about-comments-comments.csv"
+++

For a bit of fun the other day I sat down and added [Atom](http://atomenabled.org/) support to Syndirella using [the Atom.NET library](http://atomnet.sourceforge.net/). This was just as much a learning experience for me, since I’ve never used C# before, nor got into the nitty-gritty of writing applications for Atom, despite following all the conversations around it.

Adding basic support turned out to be surprisingly easy, and took me around two hours – someone who already knew C# could probably have done it in half an hour or thereabouts.

What’s caught me out more than anything is how items are supposed to link to their HTML comments page.

RSS 2.0 has an item &lt;comments&gt; subelement of &lt;item&gt; which points to the URL of the comments for a particular item. Easy enough.

One of the [wfw namespace elements](http://wellformedweb.org/news/wfw_namespace_elements) is wfw:commentRSS which <q>contains the URI of the RSS feed for comments on that Item</q> (although Chris Sells’ alluded-to specification appears unreachable, [Roger Benningfield’s explanation is good](http://support.journurl.com/users/admin/index.cfm?mode=article&entry=962)). Again, easy enough. Which brings us, naturally, to Atom’s interpretation.

In Atom, [a comment is an entry (example)](http://www.intertwingly.net/wiki/pie/CommentsAreEntries). I think I’m safe in saying that’s the way it’s going to stay. There is no inherent differences between a comment on a post and the original post itself in an Atom feed (see [the feed for one of Sam Ruby’s posts](http://intertwingly.net/blog/1813.atom) for an example – and hey, whilst we’re looking at that feed, that alternate rel link looks wrong to me – surely it should be href=”/blog/1813″ ?).

The [LinkTagMeaning](http://intertwingly.net/wiki/pie/LinkTagMeaning) page on [the Atom wiki](http://intertwingly.net/wiki/pie/) shows that the link tag is being slightly overused. In fact, looking (when I originally wrote this post!), there’s discussion about it even now on [the Atom mailing list](http://www.imc.org/atom-syntax/index.html). In the case of comments, there’s a proposed rel value of “comments” which points to <q cite="http://intertwingly.net/wiki/pie/LinkTagMeaning">\[a\]n Atom Feed for all comments on just this entry</q>, which seems like a drop-in replacement for wfw:commentRss. But is there where it should be? And if, as the recent discussion seemed to indicate, it won’t be, then were will it go? And what should people who want to do this kind of thing now do? Just forge on ahead? Wait? How long? I don’t know why, but for a project which started so long ago, it seems as though there’s a lot of stuff I still can’t do in Atom that I can in RSS.

+++
title = "RSS Reading Habits and Aggregator Design"
date = "2004-10-28 13:23:00"
slug = "rss-reading-habits-and-aggregator-design"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
+++

I’ve noticed that my RSS reading habits are markedly different to those of the other people I know who also use aggregators. Using either desktop aggregators like [FeedThing](http://feedthing.sourceforge.net/) or [SharpReader](http://www.sharpreader.net/) or a web-based aggregator like [Bloglines](http://www.bloglines.com/) they all read feeds in the same way:

1. load aggregator
2. click on first feed with unread items
3. read new items in feed, following links if full-text is not provided, until all items are marked as read
4. click on next feed with unread items
5. goto 2 until no more unread items

I use [JabRSS](http://cmeerw.org/dev/node/view/7) as my aggregator, and as a result I read feeds differently. Here’s my process (there’s a little extra explanation for those who haven’t used JabRSS):

1. load aggregator, a window appears with a title, link and summary of all the unread items for a feed, the popup has a “next” button at the bottom for navigating to the next feed with unread items
2. read title and summary of all items, if interested in an item click link and load item in new tab in [Firefox](http://www.mozilla.org/products/firefox/)
3. click next
4. goto 2 until window is dismissed
5. switch to Firefox and read all items in tabs, closing tabs and [del.icio.us](http://del.icio.us/)-ing as I go until I’ve read all the items

JabRSS has no concept at all of a read item or an unread item, it just gives me the latest links and lets me follow them if I want. This is drastically different to just about every aggregator currently in use (I know that Bloglines now lets you display the feeds which have unread items in them, I imagine there are some desktop aggregators which also allow you to do the same as Bloglines).

Having tried to go back to a desktop aggregator last week I was amazed by a) how much of my time was spent navigating between feeds when I didn’t really care what feed the new item was in b) how little of my screen was actually taken up with reading the content and c) how my concentration was continually broken my incessant context switching as I moved from feed content -&gt; list of unread items -&gt; new item -&gt; full content.

There’s no way this can be the best way of reading new items in your subscribed feeds and it becomes even more noticeable the more feeds you subscribe to. I get, on average, 150 new items in my aggregator **every day**, and all I care about is the content of the ones which may interest me. That means I need to be able to scan fast and then open in my browser. I probably spend less than five minutes a day actually in my aggregator, the rest of the time is reading the content.

Not only do desktop aggregators stop you from scanning quickly (although [SauceReader](http://www.synop.com/Products/SauceReader/)’s Outlook-like auto-preview for new items does actually try to help with this), they also open items in their own bastardised version of a web browser, and on Windows, that built-in browser is 99% of the time going to be an IE ActiveX control. Thanks, but no thanks – I **have** a browser, it has all my tools built into it like bugmenot, popup blockers, del.icio.us and more, and that’s what I want to use **immediately**.

So what am I saying? I’m saying that most of the aggregators I’ve used actually obstruct what the user is trying to do – read the new contents of feeds they’ve subscribed to.

Traditional desktop aggregators do, of course, have benefits. Like search. And, er, filtering, which is automated search. Flagged items. There we go, that’s two. Except when I want to flag an item I’m reading I del.icio.us it with an appropriate tag. Then I actually get to see that “flagged” item on any computer.

And of course desktop aggregators let you go back at any point and look at old items in feeds, even when you’re offline, which can be useful and which JabRSS for instance doesn’t handle very well because in order to scan quickly you **need** a summary and not full-content (which JabRSS can actually give you), so whilst you can use your [Jabber client](http://psi.affinix.com/) ’s history to get the content of short items you’ll need to rely on your browser’s cache for the rest.

Somewhere in between there’s a happy medium. A desktop aggregator which just lists new items with a link which opens in your browser. No list of feeds. No list of read items. No browser window. But with a secret management mode, which lets you perform searches and read old feeds. Is that too much to ask?

+++
title = "Feed on Feeds and dc:subject (again)"
date = "2005-08-15 22:21:00"
slug = "feed-on-feeds-and-dcsubject-again"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
comments_file = "/content/blog/2005/08/2005-08-15-feed-on-feeds-and-dcsubject-again-comments.csv"
+++

Well, after making my last brave post, I realised that FeedOnFeeds natively supports the dc:subject element and stores it in its database already. Hurray.

Or not, really. Because what it actually supports is a single dc:subject per feed item, which it just drops straight into a text field. If you have multiple subjects per item, say:

```
<dc:subject>Semantic Web</dc:subject>
<dc:subject>Programming</dc:subject>
```

Then what you end up with in your database is this:

```
Semantic WebProgramming
```

Which isn’t terribly useful at all. So, I can change the existing functionality to iterate and insert spaces and stuff, but what do I do with the existing 5,500 items in my database which already have tags associated with them? (crikey, that’ll teach me to subscribe [my del.icio.us inbox](http://del.icio.us/inbox/pip)) Clearly, I could write a script which looks for capital letters in the middle of words and inserts a space before it, but then you fall into the problem where things are tagged with acronyms like FOAF (which I still have trouble pronouncing in conversation, by the way), and plain ol’ typos.

“Bah” I say.

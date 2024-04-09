+++
title = "Personal web proxy: MindRetrieve"
date = "2005-04-24 18:12:00"
slug = "personal-web-proxy-mindretrieve"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
comments_file = "/content/blog/2005/04/2005-04-24-personal-web-proxy-mindretrieve-comments.csv"
+++

Since Jim stuck it in [his del.icio.us bookmarks](http://del.icio.us/JimH "Jim Hughes' bookmarks") a few weeks ago I’ve been using [MindRetrieve](http://www.mindretrieve.net/ "MindRetrieve - Search your personal web") both at home and at work to proxy my web browsing, and I really can’t fault it.

As you browse it caches and indexes local copies of webpages so that you can search through them later, and even view the cached version if you’re offline. It strips the pages of all HTML except for simple paragrpahs, presumably for easier search indexing, which means no CSS o images, so the cached version is as plain as can be, but this is a fair exchange for disk space and proxy speed. It’s written in Python and uses (I think) PyLucene for the indexing, and is, as a result, very quick. Additionally, since it just uses a query parameter on the search page, it’s very easy and quick to set up a Firefox keyword so you can search from the address bar: I just type “find dvd” and up come all the pages I’ve viewed with “DVD” in them, ranked by relevance.

I’ve used a fair few personal proxies in the last few years, ranging from the very simple to very complex, but MindRetrieve really hits the sweet spot for me. It’s easy to install, set up and use. The proxying is so fast that you forget your’re using a proxy at all, and the searches are fast and the results are relevant. It has the added benefit that the admin UI and search results are all editable because they’re plain HTML and CSS, so you can make them look however you want, even to the extend of adding JavaScript to add in linkbacks from del.icio.us and so on if you like.

Simple and does the job, I don’t think praise gets much higher than that 🙂

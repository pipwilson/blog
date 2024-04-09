+++
title = "Using Places in Firefox for exporting browser history"
date = "2006-02-19 00:09:00"
slug = "using-places-in-firefox-for-exporting-browser-history"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
+++

Ages ago I wrote [a post bringing light to a bookmarklet attached to a bug in Mozilla’s Bugzilla which allows you to export your Firefox history to a text file](http://philwilson.org/blog/2005/01/how-to-export-firefoxs-history-to-text.html "How to export Firefox's history to a text file"). According to Google Analytics, it’s far and away my most popular post, but the code doesn’t work in Firefox 1.5.

People have been commenting on the post and sending me mail asking for an updated version which works in 1.5, which I keep meaning to look at doing, but the new [Places](http://wiki.mozilla.org/Places) bookmarking and [history system](http://wiki.mozilla.org/Browser_History "Places Browser History") based on SQLlite [has just been enabled in the Firefox nightlies](https://bugzilla.mozilla.org/show_bug.cgi?id=327188).

This means not only a new way of storing the data, but new ways of querying it, either via Mozilla like we do at the moment but with [a new API](http://wiki.mozilla.org/Places:History_API) or by a third-party application so long as it can understand SQLlite, and there are plenty of bindings to do this.

So this should mean that Firefox 1.6 has an entirely new backend for history and bookmarks, at which point writing new code to export the history should be very easy, and I’ll do it then (if someone hasn’t already beaten me to it).

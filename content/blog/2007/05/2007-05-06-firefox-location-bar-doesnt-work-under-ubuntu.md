+++
title = "Firefox location bar doesn't work under Ubuntu"
date = "2007-05-06 14:51:00"
slug = "firefox-location-bar-doesnt-work-under-ubuntu"
[taxonomies]
tags = ['firefox','general','usamajility']
[extra]
show_comments = "true"
comments_file = "/content/blog/2007/05/2007-05-06-firefox-location-bar-doesnt-work-under-ubuntu-comments.csv"
+++

Some of the shortcut keys for Firefox on Ubuntu are different to those on Windows. The most pertinent one for me is that the &lt;backspace&gt; key as a shortcut for clicking the “Back” button has been disabled. This is easily fixed in about:config by changing the value of `browser.backspace_action` to 0.

The most annoying however is the one which appears to have no fix, and for which I haven’t yet found a [Bugzilla](http://bugzilla.mozilla.org/) or [Launchpad](https://launchpad.net/ubuntu) entry. In fact I’m not even sure which one it belongs to.

CTRL+SHIFT+arrow doesn’t select chunks of text in the Firefox location bar. It just selects all of it. I’m very used to chopping and changing URLs by hitting ALT+D followed by some keyboard selection goodness. No more apparently. Want to take off the “/blog” from a URL? That’s ALT+D and backspace five times. Hope you can count really quickly because sometimes my fingers move much faster than the location bar updates.

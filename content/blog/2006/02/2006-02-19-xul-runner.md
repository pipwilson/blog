+++
title = "XUL Runner"
date = "2006-02-19 00:33:00"
slug = "xul-runner"
[taxonomies]
tags = ['general']
[extra]
show_comments = "false"
+++

I’ve been interested in XUL for a long time. Or, [since 2002 at least](http://www.google.co.uk/search?q=site:philwilson.org+xul).

In fact, although I’d forgotten all about it, many years ago I put together [an alternate homepage for this blog](http://philwilson.org/index.xul) which used XUL so that you could navigate information which I didn’t want to have to manage or reproduce in my main HTML page. It doesn’t really work any more, but it shouldn’t be hard to fix, if I had the inclination.

What really brings this up is the recent [stable developer preview of XULRunner](http://developer.mozilla.org/en/docs/XULRunner_1.8.0.1_Release_Notes). [XULRunner](http://developer.mozilla.org/en/docs/XULRunner) has been promised for years, and it’s really good to see it reach maturity as I’d really given up hope and stopped following its progress (or that of a <abbr title="Gecko Runtime Environment">GRE</abbr>) a long time ago. You can check out [what XULRunner provides](http://developer.mozilla.org/en/docs/XULRunner:What_XULRunner_Provides) and see that it gives you full programmatic control over almost anything you might want to do that Firefox can already do (like rendering SVG; displaying options windows and saving those options; open, edit and save files, etc.) and that it will allow you to embed these features into your existing applications using [JavaXPCOM](http://developer.mozilla.org/en/docs/JavaXPCOM) (embedding bindings for Python, ActiveX, GTK and NSView are under way but not yet complete).

XULRunner is an important piece of software as it allows you to install multiple XUL-based applications (say, Firefox and Thunderbird) but only one core XUL platform, thus reducing the size of each of the separate installers appropriately. Indeed, [when it reaches 1.9, it will be the default application launcher for Firefox](http://benjamin.smedbergs.us/blog/2006-02-03/xulrunner-1801-is-out/).

Anyone wanting to get started developing with XUL would be best starting with [the tutorial on XUL Planet](http://www.xulplanet.com/tutorials/xultu/) followed by the links on [the XULRunner page on developer.mozilla.org](http://developer.mozilla.org/en/docs/XULRunner). If you didn’t already know, tools like ActiveState’s [Komodo](http://www.activestate.com/Products/Komodo/?mp=1) (a cross-platform IDE) are based on XUL and work extremely well, so there is already precedent for people creating these types of applications, they just don’t get much visibility (yet).

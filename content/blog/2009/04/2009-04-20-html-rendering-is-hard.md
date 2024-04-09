+++
title = "HTML rendering is hard"
date = "2009-04-20 19:19:56"
slug = "html-rendering-is-hard"
[taxonomies]
tags = ['general','wxvenus','wxwidgets']
[extra]
show_comments = "true"
+++

[wxWidgets](http://www.wxwidgets.org/) is a nice, easy-to-use cross platform toolkit for writing desktop applications. It exists for many different languages including [Ruby](http://wxruby.rubyforge.org/) and [Python](http://www.wxpython.org/).

It includes [an HTML renderer](http://docs.wxwidgets.org/2.6/wx_wxhtml.html).

On Windows this uses the IE renderer.   
On OSX it uses the webkit renderer.  
On Linux it uses, er, some code that this guy wrote, y’know? It doesn’t support CSS.

This means that [my desktop aggregator](http://philwilson.org/code/wxvenus/) does not work very well on Linux, which is currently my primary use case.

It’s possible to use [wxMozilla](http://wxmozilla.sourceforge.net/) but that was seemingly abandoned in 2005.

It’s possible to use [wxWebkit](http://wxwebkit.wxcommunity.com/) but [the instructions](http://wxwebkit.wxcommunity.com/index.php?n=Main.BuildInstructions) for that start with “check the source of webkit out of svn” and ends with “the Python bindings don’t work yet”.

[GTK](http://www.gtk.org/) is an easy-to-use toolkit for writing desktop applications. It is nominally cross-platform (but I wouldn’t want to push the matter). It can use [WebKitGtk](http://live.gnome.org/WebKitGtk).

I appear to be at a frustrating fork in the road.

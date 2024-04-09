+++
title = "code.flickr.com, Flickr Uploadr 3.0 and XUL"
date = "2008-04-16 23:34:06"
slug = "codeflickrcom-flickr-uploadr-30-and-xul"
[taxonomies]
tags = ['flickr','general','xul']
[extra]
show_comments = "true"
comments_file = "/content/blog/2008/04/2008-04-16-code-flickr-com-flickr-uploadr-3-0-and-xul-comments.csv"
+++

Flickr have just launched [code.flickr](http://code.flickr.com), <q>Your one-stop shop for information, gossip and discussion with the Flickr developer community</q> which I imagine they want to use to draw together the disparate developer resources from the groups, forums, mailing list and more.

I guess they also want to use it to [hire a new XUL guru](http://flickr.com/jobs/xul_engineer/) because the author of their [new Uploadr](http://flickr.com/tools/uploadr), Rich Crowley, has left and [is now working for OpenDNS](http://rcrowley.org/2008/04/08/starting-at-opendns-today/).

The new Uploadr does seem better than the 2.x version, and has some nice features, but none of them seem hugely critical. Last time I used it, it was unreliable, slightly slow and I read a lot of bad press so I reverted to version 2.x (I’ve just reinstalled v3 and I will give it another go).

But, it’s in XUL. I don’t like XUL. I started writing some crappy XUL applications at the beginning of the century, and it was \*hard\* (it didn’t help that the documentation was both partial and obscure). From what I understand, the situation has improved, but not to the extent where there’s an XUL development ecosystem outside of Mozilla extensions (covered in [season 5 episode 1 of LugRadio](http://www.lugradio.org/episodes/84)).

So although it’s cross-platform, it’s written in C++ and specifically in a reasonably esoteric UI library, thus barring all but the obsessive from committing to the core. It can use extensions, which are written in C++ and/or JavaScript, but this doesn’t address what seems to be a major problem.

If cross-platform was an absolute goal, and Adobe Air is out of the picture, and bearing [my current pastime in mind](http://philwilson.org/blog/2008/03/wxvenus), it would have seemed more appropriate to choose wxWidgets or, for a web company like Flickr, one of the [other language implementations](http://wiki.wxwidgets.org/General_Information) like [wxRuby](http://wxruby.rubyforge.org/wiki/wiki.pl) or [wxPython](http://www.wxpython.org/).

In summary: XUL, bah.

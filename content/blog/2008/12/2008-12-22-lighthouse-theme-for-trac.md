+++
title = "Lighthouse theme for Trac"
date = "2008-12-22 01:45:50"
slug = "lighthouse-theme-for-trac"
[taxonomies]
tags = ['bugtracker','general','greasemonkey','lighthouse','trac','wiki']
[extra]
show_comments = "true"
comments_file = "/content/blog/2008/12/2008-12-22-lighthouse-theme-for-trac-comments.csv"
+++

[Lighthouse](http://www.lighthouseapp.com/) is “beautifully simple issue tracking” (a hosted bugtracker to you and me). It looks great and is pretty much a joy to use.

At work we use [Trac](http://trac.edgewall.org/). Trac is a locally-installed bugtracker (plus wiki and source browser). It looks like a nightmare and there are parts which make the baby Jesus cry<sup>[\[1\]](#tracisgreatreally)</sup>.

With that in mind, [here is a greasemonkey script that makes Trac look like Lighthouse](http://userscripts.org/scripts/show/37887). It turns this:

[![trac](http://philwilson.org/blog/wp-content/uploads/2008/12/trac-thumb.png)](http://philwilson.org/blog/wp-content/uploads/2008/12/trac.png)

into this:

[![lighthouse](http://philwilson.org/blog/wp-content/uploads/2008/12/lighthouse-thumb.png)](http://philwilson.org/blog/wp-content/uploads/2008/12/lighthouse.png)

(ticket titles hidden to protect the innocent!)

So far it has made my Trac usage much more enjoyable. I should point out that this is a tribute to Lighthouse, and I’ve not copied any of their actual CSS or images.

Be warned that it dials userscripts.org once every two weeks to see if there’s an update (since I’m sure there’s loads of things that I’ve missed and will fix as I go). To disable that, just remove lines 11-15 (the call to autoUpdateFromUserscriptsDotOrg).

We also use a couple of other simple Greasemonkey scripts for Trac at work ([most of which are on our wiki here](http://wiki.bath.ac.uk/display/webservices/Trac%20improvements)). A number of them were learning exercises, so YMMV. Caveat installer 🙂

<a name="tracisgreatreally">\[1\]</a> Of course, I do actually like Trac, or we wouldn’t be using it. It’s a great tool with excellent extensbility and plugins, but the UI could definitely do with some love!

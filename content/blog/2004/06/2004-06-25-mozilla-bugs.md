+++
title = "Mozilla bugs"
date = "2004-06-25 13:01:00"
slug = "mozilla-bugs"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
comments_file = "/content/blog/2004/06/2004-06-25-mozilla-bugs-comments.csv"
+++

We recently started using [JSPWiki ](http://www.jspwiki.org)with the [clean template](http://www.jspwiki.org/Wiki.jsp?page=CleanTemplate) at work for our intranet. Sadly there are two major issues all the Firefox and Mozilla users in the office are facing (and there are an awful a lot of them):

- links to locations and files on the internal network don’t work (i.e. file:/// URLs which work fine in IE)
- printing inserts random pagebreaks

Of course, this means that every time you want to follow a link to a directory on the network (e.g. a link to “all the necessary docs are in this folder”) or print a page out, we’re having to copy the URL, load up IE, paste the URL in and then do whatever it was (or, ok, in the first instance just right-click the link, “Copy Link Location” and paste it into the URL bar, which, strangely works – it’s just clicking the link which doesn’t). Very frustrating.

I understand the first bug. It’s a security restriction. There’s probably a way around it, but I have absolutely no idea what that solution might be and neither [bug 163410](http://bugzilla.mozilla.org/show_bug.cgi?id=163410 "JavaScript error: Security Error: Content at http://{xxx} may not load data from {yyy}.") or [bug 238093](http://bugzilla.mozilla.org/show_bug.cgi?id=238093 "JavaScript error: Security Error: Content at file:///{xxx} may not load or link to {yyy}.") give any help (possibly because my bug is “Security Error: Content at http://xxx may not load or link to file:////yyy.” which is not the same as either of those bugs). But the second (which may or may not be [bug 187486](http://bugzilla.mozilla.org/show_bug.cgi?id=187486), which was the closest thing I could find) is completely bizarre. I know I should spend some time making up a minimal test case, and I will, but printing always seems to be the one big thing that IE really does do better than the Gecko browsers.

But anyway, these two are pretty much showstoppers as far as getting anyone else in my office to use Firefox goes – one of the first things they’ll try and use will be the intranet, and \*bam\* it won’t work. If anyone out there has any ideas what I can do about either of these problems, please let me know.

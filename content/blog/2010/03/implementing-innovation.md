---
title: "Implementing innovation"
slug: implementing-innovation
date: 2010-03-17 15:52:28
taxonomies:
  tags:
    - development
    - tools
    - innovation
    - javascript
    - lmf
    - plupload
  collections:
    - university of bath
extra:
  originalLocationName: The University of Bath's Web Services Blog
  originalUrl: http://blogs.bath.ac.uk/webservices/2010/03/17/implementing-innovation/
---
A few weeks ago I got the chance to be the first to make use of [our innovation time](http://blogs.bath.ac.uk/webservices/2010/02/04/space-to-innovate/).

After watching [a demo on hacks.mozilla.org](http://hacks.mozilla.org/2009/12/uploading-files-with-xmlhttprequest/) I wanted to experiment with HTML5 and Firefox's new support for drag and drop of files from your desktop to our web-based file sharing system, the Learning Materials Filestore.

[The documentation they provide](https://developer.mozilla.org/En/DragDrop/DataTransfer) is nowhere near enough to actually implement this, so I was about to give up when I found out that only two days earlier the people who write [TinyMCE](http://tinymce.moxiecode.com/) had released [Plupload](http://www.plupload.com), a library for doing exactly what I wanted!

Plupload gives you a customisable box on a web page where you can add files, click a button and they upload to your service. There are several 'runtimes' you can specify including HTML5, Flash, Google Gears and Silverlight, although HTML5 is the only one which supports native drag and drop (and it's Firefox only at the moment). You can specify a list of fallback runtimes if your browser doesn't support the default, so for example I specified HTML5 as the default and Flash as the fallback so that the Plupload box would still appear in IE.

I had to write a new uploading backend for our application, but Plupload comes bundled with sample PHP code that works out of the box, and it was quite straightforward to do, so two days later I had this:

[_Click here to view the embedded video._](http://blogs.bath.ac.uk/webservices/2010/03/17/implementing-innovation/)

I've had to manually hit F5 after each of the uploads, hence the delay in actually seeing the files appear, but it's still pretty quick! This is a big improvement over using multiple file-picker dialogs and having a limit on how files you can upload at once.

This has been a nice opportunity to use a new library, using brand-new browser features, without having to worry about the requirements we have for making changes to a live, deployed service (since it's a personal version) and having the opportunity to see how we can innovate in a relatively old application to improve the existing feature set without needing to make significant changes.

To help us implement the rules set down [by Andy in his blog post](http://blogs.bath.ac.uk/webservices/2010/02/04/space-to-innovate), we're adding our ideas to our bug tracker, Jira, and an idea needs [at least two votes](http://confluence.atlassian.com/display/JIRA/Watching+and+Voting+on+an+Issue) before it can be started. We have a couple of dozen in there, and quite a few have picked up some votes, so here's hoping for the next innovation project!

[![](http://api.tweetmeme.com/imagebutton.gif?url=http%3A%2F%2Fblogs.bath.ac.uk%2Fwebservices%2F2010%2F03%2F17%2Fimplementing-innovation%2F)](http://api.tweetmeme.com/share?url=http%3A%2F%2Fblogs.bath.ac.uk%2Fwebservices%2F2010%2F03%2F17%2Fimplementing-innovation%2F)


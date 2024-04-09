+++
title = "Personal desktop wiki for Windows"
date = "2005-01-20 23:15:00"
slug = "personal-desktop-wiki-for-windows"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
+++

A number of small applications I’m working on have all had their release dates unceremoniously pushed back due to my discovery of [Wikidpad](http://www.jhorman.org/wikidPad/ "wikidPad is a Wiki-like notebook for storing your thoughts, ideas, todo lists, contacts, or anything else you can think of to write down.").

[WikidPad](http://www.jhorman.org/wikidPad/) is a desktop wiki written in [wxPython](http://www.wxpython.org); and it’s great. <del>You can [download it](http://www.jhorman.org/wikidPad/ "download link in the top right") and use it for free for 30 days, but it only costs $12 (that’s about £6 in real money), and is well worth it.</del> <ins>WikidPad is now open source, and costs nothing. It has [a Trac homepage on wikidpad.python-hosting.com](http://wikidpad.python-hosting.com/) and is actively maintained by Michael Butscher.</ins>

After a few days of using it, it was good enough for me to want to write my own, but with some of the behaviour changed slightly. After a few more days of using it I realised that it would takes months of hard graft to create anything of the standard that WikidPad sets, it’s really that good.

Apart from all the instant obvious benefits of having a personal wiki that’s just on your desktop, no server needed, it has some great extra features: it can export single pages, or the entire wiki to HTML; there’s no “edit” mode, you just type in the main window and it auto-saves your content; it saves its content in plain text files so you can modify them with any tool and best of all it’s really customisable.

The regexes for styling text (such as headings, italics, bold etc) are all editable, so you can change them to match your favourite style – for example I changed the headings to match the JSPWiki syntax because that’s what I’m used to using at work.

It has a list of public hooks so that on events like application startup, creation of a new page, saving of a page and so on, you can execute your own Python commands (it comes shipped with commented out CVS commands at the appropriate hooks, which would be very useful).

In addition it has a public API so that you can write plugins which can directly manipulate the application itself. You could probably even get hold of the parent window and create your own wxWidgets dialogs.

It also supports a kind of tagging for pages, whereby you can add something like <smp>\[work=true\]</smp> to a page and it will then be listed under the tag “work”. This is slightly cumbersome at the moment (really you just want to add a list of space or comma separated values), but **might** be possible to change by editing the regexes.

As soon as I realised it was so extensible my mind took off in all kinds of directions – how about enabling <del>rendezvous</del><ins>[zeroconf](http://developer.apple.com/macosx/rendezvous/)</ins> on it, for example, and using it in an office? Or instead of using CVS as a filestore, just use simple FTP commands. Or hook it up to the del.icio.us API for quick access to your bookmarks, or your favourite blogging tool so that you can post directly. In fact, JSPWiki also stores its files in plain text, so there’s the possibility of making WikidPad a desktop editor for JSPWiki, but one that you could carry around with you (hideous versioning problems aside). Just about anything’s possible, and as it allows you to embed (and evaluate) Python code directly on any page, you can automate an awful lot of functions; for example I can now write up my meeting minutes then hit a key combo which converts the page to HTML, posts it to our internal wiki, and mails the URL to the attendees. Brilliant.

So all of this is why I’m behind. Sorry 🙂

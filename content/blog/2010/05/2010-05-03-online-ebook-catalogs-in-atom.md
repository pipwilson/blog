+++
title = "Online ebook catalogs in Atom"
date = "2010-05-03 23:10:24"
slug = "online-ebook-catalogs-in-atom"
[taxonomies]
tags = ['android','atom','epub','general','stanza','syndication']
[extra]
show_comments = "true"
+++

As I recently wrote, I have [a new-found interest in ebooks](http://philwilson.org/blog/2010/03/reading-ebooks) (I also bought four new textbooks [from O’Reilly](http://oreilly.com/ebooks/) using a BOGOF offer to pick up 97 Things Every Programmer Should Know, 97 Things Every Project Manager Should Know, Beautiful Code and The Art of Agile Development).

I mainly read ebooks on [my Android device](http://philwilson.org/blog/2010/03/three-months-with-a-droid), specifically, using [Aldiko](http://www.aldiko.com/).

Aldiko has a built in browser for the [feedbooks.com](http://www.feedbooks.com/) catalog, but also gives you the ability to add your own catalogs. A friend told me that [Calibre](http://calibre-ebook.com/), a popular ebook management programme, has a web interface which one of the other popular Android ebook readers (WordPlayer) could be pointed at in order to add custom catalogs. After a quick trial and a few Google searches, I realised that WordPlayer actually subscribes to an XML file hosted on http://localhost/calibre/stanza

Opening this file shows it to be Atom, where each entry is a small metadata container and the link element is used to reference the actual book and images that represent it, like this:

```

    <link type="application/epub+zip" href="/get/epub/3"/>
    <link rel="x-stanza-cover-image" type="image/jpeg" href="/get/cover/3"/>
    <link rel="x-stanza-cover-image-thumbnail" type="image/jpeg" href="/get/thumb/3"/>

```

Another few searches showed this to be a [draft specification](http://code.google.com/p/openpub/wiki/CatalogSpecDraft) called [openpub](http://code.google.com/p/openpub/). Aldiko supports this, so adding the /stanza URL to a custom catalog works there too! Voila, custom catalogs in Aldiko. Marvellous!

It should only require a tiny bit of work to write code that serves a catalog straight from the filesystem without the overhead of Calibre (which I found to be quite heavyweight). This is what [I have started here](http://github.com/pipwilson/epubserver).

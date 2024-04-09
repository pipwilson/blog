+++
title = "Eclipse and SWT"
date = "2003-08-29 12:59:00"
slug = "eclipse-and-swt"
[taxonomies]
tags = ['general']
[extra]
show_comments = "false"
comments_file = "/content/blog/2003/08/2003-08-29-eclipse-and-swt-comments.csv"
+++

Despite my earlier protestations (<q cite="http://pipthepixie.tripod.com/blog/archive/2003_08_01_blog.html#106094386079976858">\[It\] just confuses me with its perspectives and workspaces and completely idiosyncratic method of working with projects</q>), I’ve persevered with [Eclipse](http://www.eclipse.org) and it seems OK at the moment. I was mainly swayed by its CVS integration, which is good, and I’ve finally understood that Eclipse is *only* a project editor, not a text editor, which is how I’d been trying to use it before. In fact, its basic text editing is probably its weakest aspect. Eclipse is written for editing Java, so where’s the JSP support? Why is it so hard to find out which shortcuts keys are already mapped to? Little things like these are really putting me off, and need to get sorted. Yes I know it’s open source and all that bollocks, but if you think I’ve got time to wade through hundreds of thousands of lines of source to try and implement what someone else should be being paid to do then you’re very much mistaken.

Oh, and copy and paste is broken; both within Eclipse and with other applications. Very unimpressive.

In developing an SWT app I’ve needed to be able to bring up a webpage, and so far I’ve been using [the method Eugene Bayley provided](http://www.eugenebelyaev.com/begblog//000037.html) for launching the default browser. Today sees the release of [Milestone 3](http://download2.eclipse.org/downloads/drops/S-3.0M3-200308281813/eclipse-news-M3.html) and with it a new [SWT Browser widget](http://download2.eclipse.org/downloads/drops/S-3.0M3-200308281813/eclipse-news-part2-M3.html) (check out [what the FAQ says about it](http://dev.eclipse.org/viewcvs/index.cgi/~checkout~/platform-swt-home/faq.html#whatisbrowser) and a [code snippet](http://dev.eclipse.org/viewcvs/index.cgi/~checkout~/platform-swt-home/snippits/snippet128.html)).

Nice stuff. I like SWT. Initially it seemed a lot simpler to me than Swing, but I think that’s probably more to do with the [very easy to read SWT tutorials](http://www.cs.umanitoba.ca/~eclipse/) I learnt it from, whereas I learnt Swing the hard way – using JBuilder and then seeing what code it generated. I’m not sure if one is actually *better* than the other, after all Swing provides a native look and feel too.

Nevertheless, SWT is currently my Java UI of choice. I’d prefer to be able to use [Thinlet](http://www.thinlet.com) I think, and whilst I can knock up fairly complex UIs in little time using its ace XUL (thanks mainly to my experience playing with [Leigh Dodds’](http://www.ldodds.com) [Foaf-a-matic mk 2](http://www.ldodds.com/wordtin/Wiki.jsp?page=FOAFaMaticMark2) I can’t always quite get the functionality I need.

Using Thinlet though, has shown me how quick and easy it can be to use XML to define your UI. Sometime last week I set about searching for an XUL for SWT.

I found two possibilities [JellySWT](http://jakarta.apache.org/commons/jelly/jellyswt.html) (there’s also a JellySwing for generating Swing interfaces) and [Luxor](http://luxor-xul.sourceforge.net/). I haven’t evaluated either of them at all yet, but licensing seems relevant – Luxor is GPL whereas JellySWT is Apache License. Also, JellySWT runs out of [Maven](http://maven.apache.org/) (which I’m sure is nice, but which failed my five minute test when I tried it eight months ago).

Overall I suspect I’ll try JellySWT, I think it looks the better of the two, but let me know if I’m barking up the wrong tree. 🙂

The main links I picked up whilst searching:

- [Luxor](http://luxor-xul.sourceforge.net/)
- [Luxor mailing list](http://sourceforge.net/mailarchive/forum.php?thread_id=2953191&forum_id=9424)
- [Slides about Luxor](http://www.nimret.org/talks/luxorxul/html/siframes.html)
- [JellySWT](http://jakarta.apache.org/commons/jelly/jellyswt.html)
- [SWT, XML Put True Cross-platform GUIs Within Reach](http://www.devx.com/xml/Article/9782)
- [Jelly offers component-rich XML scripting](http://www.zdnet.com.au/builder/program/java/story/0,2000034779,20269893,00.htm)
- [The New Java GUI Alternatives](http://students.depaul.edu/~akudssi/se690/final.htm)
- [Why SWIX?](http://pisces.lunarpages.com/pipermail/forum_carlsbadcubes.com/2003-January/000017.html) (includes a list of XML – GUI converters)

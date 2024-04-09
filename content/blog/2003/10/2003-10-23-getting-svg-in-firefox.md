+++
title = "Getting SVG in Firefox"
date = "2003-10-23 11:44:00"
slug = "getting-svg-in-firefox"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
+++

Frustrated with not being able to use SVG in Fire<del>bird</del><ins datetime="2004-04-30T11:36:41Z">fox</ins> (especially now that [the GIMP has gone SVG](http://slashdot.org/articles/03/10/07/130202.shtml?tid=152&tid=185&tid=92) and after reading about the [Worst. Tag. Ever.](http://www.goer.org/Journal/2003/Oct/index.html#21)), I finally decided to plough through the atrocity that is BugZilla’s user interface and came across the imaginatively titled: “[Bugzilla Bug 133567: skeeter-s.com – M1RC3; Crash because Adobe SVG plugin used an unfrozen interface \[@ nsLoadGroup::GetName\] \[@ nsHttpChannel::GetName\] which changed its prototype](http://bugzilla.mozilla.org/show_bug.cgi?id=133567)”. Slowly reading through the comments it seemed there was no hope for me. Adobe had released their plugin with support for Mozilla, but against an unfrozen interface which had subsequently changed, hence, it didn’t work.

Fortunately, [comment 66](http://bugzilla.mozilla.org/show_bug.cgi?id=133567#c66) came to the rescue:

> <div>*———- Additional Comment #66 From [Peter Sorotokin](mailto:sorotokin@yahoo.com) 2003-07-17 23:17———-* This bug and all related bugs were fixed in Adobe SVG Viewer v6 Preview Release (Windows only at the moment, but keep looking <http://www.adobe.com/svg/viewer/install/beta.html>). We no longer try to support Mozilla browser scripting.
> 
> </div>

So if you download and install the [Adobe SVG Viewer 6 beta](http://www.adobe.com/svg/viewer/install/beta.html) and copy the plugin files to your gecko plugins directory<sup>[1](http://pipthepixie.tripod.com/index.html#fn1)</sup> it should all Just Work. Well, it did for me, and [it did for Jim](http://feetup.org/blog/tech/GeckoSVG.html).

<sup>1</sup> copy the NPSVG6.\* files from C:Program FilesCommon FilesAdobeSVG Viewer 6.0Plugins to $GeckoDir$plugins and restart the browser

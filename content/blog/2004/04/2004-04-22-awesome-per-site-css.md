+++
title = "Awesome per-site CSS"
date = "2004-04-22 09:49:00"
slug = "awesome-per-site-css"
[taxonomies]
tags = ['general']
[extra]
show_comments = "false"
+++

The [URIid extension](http://extensionroom.mozdev.org/more-info/uriid) for Mozilla and Firefox ([via asa](http://weblogs.mozillazine.org/asa/archives/005312.html)) lets you assign per-site CSS styles.

This is amazing. Couple this with the very useful [Chromedit](http://cdn.mozdev.org/chromedit/) and you have an easy-as-pie all-in-one solution for making sites look the way **you** want them to.

Is there one site where the font is always too small? Apply a style making it bigger on that site only! Annoyed with [The Register](http://www.theregister.co.uk)’s ads? A swift `#www-theregister-co-uk .Ad {display:none;}` and they’re gone! Content only!

The only downside? Changes to the userContent.css only get applied when you restart the browser. So then, install [the EditCSS extension](http://editcss.mozdev.org/) and the [Web Developer Extension](http://chrispederick.myacen.com/work/firefox/webdeveloper/) (or some other bookmarklet which gives you the names of IDs and classes on elements), restart your browser, visit a site you want to edit, use the “View ID and class details” command, hit CTRL-8 to bring up the EditCSS window and enter the CSS you want applied to the elements you want to modify.

Bring up your userContent.css in either ChromEdit or a file editor, copy and paste your new CSS in, hit “save”, restart your browser and away you go!

p.s. If you need to double-check what the generated ID/class for the page you’re on is, it won’t show up in “view source”. Instead you’ll need to view the generated DOM of the page (either by using the DOM Inspector or a “view DOM source” bookmarklet like the one on [this Javascript weblog](http://www.xs4all.nl/~zanstra/logs/jsLog.htm#view_dom_source)

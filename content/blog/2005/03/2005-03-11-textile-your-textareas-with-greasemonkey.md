+++
title = "Textile your textareas with Greasemonkey"
date = "2005-03-11 13:18:00"
slug = "textile-your-textareas-with-greasemonkey"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
+++

First of all, the link to the script: [Textile your textareas with pure JavaScript](http://philwilson.org/code/greasemonkey/textile.user.js).

[Roberto De Almeida](http://dealmeida.net/) has posted [a Greasemonkey script that makes all textareas textilable](http://dealmeida.net/en/Projects/PyTextile/greasemonkey_and_textile.html) which works by injecting a button after your textarea which sends its contents off to his public [PyTextile](http://dealmeida.net/en/Projects/PyTextile/) service and then replaces your contents with the parsed results, which means that although you have the full power of the latest version of PyTextile at your fingertips, it can be a little slow to respond.

But of course, [Textile has been ported to JavaScript](http://www.kryogenix.org/days/2004/07/07/commentsTextile), so [here’s a script](http://philwilson.org/code/greasemonkey/textile.user.js) which does the Textile transformation locally. It’s more limited than Roberto’s version, but still covers most of what you might want to do, like headings, lists, images, text-styling (bold and so on), but no tables and the more complex elements.

It’s based around Roberto’s script and uses Jeff Minard’s [SuperTextile](http://www.creatimation.net/textile.js) for the actual transormation. There’s currently something slightly wrong with it as it sometimes takes a few seconds to run through the final regexes, but I’ll probably just live with it.

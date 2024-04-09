+++
title = "allconsuming.net amazon bookmarklet"
date = "2004-09-07 23:43:00"
slug = "allconsumingnet-amazon-bookmarklet"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
comments_file = "/content/blog/2004/09/2004-09-07-allconsuming-net-amazon-bookmarklet-comments.csv"
+++

[consume!](javascript:b=document.getElementsByTagName('b');for(var n=0;n<b.length;n++){if (b[n].innerHTML=='ISBN:'){i=b[n].nextSibling.nodeValue.replace(/^s+/g, '').replace(/s+$/g, '');location.href='http://www.allconsuming.net/item.cgi?isbn='+i;}} "consume!") is a bookmarklet for using [allconsuming.net](http://allconsuming.net "book-based social software") with [amazon.com](http://www.amazon.com) and [amazon.co.uk](http://www.amazon.co.uk)

Just drag the link above to your browser toolbar and then when you’re viewing a book description page on Amazon click it and you’ll be taken to the “add this book to your collection” page on allconsuming.net. Add a reading status and a comment, hit “save” and you’re done. Massively sped-up book consuming!

I freely admit I’m not the world’s best javascript hacker, so if there are improvements that can be made (especially to the regexes, which work, but only just about) please let me know!

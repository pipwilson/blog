+++
title = "The Guardian's Christmas Gift Guide - on the web, not of the web"
date = "2016-12-01 22:19:34"
slug = "the-guardians-christmas-gift-guide-on-the-web-not-of-the-web"
[taxonomies]
tags = ['general','theguardian']
[extra]
show_comments = "false"
comments_file = "/content/blog/2016/12/2016-12-01-the-guardians-christmas-gift-guide-on-the-web-not-of-the-web-comments.csv"
+++

Congratulations to The Guardian for making me write a blog post.

It’s coming up to Christmas, and like all newspapers The Guardian have a [Christmas Gift Guide](https://www.theguardian.com/lifeandstyle/ng-interactive/2016/dec/01/christmas-gift-guide-2016-shopping-buy-online). It actually looks quite nice, with well-sized images, responsive layout, good filtering and obligatory animated falling snow. When I opened it there were a couple of items which I was interested in buying. So far, so Christmas.

<figure aria-describedby="caption-attachment-1438" class="wp-caption aligncenter" id="attachment_1438" style="width: 1795px">[![Screenshot of The Guardian's Christmas Gift List app](http://philwilson.org/blog/wp-content/uploads/2016/12/screenshot-www.theguardian.com-2016-12-01-21-43-08.png)](http://philwilson.org/blog/?attachment_id=1438)<figcaption class="wp-caption-text" id="caption-attachment-1438">Screenshot of The Guardian’s Christmas Gift List app</figcaption></figure>

The whole thing is very similar to [Amazon’s ‘stream’ app](https://www.amazon.com/stream) (“Interesting finds, updated daily”) for browsing items. The difference comes when you actually click an item.

On both the Guardian and Amazon sites the page is dimmed and a modal display appears. This gives you more information about the product (Amazon’s one also has the decency to support pressing the Escape button to dismiss the modal), and a link to go through to the main product page.

Except that on the Guardian app, that’s not quite what happens.

Where Amazon’s pop-up display has a nice `<a href="...">` for its link, meaning that you can open items in a new tab, send them to other tools, copy the link address and so on, the Guardian’s one has a `<button>`. A button with an attribute of `data-target="..."`.

This means that all you can do is click it and hope for the best. Will it change the location of your current tab, taking you away from the gift list? (no) Will it open a product page in a new tab? (yes) If you’ve already clicked one item in the list and then click another will it open another tab or replace the existing one? (it replaces the existing one – you can’t have two tabs with two different items open at the same time).

As a user, this is incredibly frustrating, especially for something which I was so prepared to like.

Can I therefore take a short moment to suggest to web developers everywhere that if they are adding a link to a web page, they do so by using the markup **intended** to provide a link to a web page, and not jury-rigging their own link mechanisms with JavaScript on top of whatever element they think they can style the best?

Just in case anyone was wondering, I did go and look up the implementation to see if this was the fault of a crazy JavaScript framework. As far as I can tell, it’s not. Check out lines 237 and 238 of <https://giftguide.imd1.uk/js/gui/xmas/view/singularProductView.js>:

```
var targetUrl = $(event.currentTarget).attr('data-target');
window.open(targetUrl,"Christmas gift");
```

Sigh.

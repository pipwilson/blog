+++
title = "Enhancing Firefox GUI usability"
date = "2004-11-29 17:42:00"
slug = "enhancing-firefox-gui-usability"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
comments_file = "/content/blog/2004/11/2004-11-29-enhancing-firefox-gui-usability-comments.csv"
+++

<ins datetime="2005-06-15T21:41:30Z">You no longer have to go through the hassle of editing your CSS, [I’ve turned this into an extension](https://philwilson.org/blog/2005/04/bigger-back-button-extension-for-firefox/)</ins>

Benjamin Roe recently wrote an article titled [Usable GUI Design: A Quick FAQ](http://benroe.com/files/gui.html) in which he talks about Fitt’s Law.

> The time to acquire a target is a function of the distance to and size of the target.

So the bigger the target, the shorter the time to acquire, and hence the easier to reach.

In relation to the web this has been discussed before by such luminaries as [Dave Shea](http://www.mezzoblue.com/archives/2004/08/19/fitts_law/index.php) and [Dunstan Orchard](http://1976design.com/blog/archive/2004/09/07/link-presentation-fitts-law/) who talk about making link targets larger for blog sidebars and so on.

In his article, Roe talks about how small the browser back button in Firefox is. Once I’ve applied my preferred settings (use small icons, small, no text), it looks like this:

![](../firefox-no-text.png)

That’s a pretty small target for one of the most commonly used targets in an application. Microsoft realised this a long time ago and in Internet Explorer’s ‘customize toolbars’ dialog you can choose to display ‘Selective text on right’ in the text options:

![IE's customize toolbar dialog](../ie-customize-toolbars.png "IE's customize toolbar dialog")

What this means is that even when the toolbar icons are set to small, the IE navigation toolbar looks like this:

![IE's back button with added text](../ie-selective-text.png "IE's back button with added text")

The back button is clearly at least twice as wide as the less frequently used forward button and three time as wide as the stop, refresh and home buttons (Roe does actually [allude to this](http://benroe.com/files/answers.html) , but mistakenly identifies it as a feature of the Longhorn edition of IE). To compensate he suggests making Firefox’s back button much bigger to make it easier for users to click on, and provides [an example of what it might look like](http://benroe.com/files/images/firefox_good.png) .

Of course, Firefox being completely user-customisable, we can (mostly) do this ourselves. I admit I’m too lazy to create a new back button and find out which chrome folder to put it in but all you really need to do is add the following lines to your userChrome.css:

```
#back-button .toolbarbutton-icon {
padding-left: 10px;
padding-right: 10px;
}
```

The easiest way to do this is to:

- [install the ChromEdit extension](http://cdn.mozdev.org/chromedit/)
- restart Firefox
- Tools menu -&gt; Edit User Files
- Add the CSS above to the top of the file and click ‘save’
- Restart Firefox.

All done! With any luck, your navigation toolbar now looks something like this:

![A wider back button in Firefox](../firefox-wide-back.png "A wider back button in Firefox")

When you hover your mouse over the back button, you can see that the target area has been massively increased

![What the back button looks like when you hover over it](../firefox-wide-back-over.png "What the back button looks like when you hover over it")

Obviously you can now edit the width to make it as large as you like. 10px was nice for me.

I was actually hoping to also be able to add the word ‘back’ after the image using the `:after` pseudo-selector but it didn’t seem to work. Any help with this gladly appreciated 🙂

<ins datetime="2004-12-05T21:50:21Z"></ins>

An [anonymous commentor shows us how to add the word ‘back’ to the button](https://philwilson.org/blog/2004/11/enhancing-firefox-gui-usability/#comments) by using the following CSS:

```
/* Force the label to be visible, even in icons-only mode */
#back-button .toolbarbutton-text {
display: -moz-box !important;
}

/* Put the label to the right of the button */
#back-button .toolbarbutton-menubutton-button {
-moz-box-orient: horizontal !important;
}

```

This works a treat but this will break the display of the toolbar if you switch it into other modes. The CSS I’m now using which leaves the back button as it should be in larger modes is below. My toolbar now looks like this:

![Firefox back button with the word 'back'](../firefox-with-text.png)

I’m not entirely sure it’s the most efficient thing in the world, and the previews don’t like right when you’re doing ‘customize toolbar’, but it all looks and works A-OK as soon as you hit “OK”. Promise 🙂

```
/* Force the label to be visible, even in no text */
toolbar:not([mode=full]) #back-button .toolbarbutton-text {
  display: -moz-box !important;
  padding-bottom: 2px;
  padding-right: 10px;
  padding-left: 2px;
}

/* put some spacing around the button icon */
toolbar:not([mode=full]) #back-button .toolbarbutton-icon {
  padding-left: 8px;
  padding-right: 6px;
}

/* Put the label to the right of the button */
toolbar:not([mode=full]) #back-button .toolbarbutton-menubutton-button {
  -moz-box-orient: horizontal !important;
}
```

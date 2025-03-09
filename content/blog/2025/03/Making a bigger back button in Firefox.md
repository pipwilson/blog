---
title: Making a bigger back button in Firefox
date: 2025-03-09 10:56:30
slug: making-a-bigger-back-button-in-firefox
taxonomies:
  tags:
    - firefox
    - css
---

I've been [hacking Firefox CSS to make the "Back" button bigger since 2004](https://www.philwilson.org/blog/2004/11/enhancing-firefox-gui-usability/).

Here's the latest version, so that you can have small toolbar buttons _except_ for the Back button, which [for obvious Fitt's law reasons](https://en.m.wikipedia.org/wiki/Fitts%27s_law), you want to be bigger by default.

This is what it will look like:

![](../back-unhighlighted.png)

 And when you're hovering:

![](../back-highlighted.png)

1. Enable userChrome.css
	1. Go to `about:config` in your address bar
	2. Search for `toolkit.legacyUserProfileCustomizations.stylesheets`
	3. Set it to `true`
2. Find your Firefox profile folder
	1. Go to `about:support` and find "Profile Folder"
	2. Click Open Folder
3. In the `chrome` directory (create it if it doesn't exist), create a file called `userChrome.css`
4. In that file add this CSS:
```css
toolbar[mode="icons"] #back-button .toolbarbutton-icon {
	border-radius: 0 !important;
}
toolbar[mode="icons"] #back-button .toolbarbutton-text {
	display: block;
	border-radius: 0 !important;
}
```
5. Restart Firefox - done!

I found out what the relevant styles to apply were by using [Firefox's Browser Toolbox](https://firefox-source-docs.mozilla.org/devtools-user/browser_toolbox/index.html).

You can also do something similar by applying one of the CSS files (to your userChrome.css as above) [from MrOtherGuy's firefox-csshacks repository](https://github.com/MrOtherGuy/firefox-csshacks/blob/master/chrome/toolbarbuttons_icon%2Blabel.css).
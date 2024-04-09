+++
title = "Adding a bookmark to an Android Home screen"
date = "2010-01-02 18:14:21"
slug = "adding-a-bookmark-to-an-android-home-screen"
[taxonomies]
tags = ['android','general','iphone','mobile','pics']
[extra]
show_comments = "true"
+++

It’s easy to add a link to a URL to the home screen on the iPhone. When you’re looking at a web page, just hit “+” and select “Add to Home Screen”. On Android it’s slightly more involved:

- Bookmark the page you want to add to a home screen
- Go to the home screen you want to add the link to
- long-press in an empty space to bring up the “Add to Home Screen” menu
- select “Shortcuts”
- select “Bookmark”
- choose your bookmark!

The icon you get will be the standard bookmark image with a small overlay of the site’s favicon. If the site provides `<link rel="apple-touch-icon-precomposed" href="blah" />` in the `<head>` then that will be used in preference. Both the iPhone and Android support the `apple-touch-icon-precomposed` link rel-type so it’s the preferred way of setting a custom icon for your webpage.

<ins>Update: I should mention that the resolution of the image you link to shouldn’t be too important but that [the Android Icon Guidelines](http://developer.android.com/guide/practices/ui_guidelines/icon_design.html) say it should be a 48×48 transparent PNG. I ignored that and used an icon I had lying around that was 256×256 and the OS scaled it just fine. Google themselves use this technique and [their image is 57×57](http://www.gstatic.com/m/og/icons/googlecom-iphone-57x57-p.png). You can find lots of good, free icons for your apps on [Smashing Magazine](http://www.smashingmagazine.com/tag/icons).</ins>

<ins datetime="20100508T06:45:00Z">Update 2: As [rblon says in the comments](http://philwilson.org/blog/2010/01/adding-a-bookmark-to-an-android-home-screen#comment-1841), there is another way of doing this:</ins>

1. Bookmark the page you want to add to a Home screen
2. Open the browser “bookmarks” screen
3. Long-press the bookmark you want
4. Select “Add to Home screen”

tada!

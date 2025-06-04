---
title: "Browser stats"
slug: browser-stats
date: 2009-07-15 14:14:45
taxonomies:
  tags:
    - communication
    - browsers
    - firefox
    - internet explorer
    - opera
    - safari
  collections:
    - university of bath
extra:
  originalLocationName: The University of Bath Web Services Blog
  originalUrl: http://blogs.bath.ac.uk/webservices/2009/07/15/browser-stats/
---
So, with the news that [YouTube Will Be Next To Kiss IE6 Support Goodbye](http://www.techcrunch.com/2009/07/14/youtube-will-be-next-to-kiss-ie6-support-goodbye/) and the recent release of [Firefox 3.5](http://www.mozilla-europe.org/en/firefox/) and [Internet Explorer 8](http://www.microsoft.com/windows/internet-explorer/default.aspx) I thought I'd take a moment to look at the browsers that visitors to the [University of Bath's website](http://www.bath.ac.uk) are using. We use [Google Analytics](http://www.google.com/analytics/) to track a significant portion of visits to pages on our site but with tens of thousands of pages and hundreds and hundreds of templates, we don't track everything*. I'm rather hopeful that the following figures, derived from site visits between the 1st and 30th of June, are representative nevertheless!

External visitors:

Browser | % of visitors using it | Internet Explorer | 64.61% (IE6 = 21%, IE7 = 65%, IE8 = 14%)  
---|---  
Firefox | 23.83% (almost all 3.x series on Windows)  
Safari | 7.35% (almost all on Mac)  
Chrome | 2.98%  
Opera | 0.73%  
  
Internal visitors:

Browser | % of visitors using it | Internet Explorer | 72.31% (IE6 = 13%, IE7 = 78%, IE8 = 9%)  
---|---  
Firefox | 19.55% (almost all 3.x series on Windows)  
Safari | 5.07% (almost all on Mac)  
Chrome | 2.13%  
Opera | 0.50%  
  
These numbers seem to suggest that we need to review [our current browser support matrix](http://wiki.bath.ac.uk/display/webservices/Browser+support+matrix) to accommodate the high IE6 usage among both the internal and external audiences (~9% and ~13% respectively, although I do hope that we can identify some of the internal perpetrators!). This is slightly disappointing given the fact that IE6 is now eight years old and has bugs that make even the most determined of exterminators squeal but these numbers should only get lower and lower over time, reducing our maintenance burden, and increasing the number of things we can do on the site.

Footnote: We do run [Analog](http://www.analog.cx/) over our Apache server logs which does monitor every single page, but the browser report there doesn't get grouped quite as nicely and the stats are harder to summarise which is why we tend to prefer Google Analytics. All of the sites which have moved to our CMS do of course have the Google Analytics tracking code!

**Update** : Mike Nolan from Edge Hill University has published [the corresponding browser usage statistics for their webpages](http://blogs.edgehill.ac.uk/webservices/2009/07/15/browser-stats/), showing a similar pattern.

[![](http://api.tweetmeme.com/imagebutton.gif?url=http%3A%2F%2Fblogs.bath.ac.uk%2Fwebservices%2F2009%2F07%2F15%2Fbrowser-stats%2F)](http://api.tweetmeme.com/share?url=http%3A%2F%2Fblogs.bath.ac.uk%2Fwebservices%2F2009%2F07%2F15%2Fbrowser-stats%2F)


+++
title = "Downloading via SSL in IE"
date = "2005-03-01 11:12:00"
slug = "downloading-via-ssl-in-ie"
[taxonomies]
tags = ['general']
[extra]
show_comments = "false"
+++

Edd Dumbill’s been having problems [getting IE to download dynamically generated files](http://usefulinc.com/edd/blog/contents/2005/02/26-ie-breaks-my-head/read) and today posted [the solution he discovered](http://usefulinc.com/edd/blog/contents/2005/02/28-ie-solution/read):

> The sort of situation that causes IE not to cache is either an SSL session, or where caching is turned off for other reasons, such as using PHP’s session facilities. This latter reason was the problem I was having.
> 
> The answer is remarkably simple, which is to add a Cache-control: public header to the download. This causes IE to keep the downloaded file around.

I ran into this about a year ago, and as far as I can remember, this solution *doesn’t work* when the download is both over SSL and your app is hosted by Tomcat behind IIS. I ended up having to both write my own server-side download handler **and** set the `Cache-control` header.

At the time it was all a bit of a last-minute discovery which didn’t get much investigation (both Firefox and Opera worked fine without any additional work which is why I hadn’t seen it earlier), and I just went with the first working solution, so if anyone knows better, please let me know 🙂

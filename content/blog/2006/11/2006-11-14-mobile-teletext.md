+++
title = "Mobile Teletext"
date = "2006-11-14 19:14:00"
slug = "mobile-teletext"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
comments_file = "/content/blog/2006/11/2006-11-14-mobile-teletext-comments.csv"
+++

[![Barbie Horse Adventures sucks](http://static.flickr.com/6/10930895_2e7b21b8bf_m.jpg)](http://www.flickr.com/photos/pip/10930895/ "Teletext on Flickr")

I quite like [teletext](http://www.teletext.co.uk/). The old, chunky teletext that is. It provides great, bite-sized chunks of information. To date the information hasn’t been republished on the internet – the positioning would be crazy; teletext can’t and shouldn’t compete with online resources.

However.

This week Teletext [launched a mobile service](http://www.teletext.co.uk/mobile.asp) (the website provides a number of mobile emulators so you can see . This makes perfect sense since the amount of text you can get on your mobile screen is quite similar to the amount displayed in the blocky old teletext (as you can see in the screenshot).

If you try and visit the mobile URL (such as [this one](http://www.teletextmobile.co.uk/portal.aspx?pn=806&uid=1111702181083416953519691784019712536148&rnd=23112)), the server does some user-agent sniffing and redirects you to the HTML version. I tried a quick wget, specifically:

```
wget --user-agent='Nokia6630/1.0 (2.39.129) Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1' http://www.teletextmobile.co.uk/portal.aspx?pn=806&uid=1111702181083416953519691784019712536148&rnd=23112
```

and it does return a WML page, but it appears to be a portal page, and doesn’t maintain the page number I wanted to visit (806 in this case). When I visit the same page in my mobile browser it goes where expected.

I admit to being a wget noob, so where exactly am I going wrong? It’d be great to pull this content and push it into, say, a widget on my desktop, but not until I break the wget idiot-barrier.

<ins datetime=""></ins>

OK, so installed the [User Agent Switcher Firefox extension](https://addons.mozilla.org/firefox/59/) and configured it with the Nokia 6680 User-Agent (“Mozilla/4.0 (compatible; MSIE 5.0; Series80/2.0 Nokia9300/05.22 Profile/MIDP-2.0 Configuration/CLDC-1.1)”) and that worked a treat, giving me the content I wanted, but putting the same string into wget still gave me the Teletext Mobile splash page. Help welcome!

+++
title = "Downloading from the BBC streaming iPlayer is hard"
date = "2007-12-17 14:34:13"
slug = "downloading-from-the-bbc-streaming-iplayer-is-hard"
[taxonomies]
tags = ['bbc','general','iplayer','real','red5']
[extra]
show_comments = "true"
comments_file = "/content/blog/2007/12/2007-12-17-downloading-from-the-bbc-streaming-iplayer-is-hard-comments.csv"
+++

(this was mostly written on Friday 14th December, although no-one else seems to have stepped up to the plate yet)

The new Flash-based BBC [iPlayer](http://www.bbc.co.uk/iplayer/) streams its content over Adobe’s proprietary [RTMP](http://en.wikipedia.org/wiki/Real_Time_Messaging_Protocol), making it very hard to download the stream and save it for later.

There are some native, commercial, applications to do this on Windows like [Replay Media Catcher](http://www.applian.com/replay-media-catcher/index.php) but as far as I can tell, nothing on Linux. There has been [a first-pass MythTV integration](http://www.mythtv.org/wiki/index.php/BBC_iPlayer) but this seems to use an embedded browser window.

[![snagged iplayer content](http://farm3.static.flickr.com/2155/2110476731_05c81936fb.jpg)](http://www.flickr.com/photos/pip/2110476731/ "snagged iplayer content by Pip, on Flickr")

[Red5 is a Java-based open-source Flash server](http://osflash.org/red5) which also comes bundled with some code for a sample client (download the tarball and then look in src/org/red5/samples/client). It might be possible to use this to download the stream; I haven’t yet tested. There also appear to be some code samples in Ruby and [Python](http://rtmpy.org/wiki/RTMP) lying around, but these look very incomplete.

The URL for the stream is along the lines of this:

rtmp://217.243.192.52:1935/ondemand?\_fcs\_vhost=cp41752.edgefcs.net&amp;auth=SECRET\_KEY&amp;aifp=v001&amp;slist=STREAM\_NAME

where both SECRET\_KEY and STREAM\_NAME come from a file of the name http://www.bbc.co.uk/mediaselector/3/stream/check/iplayer?pid=PID where PID is a BBC Programme ID such as [b008h3zq](http://www.bbc.co.uk/programmes/b008h3zq) as found on <http://www.bbc.co.uk/programmes/> – the base URL for this address is found in the config.xml file linked to from every iPlayer page: <http://www.bbc.co.uk/iplayer/emp/xml/config.xml>

So this looks hackable, with the most promising chance probably being with Java at the moment.

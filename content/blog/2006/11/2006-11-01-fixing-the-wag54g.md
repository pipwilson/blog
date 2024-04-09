+++
title = "Fixing the WAG54G"
date = "2006-11-01 10:36:00"
slug = "fixing-the-wag54g"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
comments_file = "/content/blog/2006/11/2006-11-01-fixing-the-wag54g-comments.csv"
+++

![](http://philwilson.org/images/WAG54G.jpg "Linksys WAG54G router")

I’ve had my Linkssys WAG54G (a wifi router and four-port switch) for about eighteen months, but over the past month or so, it’s been consistently dropping and then reconnecting my wired network connections every few seconds with Windows reporting that “A network cable was unplugged”. Replacing the network card would solve the problem for a few hours, after which it would start again.

It turns out that changing the connection type to 10Mbps (full duplex) solves this problem. I’m not really sure why, possibly too sensitive to noise on the line at higher transfer rates?

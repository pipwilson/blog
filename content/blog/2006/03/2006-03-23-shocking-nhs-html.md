+++
title = "Shocking NHS HTML"
date = "2006-03-23 22:41:00"
slug = "shocking-nhs-html"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
comments_file = "/content/blog/2006/03/2006-03-23-shocking-nhs-html-comments.csv"
+++

I’ve just applied for my European Health Insurance Card (no more E-111s!), and thought “gosh, isn’t this font small? and isn’t the menu highlight poorly written? that’s some bad CSS there I reckon – let’s take a look at the source”.

So I did.

Five minutes later, I came around.

At various points in the source, there are four HTML Doctypes declared, each one followed by opening `html` and `head`, one of them even looks like this `<html:html locale="true">`, which is just plain bizarre given that it’s not an XML document, and `locale="true"` isn’t even a valid language identifier. I just can’t even imagine the system that outputs such shitty markup – no wonder there’s no “This site written and designed by” stamp on it!

And well, you just have to look at it to see what I mean.

You can see it for yourself here: <https://www.ehic.org.uk/InternetPROD/home.do>

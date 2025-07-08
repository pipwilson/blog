---
title: 72 seasons on the TRMNL
date: 2025-06-24 17:58:58
slug: 72-seasons-on-the-trmnl
taxonomies:
  tags:
    - trmnl
    - eink
    - japan
    - 72seasons
---

The traditional Japanese Calendar has[ 72 seasons in a year, each made up of a handful of days](https://www.kanpai-japan.com/travel-guide/koyomi-72-seasons). 

I have always found these to be a very calming way of reminding myself to look around and observe the changes in nature as the year progresses.

I've written a plug-in for [the TRMNL device](https://usetrmnl.com) that shows you which of these seasons it currently is. 

It looks like this: 

![](../trmnl-72-seasons.jpg)

TRMNL plugins can connect to a server to fetch data, but there's no server involved here - this is just some static data and a rendering template. This was super easy to build, I did it in an hour or so after working out what the templating language allowed me to do. I converted [this existing web page which lists the 72 seasons](https://www.kanpai-japan.com/travel-guide/koyomi-72-seasons) into [this JSON file using ChatGPT](https://github.com/pipwilson/trmnl-72-seasons/blob/main/src/microseasons.json).

You can [access the source code here](https://github.com/pipwilson/trmnl-72-seasons), and if you have a TRMNL device you should soon be able to find it on [the list of Recipes on their website](https://usetrmnl.com/recipes).

I used the [sample stock ticker layout](https://help.usetrmnl.com/en/articles/10031211-stock-price) as the base for my template, which meant I then only needed to sort out my date comparison and the whole thing was done. 

This was very easy to do and is both pleasing and relaxing when it cycles around on my TRMNL.

<ins datetime="2025-07-08">Turns out [someone else had the same idea for their TRMNL](https://usetrmnl.com/recipes/18876):  - this is just one manifestation of their much larger effort at <https://smallseasons.guide/></ins>

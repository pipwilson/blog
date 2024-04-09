+++
title = "Opensearch in Firefox 2 and IE7"
date = "2006-11-06 01:05:00"
slug = "opensearch-in-firefox-2-and-ie7"
[taxonomies]
tags = ['general']
[extra]
show_comments = "false"
comments_file = "/content/blog/2006/11/2006-11-06-opensearch-in-firefox-2-and-ie7-comments.csv"
+++

We recently rolled out the Google Search Appliance at work, replacing the ageing (and dreadful) [htdig](http://en.wikipedia.org/wiki/Htdig) (wikipedia link since the website appears to be down).

I’d previously put together a Firefox search plugin for htdig, but it wasn’t very good because the htdig search gave poor results and took ages to deliver them. Since we rolled out the GSA, I went to update the search plugin and found to my delight that Firefox 2 now uses [OpenSearch](http://www.opensearch.org/Home) for [defining search plugins](http://developer.mozilla.org/en/docs/Creating_OpenSearch_plugins_for_Firefox). So, ten minutes later and I had a working plugin, which was great. A week later, when IE7 RC1 came out I realised that [IE has supported OpenSearch plugins for months](http://blogs.msdn.com/ie/archive/2005/09/14/466186.aspx), so I pointed it at my plugin, only to find that it didn’t work.

It turns out that IE doesn’t appear to support the nested Param element, although I freely admit that I haven’t checked the OpenSearch 1.1 specs to see if something changed from 1.0 (although a first pass of [draft 3](http://www.opensearch.org/Specifications/OpenSearch/1.1/Draft_3) doesn’t seem to include the Param element – I suppose the [Firefox docs on the topic](http://developer.mozilla.org/en/docs/Creating_OpenSearch_plugins_for_Firefox) could just be out of date).

To install the plugin, go to [the University’s GSA tools page](http://www.bath.ac.uk/search/gsa/tools.shtml#ff2ie7) To see the [working plugin XML looks like this](http://www.bath.ac.uk/search/gsa/bathsearch.xml), the [Firefox2-only XML looks like this](http://people.bath.ac.uk/pgw22/bathsearch-ff.xml)

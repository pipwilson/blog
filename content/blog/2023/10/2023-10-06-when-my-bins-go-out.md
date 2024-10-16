+++
title = "When my bins go out"
date = "2023-10-06 18:39:58"
slug = "when-my-bins-go-out"
[taxonomies]
tags = ['general']
[extra]
show_comments = "false"
comments_file = "/content/blog/2023/10/2023-10-06-when-my-bins-go-out-comments.csv"
+++

I had to [write some PHP](https://github.com/pipwilson/bin-collections/tree/main) to [tell me when to put out my bins](https://philwilson.org/bins/) because my council doesn’t follow their own rules for collections.

Every week my council organises the collection of our 5 bins – but there is a pattern to how they are collected.

This is a pretty simple pattern, with 3 of the bins going out every week and the two largest (general waste and garden waste) alternating each week.

Except that it’s not.

What actually happens is that for the first three months the garden waste is collected in the first week and then for the second three months the black bins are collected first, and so on. Mostly this works out fine and it *looks* like the collections simply alternate each week. But August 2023 (which is in the middle of the third quarter of the year) had 5 weeks, meaning there should have been two weeks in a row where the general waste was not collected, and the garden waste was collected. This did not happen.

This means that the document they provide residents with dates of collections is now wrong. The PDF with this info is also wrong. The way to find out what’s being collected is to [use their website](https://www.bathnes.gov.uk/webforms/waste/collectionday/). The website does everything using ajax and does not push state to the URL, and so the page with your individual information on it is not bookmarkable. This is annoying.

Luckily, watching the network requests revealed a very simple JSON file that covers the bin collection timing of my area and thus I could extract it [trivially](https://github.com/pipwilson/bin-collections/tree/main) to provide the useful service that neither the council leaflet nor website provide.

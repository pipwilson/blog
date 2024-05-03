---
title: Publish your blogroll
date: 2024-05-03 11:42:08
slug: publish-your-blogroll
taxonomies:
  tags:
    - opml
---
You can view [an HTML version of my blogroll here](https://philwilson.org/blogroll/), and also download the OPML from that page. Some of the links are probably dead, but they don't show up in my feed reader so ¯\\\_(ツ)_/¯
<!-- more -->

[![Screenshot of the blogroll page](/images/2024/05/blogroll.png "Look at all the lovely people I read")](/blogroll)

The webpage is statically generated from the OPML when my site is rebuilt (if I've updated the OPML!) using the [`load_data`](https://www.getzola.org/documentation/templates/overview/#load-data) function of Zola.

The code is super-trivial and [you can see it on GitHub here](https://github.com/pipwilson/blog/blob/production/themes/philwilson.org/templates/blogroll.html).

You can do the same thing in Hugo but with more complexity using [resources.GetRemote](https://gohugo.io/functions/resources/getremote/)) or if you can run your own code then you can covert it to JSON and parse it more easily [like Andrew Williams shows you here](https://nikdoof.com/posts/2022/automating-a-blogroll-in-hugo/).

I've also added a new `<link>` element in my blog template to point to the OPML after [following the guidance on opml.org](https://opml.org/blogroll.opml).

The rendering of both the blog name and the domain it's on was inspired by [how Eric Gregorich does his](https://ericgregorich.com/blogroll/)


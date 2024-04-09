+++
title = "Preparing to move from Wordpress to Zola"
date = "2024-02-15 20:34:20"
slug = "preparing-to-move-from-wordpress-to-zola"
[taxonomies]
tags = ['general','urls','wordpress','zola']
[extra]
show_comments = "false"
comments_file = "/content/blog/2024/02/2024-02-15-preparing-to-move-from-wordpress-to-zola-comments.csv"
+++

[In Feb 2021 I said](https://philwilson.org/blog/2021/02/week-19-brightening/) I was planning on moving from WordPress to [Zola](https://www.getzola.org/). I am still not done. Eking the work out really hasn’t worked. [Who’d have thought?](https://www.jrothman.com/newsletter/2000/01/volume-2-number-1-managing-projects-the-perils-of-parallel-projects/)

If I didn’t care about maintaining URLs then I would probably be done by now, but I do because, y’know, I desperately want [to be cool](https://www.w3.org/Provider/Style/URI.html).

So, important URLs to maintain in priority order:

1. Main entry point (`/blog`)
2. Individual post entry URL (`/blog/year/month/title`)
3. Feed URL (`/blog/feed`)
4. Year URL (`/blog/year/`)
5. Month URL(`/blog/year/month`)

Nice to have URLs:

1. Tag URL (`/blog/tag/tagname`)

URLs I’m going to ignore:

1. Category URLs (`/blog/category/catname/`) – I’ll merge this with tags
2. All pagination URLs (`blog/page/x/`)

Of the URLs I want to keep only the feed URL looks impossible – I don’t think [Zola can create a feed](https://www.getzola.org/documentation/templates/feeds/) at two levels deep, which means I’ll need a rewrite, which needs I’ll need a host which supports rewrites which I thought meant I’d have to actually get a proper host (like [Hetzner’s CAX11](https://www.hetzner.com/cloud/)) but actually it looks like my plan of hosting on Cloudflare Pages is still good to go because [they support redirects](https://developers.cloudflare.com/pages/configuration/redirects/)!

I’m using a custom plugin to get my content out of WordPress in the first place. I’ll write about that another time.

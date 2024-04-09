+++
title = "RSS for fun and the public good"
date = "2024-03-11 21:16:46"
slug = "rss-for-fun-and-the-public-good"
[taxonomies]
tags = ['atom','general','rss']
[extra]
show_comments = "false"
comments_file = "/content/blog/2024/03/2024-03-11-rss-for-fun-and-the-public-good-comments.csv"
+++

I follow [Steve Messer](https://visitmy.website/)’s blog – he’s a product manager in the UK Civil Service, making land and housing data easier to find, use and trust. And [he writes weeknotes](https://visitmy.website/tag/weeknotes/) which I enjoy reading.

He mentioned this week that [his team’s blog](https://digital-land.github.io/blog-post/) doesn’t produce an RSS feed. Well, I’ve just been [doing that for my own blog](https://github.com/pipwilson/blog/blob/production/templates/atom.xml) so I thought, how hard can it be?

An hour later and I opened [my pull request](https://github.com/digital-land/digital-land.github.io/pull/7).

[The Digital Land blog](https://digital-land.github.io/blog-post/) is an interesting beast, being built by a custom-built Python static site generator using gov.uk components and rendering with [Jinja](https://palletsprojects.com/p/jinja/).

It’s been a couple of years since I last looked at much Python (probably whilst I was at [GDS](https://gds.blog.gov.uk/) working as Head of Technology on the [Clinically Extremely Vulnerable People Service](https://github.com/alphagov/govuk-shielded-vulnerable-people-service)) and I don’t think I’ve ever used Jinja, so my code is probably terrible but it does work on my machine!

Hopefully what I’ve done will be at least the right shaped answer, but I imagine one of their actual Python experts will fix up my PR nicely.

(also, it’s an Atom feed that I generated, not an RSS feed, but the title didn’t scan as nicely)

**UPDATE:** It’s merged! [Look on my works ye mighty](https://digital-land.github.io/blog-post/atom.xml).

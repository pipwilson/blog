+++
title = "A brief experience with GitHub Actions and CatLight"
date = "2024-03-03 15:50:34"
slug = "a-brief-experience-with-github-actions-and-catlight"
[taxonomies]
tags = ['coding','general','git','github']
[extra]
show_comments = "false"
comments_file = "/content/blog/2024/03/2024-03-03-a-brief-experience-with-github-actions-and-catlight-comments.csv"
+++

After deciding I couldn’t get the URLs I wanted for my blog using [Cloudflare Pages](https://pages.cloudflare.com/) without some [actual real honest-to-goodness rewrites](https://httpd.apache.org/docs/current/mod/mod_rewrite.html) I [had to use GitHub Actions](https://github.com/pipwilson/blog/blob/production/.github/workflows/zola-build.yml) for the first time in anger.

An incredibly powerful platform with a misery-inducing YAML syntax. Little more to be said.

What was nice was the chance to use [CatLight](https://httpd.apache.org/docs/current/mod/mod_rewrite.html) for the first time since reading about it a few years ago [when Matthew Somerville first mentioned it](https://dracos.co.uk/wrote/catlight-github-actions/). At the time he needed to write some code to make the output from GitHub Actions available, but happily [this is now built-in](https://www.catlight.io/a/github-actions-desktop-notifications) and so whilst iterating on my YAML mistakes I was getting nice desktop notifications about it.

I don’t get the chance to write much code any more, but tooling that makes it easier to follow the process from local commit to being aware of whether your commit has worked is always a benefit.

---
title: Yaffle - a toy RSS reader for Yarr
date: 2024-06-07 14:41:22
slug: yaffle-a-toy-rss-reader-for-yarr
taxonomies:
  tags:
    - general
    - rss
    - rss-reader
    - yarr
    - wxwidgets
    - wxvenus
---

I spent some time in April and May making a toy cross-platform desktop RSS reader which uses [Yarr](https://github.com/nkanaev/yarr) as its backend. [It's called Yaffle](https://github.com/pipwilson/yaffle-rss-reader). It looks like this on Windows:

![Screenshot of a 3-pane desktop RSS reader](/images/2024/06/yaffle-screenshot.png)

It's absolutely not suitable for anyone to use but me, but it's been a fun adventure in writing a [wxPython](https://wxpython.org/) RSS reader and using [GitHub Copilot](https://docs.github.com/en/copilot/about-github-copilot) to generate a bunch of the scaffolding, in particular where I can't remember the wx syntax correctly (the last wx app I tried to write was also an RSS reader called [wxVenus](https://philwilson.org/blog/tags/wxvenus/), 16 years ago).

It's also been a fun exercise in learning how [Poetry](https://python-poetry.org/) and [PyInstaller](https://pyinstaller.org/en/stable/) work.

Because I've outsourced all the hard RSS-handling work to Yarr it means that by far the hardest part of the whole thing so far has been rendering the icons - lots of different formats, some odd transparency issues, and getting the spacing between the icons as I wanted were all much harder than I expected. I've probably spent twice as long rendering the icons properly than everything else combined!

Why did I outsource the backend to Yarr? I was already using Yarr as my reader and because I liked the web app I looked at the source code and saw that it had a nice clean, simple API and thought "I can use that". That pretty much it.

Why a desktop app? Because a) I always lose my RSS reader in my million open tabs b) installing the web app to my desktop didn't seem to work properly in Firefox and c) it seemed like fun.
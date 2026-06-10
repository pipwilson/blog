+++
title = "Zola Blog Editor"
date = "2026-06-10"
draft = true

[taxonomies]
tags = ["zola", "blogging", "windows", "android", "tools"]
+++

Zola Blog Editor is a desktop and mobile application for posting to your Zola blog when the content is stored in GitHub.

On my android e-ink table it looks like this:

![A screenshot of Zola Blog Editor running on an Android tablet](/images/2026/06/zola-blog-editor-2026-06-09.png)

It uses Tauri to wrap a web applicaton which connects to the GitHub API to retrieve, edit and add content. This means it requires a network connection to work since it is a remote-first tool.

It was fully written by Claude Code based on my requirements, which means it also has a theme switcher so that although you get a light and a dark mode for desktop use, there is also a high-contrast, large-font mode for e-ink tablet use which is how I'm writing this post now.


It is opinionated software, so it works pretty much perfecly for my use case, but may not do so for other zola blogs. Caveat emptor!
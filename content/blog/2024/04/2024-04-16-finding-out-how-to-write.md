+++
title = 'Finding out how to write'
slug = 'finding-out-how-to-write'
date = '2024-04-16 22:00:00'
draft = false
taxonomies.tags = [
	'blogging',
	'cms',
	'zola',
]
+++
Posting to a statically-generated site is theoretically easy - it's just a file on your desktop after all.

![](/images/2024/04/pens.jpg)

But whilst the words are easy, it's also easy to mess up the metadata, and wouldn't it be nicer to get it right in one shot? After all, the ideal for writing on your blog is hit the keyboard with your fingers until your point is made and hit "send".

But it's not quite like that when you have to faff with [frontmatter](https://daily-dev-tips.com/posts/what-exactly-is-frontmatter/).

This means that some people have come up with their own workflows which I've been having a look at.

[Ron Erdos is using VS Code Snippets](%5Bhttps://moonbooth.cohttps://moonbooth.com/hugo/blog-post-workflow/) to create the outline of his blog posts - that's a nice approach which is pretty simple to mimic.

A [few](%5Bhttps://github.com/https://github.com/devidw/obsidian-to-hugo) [different](%5Bhttps://blog.marco.https://blog.marco.ninja/posts/2023/08/25/my-publishing-pipeline/) [people](https://github.com/dashedstripes/obsidian-to-hugo) have worked out different ways to convert their [Obsidian](https://obsidian.md/) vaults (or subset of notes) to their static blog.

There is also [PagesCMS](https://pagescms.org/) which layers an editing UI directly on top of your GitHub repo which is pretty straightforward to set up and works nicely, auto-committing changes directly to the repo as you take different actions (like when I [uploaded this image yesterday](%5Bhttps://github.com/pipwilson/blog/commit/8a79b30d8701177d2bhttps://github.com/pipwilson/blog/commit/8a79b30d8701177d2bfb369767103a18b97007a8)).

[Front Matter](https://frontmatter.codes/) is a desktop equivalent of PagesCMS, integrating into VS Code which is a nice idea too.

I have some (probably rose-tinted) memories of a Windows desktop tool called w.bloggar - I don't often write long things on my phone and when I do I dictate them and the on-device voice recognition makes way too many mistakes to be immediately usable - which [is now open source](https://github.com/lvcabral/w.bloggar) and makes me wonder how feasible it would be to write a quick cross-platform desktop tool that does the same thing for my blog. After all, [the GitHub REST API exposes the raw Git objects](%5Bhhttps://docs.github.com/en/rest/git?apiVersion=2022-11-28) which can be written directly - i.e. you wouldn't even need a local clone of your repo, just the correct authentication.

I like this idea and will have a quick play in the coming days, but til then I think PagesCMS will be my posting mechanism of choice.
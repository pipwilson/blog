---
title: Converting wayback machine pages into blog posts
date: 2025-06-04 18:23:45
slug: converting-wayback-machine-pages-into-blog-posts
taxonomies:
  tags:
    - blogging
    - waybackmachine
    - rss
    - python
    - ai
    - vibecoding
---

Summary: I extracted a load of old blog content from the feeds archived on the Wayback Machine and converted it into markdown files suitable for posting on my blog, and got AI to write all the code for me. The generated code [is all here in github](https://github.com/pipwilson/waybackmachine-to-markdown).

<!-- more -->

## What I wanted to do

Years ago I used to work for the University of Bath in the UK. We used to [blog in the open about the work we were doing](https://public.digital/pd-insights/blog/2022/01/what-does-working-in-the-open-mean) and contribute back to the rest of the UK's Higher Education sector's tech teams with lessons learned, practical tooling they could use, process improvements and so on. The team still there [continue to blog](https://blogs.bath.ac.uk/digital-content-and-development/), but with a slightly tighter focus.

That original blog and my dozens of posts have since been deleted, but live on the Wayback Machine.

So let's get the posts out of there, and republish them back on my blog - they make up part of the tapestry of things I found interesting and activities I was doing at the time and so it would be nice to bring them back into the mix rather than let them disappear forever.

Having only used the Wayback Machine as a regular user I had no idea how to reach my goal, but figured I would need to try a few different approaches.

## Trying and failing to use an existing tool

Firstly I tried an off-the-shelf approach with <https://github.com/StrawberryMaster/wayback-machine-downloader> but couldn't get it working properly after 30 minutes, so abandoned it.

## Vibe-coding our way to the goal

I realised I'd probably have to write some scripts to do this and because I wasn't worried about the quality of what I was doing and I'd probably need to try a few approaches I decided to go full-on [vibe-coding](https://simonwillison.net/2025/Mar/19/vibe-coding/). I've done this on a few other small, one-shot, throwaway projects pretty successfully and the hit rate keeps going up!

Browsing the web UI you can see all the pages which the Wayback Machine holds about a site e.g. [this listing for https://blogs.bath.ac.uk/webservices](https://web.archive.org/web/*/https://blogs.bath.ac.uk/webservices/*) but that's 30 pages of links! ChatGPT told me that I could use [the CDX API](https://archive.org/developers/wayback-cdx-server.html) to get the full list in one hit:

```bash
curl "http://web.archive.org/cdx/search/cdx?url=blogs.bath.ac.uk/webservices/*&output=txt&fl=timestamp,original&collapse=digest" > urls_raw.txt
```

The output [looks like this](https://github.com/pipwilson/waybackmachine-to-markdown/blob/production/urls_raw.txt).

When I asked about how to get just the list of URLs it also gave me this line to strip the timestamp of the snapshot from each line of the file:

```bash
awk '{print "https://web.archive.org/web/" $1 "/" $2}' urls_raw.txt > urls.txt
```

Great! We now have a full list of working URLs that the Wayback Machine has of the site I'm interested in!

I spent some time here getting ChatGPT to give me a script to de-duplicate the list to only have one record per-URL (only using the latest snapshotted version), and then trying to download and parse those files to extract only the content. But this was just too much work to do - the parsers couldn't always reliably extract the content of the page (using [readability](https://github.com/buriy/python-readability)), and the markdown wasn't always what I wanted (using [pandoc](https://pandoc.org/)).

So I needed a new idea.

Well, I love RSS, and this blog was WordPress, so it definitely had a feed, and I made sure at the time that we always published full-content in the feeds, so let's grab that!

I manually selected all the URLs from the long list which listed the main feed for the blog and put them in their own file. [This gave me 33 lines](https://github.com/pipwilson/waybackmachine-to-markdown/blob/production/feed_urls.txt), and I knew there would be a ton of duplication of items between snapshots, so I couldn't just do a naive merge. At this point I moved to [VS Code using Agent mode](https://code.visualstudio.com/docs/copilot/chat/chat-agent-mode).

Very quickly it built me [a bash script to download the files and name them after their snapshot timestamp](https://github.com/pipwilson/waybackmachine-to-markdown/blob/production/download_feeds.sh), and [a Python script to loop over those locale files](https://github.com/pipwilson/waybackmachine-to-markdown/blob/production/merge_feeds.py), and each time it found a new GUID value, add the item to a new RSS file. Voila, I now have a local, [single RSS file containing all the content and metadata of the content posted to that blog](https://github.com/pipwilson/waybackmachine-to-markdown/blob/production/webservices.xml) that was deleted years ago!

I manage this blog [with Zola](https://philwilson.org/blog/tags/zola) so it was then an iterative job to get the agent to [write a script to loop over the RSS file and extract the items I'd written into a new markdown file in the directory I wanted, with the frontmatter I wanted](https://github.com/pipwilson/waybackmachine-to-markdown/blob/production/extract_phil_wilson_posts.py). I did some manual blog template work so that I could highlight that the each of those posts originated elsewhere, and add a new taxonomy so that I could also list them out separately and I was done!

I can't emphasise enough that other than keeping a very loose eye on the generated Python scripts in case there were mistakes, I didn't write any of the code. I had to manually intervene at exactly one point when the generated YAML frontmatter was not indented as Zola required (which I hadn't known about either), but otherwise it was just a matter of looping over a process of asking it to make the next step, hitting 'Accept' and running the script. If I'd had a clearer idea in advance of the exact outcome I wanted I could have used the agent more autonomously, but at the start I didn't really know exactly where I was going to end up or what my detailed requirements were. Given that, it all turned out really well!

You can now [view those posts made between 2008 and 2014](https://philwilson.org/collections/university-of-bath/), including this [interesting look in 2011 at which browsers were using our website](https://philwilson.org/blog/2011/06/going-html5/) and a consideration of whether HTML5 was worth using yet!

Of course all the links on those posts are broken, so in a pleasingly circular manner I'll be adding [Remy Sharp's approach](https://remysharp.com/2023/09/26/no-more-404) to linking to the Wayback Machine for all those 404s - another job for AI to do for me perhaps?
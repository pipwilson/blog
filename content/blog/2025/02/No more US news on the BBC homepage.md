---
title: No more US news on the BBC homepage
date: 2025-02-09 15:41:31
slug: no-more-us-news-on-the-bbc-homepage
taxonomies:
  tags:
    - bbc
    - chrome
    - firefox
    - javascript
    - greasemonkey
---

I think that 24/7 news is a modern-day scourge, and one of its corollaries in the UK is the overdue prominence given to US news.

I use the BBC News website when I'm trying to find out what's going on, but I'd prefer that the coverage was of countries within three thousand miles.

I used Copilot to help me bash together an extension for both Chrome and Firefox which simply removes US-based news from the BBC News homepage.

<del>It doesn't do any fancy news item replacement, or insertion of [Place Cats](https://placecats.com/). Just takes away the madness that you in the UK don't need to be dealing with.</del>

<ins>OK I got image replacement working, but [you get dogs instead of cats](https://philwilson.org/blog/2025/02/good-doggo-bad-news/).</ins>

Is this really necessary, you ask? Sometimes, yes:

![Screenshot of the BBC News website where half of the news has been removed because it is about the US](../bbc-homepage-news-screenshot.png)

## Installing

I haven't packaged it up yet so [get the code](https://github.com/pipwilson/bbc-no-us-news) and then:

### For chrome

1. Go to chrome://extensions/
2. Click "Developer mode" in the top right
3. Click "Load unpacked" in the top left
4. Select the folder you downloaded the code to
5. Done.

### For firefox

6. Go to about:debugging#/runtime/this-firefox
7. Click "Load Temporary Add-on"
8. Select the folder you downloaded the code to
9. Done (but you will have to redo these steps each time you restart Firefox [because of Reasons](https://www.urbandictionary.com/define.php?term=because%20of%20reasons)).

Also, yes, [a greasemonkey/tampermonkey script](https://greasyfork.org/en) could do the same thing, but I've been burned by posting my code there before. Feel free to grab the code from <https://github.com/pipwilson/bbc-no-us-news/blob/main/src/content.js> and import it.
+++
title = "How to restore a deleted Twitter video using your Firefox cache"
date = "2021-07-07 14:35:32"
slug = "how-to-restore-a-deleted-twitter-video-using-your-firefox-cache"
[taxonomies]
tags = ['firefox','general','twitter']
[extra]
show_comments = "false"
comments_file = "/content/blog/2021/07/2021-07-07-how-to-restore-a-deleted-twitter-video-using-your-firefox-cache-comments.csv"
+++

Caveats: You must have used your computer to view the Twitter video, not a phone or tablet! I used the process below on Windows, but similar approaches will apply on Mac and Linux and to Google Chrome.

Earlier today someone I follow on Twitter posted a video which they subsequently deleted. I liked the video and wanted to share it, but it was gone!

Of course, browsers cache most web page assets they load and so I figured I would have a local copy of it somewhere, I just needed to work out where, and how to get it into a readable format. The steps are:

1. Find cache folder
2. Download cache browser
3. Find video ID
4. Extract video segment files from cache
5. Stitch files back together

Firefox stores its cache in a binary format of its own making, so we can’t just go and look at the cache folder and see what’s in it, like we could years ago, but you will need to find your cache folder. Mine was at

```
C:\Users\<username>\AppData\Local\Mozilla\Firefox\Profiles\<profile-id>.default-release\cache2
```

The next thing to do is go and grab a copy of [MZCacheView](https://www.nirsoft.net/utils/mozilla_cache_viewer.html). This is the awesome app which will let you search for, and extract, files from your Firefox cache. When you open it, it will auto-detect your Firefox profile and list all the files it finds in the cache

Each video on Twitter is split into multiple segments (using the .m4s extension) using the ID of the video, not of the tweet, so we need to get the video ID next – the easiest way to do that is to use the cache filter in MZCacheView to limit the domain to `twimg.com` and use the Quick Filter to search for `ext_tw_video_thumb`. After enabling the preview pane (press F8), you’ll have to go through each one by hand, but once you’ve got the right thumbnail, the ID in the URL of the video thumbnail (a ~19-digit number) is what you now want to put into the quick filter.

You should now have a list of about a dozen files, each of which has the video ID somewhere in the URL column. Two of these will be your image thumbnail, three will be playlists that tell you which video files you want (and in which order you’ll need to stitch them together) and the remainder are the video files. Find the playlist which uses the highest resolution in its URLs to video segments (e.g. `/pu/vid/0/0/720x1280/`) and note the mp4 and m4s files it links to, and the order they are listed in.

Now use that list of filenames to identify the files in your search list, CTRL+click them and then right-click and select “Copy Selected Cache Files To…” and choose an output directory.

Then you just need to `cat` the files together. e.g.

```bash
cat file-1.mp4 >> saved-video.mp4
cat file-2.m4s >> saved-video.mp4
cat file-3.m4s >> saved-video.mp4
```

Now you should be able to play saved-video.mp4 and do whatever you like with it!

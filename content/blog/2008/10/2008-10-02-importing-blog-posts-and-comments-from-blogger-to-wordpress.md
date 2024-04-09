+++
title = "Importing blog posts and comments from Blogger to Wordpress"
date = "2008-10-02 19:57:15"
slug = "importing-blog-posts-and-comments-from-blogger-to-wordpress"
[taxonomies]
tags = ['atom','blogger','general','google','oauth','wordpress']
[extra]
show_comments = "true"
comments_file = "/content/blog/2008/10/2008-10-02-importing-blog-posts-and-comments-from-blogger-to-wordpress-comments.csv"
+++

[![bloggerpress](http://philwilson.org/blog/wp-content/uploads/2008/10/bloggerpress-thumb.png)](http://philwilson.org/blog/wp-content/uploads/2008/10/bloggerpress.png)I tried this a year ago only to experience epic fail.

I tried this yesterday and it was a marvellous success.

Around this time last year [I was locked out of my Google account](http://philwilson.org/blog/2007/11/google-be-gone) and decided to move what I could over to my own server (a process I’ve still not completed!). As part of that move I used [BloggerBackup](http://www.codeplex.com/bloggerbackup) to export all of my blog posts and comments and tried to do an import into WordPress, which didn’t work. I was resigned to writing some script to import it but ran into a WordPress date parsing bug which I had trouble tracking down – however since my old blog was still available as static HTML on my server, I wasn’t really that worried about it.

[![blogger import](http://philwilson.org/blog/wp-content/uploads/2008/10/blogger-import-thumb.png)](http://philwilson.org/blog/wp-content/uploads/2008/10/blogger-import.png) Last night I tried the built-in WordPress import from Blogger. It uses [OAuth to authenticate](http://code.google.com/apis/accounts/docs/OAuth.html) and then allows import of your posts and comments from the comfort of a couple of clicks in the WordPress admin interface. All very smooth, all very easy (apart from the slightly worrying disparity between the number of imported elements and the totals). I’ll have to move my images, but that’s no real bother.

My archives now go all the way back to [May 2002](http://philwilson.org/blog/2002/05) when it was a co-blog with my housemate of the time who is now an [arty-philoso-programmer in Australia](http://www.neonascent.net/muchmojo/wordpress/). Before that I maintained my blog by hand and I’m not sure I have copies.

A quick “thanks” to my colleague [Tom Natt](http://www.tomnatt.com/) who helped me fix my .htaccess changes so that old links and [Google searches](http://www.google.co.uk/search?q=fuck%20firefox) still work (also thanks to Mark Pilgrim’s [Cruft-free URLs in Movable Type](http://diveintomark.org/archives/2003/08/15/slugs) which I could rather tragically remember as a useful post from five years ago).

+++
title = "Configuring get_iplayer"
date = "2013-03-24 15:42:20"
slug = "configuring-get_iplayer"
[taxonomies]
tags = ['bbc','general','git','iplayer']
[extra]
show_comments = "false"
comments_file = "/content/blog/2013/03/2013-03-24-configuring-get_iplayer-comments.csv"
+++

There are [lots of ways](http://linuxcentre.net/getiplayer/documentation#Filenames%20and%20Directories) of setting up [get\_iplayer](http://www.infradead.org/get_iplayer/html/get_iplayer.html). [Here’s mine](https://gist.github.com/pipwilson/5232174).

It means that filenames work across Windows and Linux, removes underscores from names, never deletes old episodes and downloads episodes into a directory named after the series and names the files with the series’ episode number.

Your own `options` file is in `~/.get_iplayer` or `c:usersusername.get_iplayer` depending on your operating system.

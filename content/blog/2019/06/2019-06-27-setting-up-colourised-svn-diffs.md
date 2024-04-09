+++
title = "Setting up colourised svn diffs"
date = "2019-06-27 08:30:38"
slug = "setting-up-colourised-svn-diffs"
[taxonomies]
tags = ['general','linux']
[extra]
show_comments = "false"
comments_file = "/content/blog/2019/06/2019-06-27-setting-up-colourised-svn-diffs-comments.csv"
+++

This is mundane, but something I will no doubt forget, and so for my own posterity:

The svn diff is monochrome by default. Let’s install [colordiff](https://www.colordiff.org/) and change that.

```
sudo apt-get install colordiff
vi ~/.subversion/config
```

In the `[helpers]` section set the diff command to `/usr/bin/colordiff`

To ensure that when you do `svn diff | less` the control characters for the colours are rendered correctly you’ll need to set the default options for `less`:

Edit `~/.bash_profile` and add

`export LESS=R`

Then run `source ~/.bash_profile`. Done!

+++
title = "Pentaho problems"
date = "2018-06-07 13:49:39"
slug = "pentaho-problems"
[taxonomies]
tags = ['general','usamajility','whining']
[extra]
show_comments = "false"
comments_file = "/content/blog/2018/06/2018-06-07-pentaho-problems-comments.csv"
+++

I am finding myself using a lot of [Pentaho Data Integration](https://help.pentaho.com/Documentation/8.0/Products/Data_Integration/Data_Integration_Perspective/010) at the moment.

It’s a good, powerful, tool, but my god does it have some annoyances.

It’s a drag and drop tool that allows you to process massive amounts of data in parallel, without needing to be an almighty data analyst already. This means that you can bring up the configuration windows for each data processing step you’re working with at the same time, so you can check you’ve named all your variables correctly, and so on.

It has a help system built in, which pops up a window containing the wiki page for the step you’re working with. Except that the help window is modal. The only modal window in the whole application is the one which gives you a guide on what to type into which box or which contains example and values that you might want to copy/paste into your step. Except you can’t. Because modal.

As you run your data process, Pentaho marks each step as in progress, or successful. Except that if you have your process divided up into multiple data transformations then you can only check the status correctly if you close all but the first transformation in the process, run it, and then re-open the sub-transformations from there. Baffling.

When your transformations are running you get a nice real-time log of what’s happening at the bottom of your screen, which you can scroll through. Except that as new lines are added to the log it scrolls it to the bottom. Good luck finding the log message you were looking at before!

More complaining into the void next time! Hope you’re looking forward to it as much as I am!

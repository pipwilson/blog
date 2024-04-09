+++
title = "Ripping last.fm radio to separate mp3 files on Windows"
date = "2006-09-06 22:20:00"
slug = "ripping-lastfm-radio-to-separate-mp3-files-on-windows"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
+++

(And if that’s not a title to reel them in from Google, I don’t know what is.)

Step 1) Install and download the [last.fm proxy](http://vidar.gimp.org/lastfmproxy/) (requires Python)

Step 2) Follow the two-step configuration in the [README](http://vidar.gimp.org/wp-content/uploads/2006/07/README.txt)

Step 3) Start the [last.fm proxy](http://vidar.gimp.org/lastfmproxy/) and configure a radio station to listen to

Step 3) Download and start [StreamRipper](http://streamripper.sourceforge.net/sr32/)

Step 4) Configure the output location for your files

Step 5) Put <http://localhost:1881/lastfm.mp3> into the URL box

Step 6) Click “Rip”

You will soon have a directory full of correctly named (but ID3-less) mp3 files.

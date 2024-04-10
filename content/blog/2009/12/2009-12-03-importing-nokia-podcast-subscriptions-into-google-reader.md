+++
title = "Importing Nokia podcast subscriptions into Google Reader"
date = "2009-12-03 23:37:05"
slug = "importing-nokia-podcast-subscriptions-into-google-reader"
[taxonomies]
tags = ['general','google reader','n95','nokia','opml','syndication']
[extra]
show_comments = "true"
comments_file = "/content/blog/2009/12/2009-12-03-importing-nokia-podcast-subscriptions-into-google-reader-comments.csv"
+++

#### Exporting the list of podcasts

1. load the podcasting application, mark all items and hit “send -&gt; bluetooth”. Contrary to what you might expect, this will send an OPML file listing your subscriptions to your PC

#### Edit the list ready for import

1. Open your new Podcasting.opml file in a text editor
2. Find/replace all instances of `url=` with `xmlUrl=`
3. Immediately after the opening `<body>` tag put `<outline title="podcasts" text="podcasts">`
4. Just before the closing `</body>` tag put `</outline>`
5. (I also duplicated all the text=”blah” attributes with title=”blah” but I don’t know if this is actually necessary)

#### Import the list of podcasts

![The Google Reader Import/Export page](http://philwilson.org/blog/wp-content/uploads/2009/12/googlereader-importexport.png "The Google Reader Import/Export page")

1. load Google Reader
2. Click “Settings” in the top right
3. Go to the Import/Export tab
4. Find your Podcasting.opml file and upload!

You should now find that you have a new folder called “podcasts” in your google reader containing all the podcasts from your Nokia device.

Even nicer – if you make the folder public (Settings -&gt; Folders and Tags) you can import the OPML from Google Reader directly into other applications by giving the URL `http://www.google.com/reader/public/subscriptions/user/USERID/label/podcasts` where USERID is the long number in the URL of the “view public page” link next to your public podcasts folder in Settings -&gt; Folders and Tags.

![Google Reader view public page section](http://philwilson.org/blog/wp-content/uploads/2009/12/googlereader-viewpublicpage.png "Google Reader view public page section")

</body>

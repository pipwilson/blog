+++
title = "How to combine communication channel histories?"
date = "2005-07-22 10:21:00"
slug = "how-to-combine-communication-channel-histories"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
comments_file = "/content/blog/2005/07/2005-07-22-how-to-combine-communication-channel-histories-comments.csv"
+++

I regularly contact the same people, over and over again using a variety of e-mail, instant messenger and SMS. Conversations move seamlessly between these different mediums depending on where I or the people I’m communicating with are at the time. To my brain, the digital location of the conversation isn’t relevant, just the fact that I’ve been in communication with a certain person on a certain topic; if I’m lucky I might even remember vaguely when. So how do I go about finding where I had this conversation?

[Desktop search tools](http://www.searchtools.com/tools/desktop-search.html) are becoming better and better and able to index more and more data sources, so it’s likely I could search both my IM and e-mail logs from a single interface, but that still leaves my mobile device out in the cold, despite all its high-falutin’ Bluetooth and 3G/GPRS connectivity and l33t synchronisation skills.

Text messages on Nokia phones are stored in text files with some bytes at the beginning and end for denoting various details, as well as the number of the sender, for which a lookup to the contacts database is necessary to retrieve a useful name. But how to get this to the PC and indexed?

Maybe the best idea would be some kind of automated sync in the background to your PC over Bluetooth which transfers your sent and received text messages, and puts them into an mbox datastore. Of course, you could just transfer them as text files or maybe you could use a desktop search tool plugin (like the ones listed on the [Google Desktop Search plugin-ins page](http://desktop.google.com/plugins.html)) to identify them as a different type of data, but do you want to? Really you just want to search all of your messages in the same way so that “from:bob” returns recent emails, IMs and text messages from Bob (although I guess you should also have specific keywords so that “email:Bob”, “sms:”Bob” and “im:Bob” all work for their specific context for when you know the communication already).

The ability to search IM and email both as one and separately should be doable quite easily I think; the background-transfer of SMS information possibly less so – I’m not sure how the authentication issues would work and whether you’d need to actually take action on one of the ends (which would be less than ideal), in which case a manual sync might be preferable.

If anyone’s doing any work in this sector, or related, I’d be more than willing to lend them a hand, whether it be coding or just testing, but I rather think I’m too busy at the moment to start another project myself quite yet 🙂

+++
title = "Upgrade Nokia N95 to v20 firmware"
date = "2008-02-25 22:35:08"
slug = "upgrade-nokia-n95-to-v20-firmware"
[taxonomies]
tags = ['general','mobile','n95','nokia']
[extra]
show_comments = "true"
+++

After [waiting for ages](http://philwilson.org/blog/2007/11/nokia-n95-assessment), I have just upgraded my [3](http://www.three.co.uk)-branded N95 (3 are a UK provider) to an unbranded v20 firmware. I think this means I’ve lost some of the [X-Series](http://en.wikipedia.org/wiki/X-Series) stuff that 3 bundled, but I never used any of it, so I don’t really care.

I also came very very close to bricking the phone a number of times, which will teach me not to try it at 2am without planning in advance. However, this is roughly the process I took. It’s not perfect, I probably do Very Bad Things, but I’m 95% satisfied with the outcome.

[![N95 on v20 firmware](http://farm3.static.flickr.com/2197/2292540232_26b9bea2f5.jpg)](http://www.flickr.com/photos/pip/2292540232/ "N95 on v20 firmware by Pip, on Flickr")

The instructions I followed [were these](http://www.dougbelshaw.com/2008/01/01/how-to-upgrade-your-nokia-n95-to-v12x-firmware-and-make-it-a-whole-lot-better/) (there are even some screenshots, unlike this wodge of text), but they don’t apply perfectly to the v12 -&gt; v20 upgrade, although I *am* going to quote something, as it applies here:

> **Before I continue: a disclaimer: this is not supported by Nokia or by your service provider. The following procedure is undertaken entirely at your own risk and I take no responsibility if your phone ends up as a rather expensive doorstop.**

### Some rules (the last one won’t make any sense yet):

- Once you upgrade, you can not go back to an earlier firmware.
- Backups made when running the old firmware (e.g. v12) can not be restored onto the same phone with newer firmware (e.g. v20) regardless of whether they were made using “Backup to memory card” or the PC Suite Content Copier, and trying may toast your phone
- If you care about any of your data you will make a backup using the PC Suite immediately after installing the new firmware and returning the product code to its previous value

### The steps:

- Make sure your phone is fully charged or plugged in to the mains
- Make a list of software you’ve installed on your phone in case you fry it
- Sync all your calendar and contact information to Outlook or equivalent (I’m on Vista and selected something like “Windows Contacts and Windows Calendar” from the select box)
- Run a PC Suite Content Copier backup of your messages and bookmarks – contrary to the rules above, I believe these \*can\* be restored successfully from a v12 firmware backup to a running v20 firmware
- Remove memory card (just to speed up the process during the firmware upgrade)
- [Download Nemesis Service Suite](http://www.b-phreaks.co.uk/index.php?main_page=page_2)
- Extract existing product code and write it down 
    - Load NSS
    - Click the magnifying glass in the top-right
    - Click the “Phone Info” tab
    - On the far right, click the “Read” button and note down your Product Code
- Update product code to an unbranded version 
    - Check the “Enable” box next to Product code
    - Enter your new product code (I used 0536062 which is the code for Euro-1)
    - Click the “Write” button
    - Click the “Read” button to make sure your product code was set correctly
    - Close NSS
- Run PC Suite Software Update (this is the bit which will update your firmware), your phone may restart several times during this process
- You are now on v20 firmware
- Run Nemesis Service Suite and set the product code to the value you wrote down earlier
- Run PC Suite Content Copier restore to put your messages and bookmarks back
- Sync your phone to Outlook or whatever to get your contacts and calendar back

The next time you put your memory card in it will attempt to initialise any applications you might have installed on it. They won’t all work. You will probably end up with some weirdly named installer files like 0000ards.sis – you should be able to delete them using the Application Manager.

### The outcome:

Your N95 now runs v20 firmware. The benefits are a much, much faster camera, faster GPS, assisted-GPS, better memory management, auto-lock when you close the slider, good integrated search of all your content, better podcast integration with the music player, music player resumes a track from the position when you exited it last, and probably lots more that I haven’t noticed yet.

Also, I obviously messed something up because my SMS were previously stored on my memory card, but they’re now on the phone memory, with no apparent way of moving them back (s60v3 no longer has the C:SystemMail which you used to be able to just copy to E:System). Also I lost my podcast subscriptions (although not the mp3s), so it’s lucky I [blogged about them recently](http://philwilson.org/blog/2008/01/listening-to-podcasts).

### The danger:

If you get a “Phone startup failed – contact the retailer” message after doing a restore of any part of your data, all is not lost, it just means that you restored some data which is not compatible with this firmware (you have, however, probably lost that data forever). Do this:

1. Turn the phone OFF
2. Press the Green call answer button, the \* button, and the ‘3’ button together.
3. Whilst holding them, then press the power button, and keep holding the other 3 buttons.
4. Wait till the phone reboots.

many thanks to [Google and “floatlite”](http://www.esato.com/archive/t.php/t-146483,1.html) for that tidbit.

This was the first time I’d done a firmware upgrade on a phone. It did not go smoothly, and I wouldn’t expect it to go smoothly next time either. My best advice is to make sure that any critical data is backup up separately on your PC in a plain-text format if possible (**not** just via PC Suite backup – this is a black hole from which you cannot retrieve data whenever you like).

+++
title = "Raspberry Pi, my media centre at last"
date = "2012-09-14 22:55:01"
slug = "raspberry-pi-my-media-centre-at-last"
[taxonomies]
tags = ['bbc','general','raspberrypi','xbmc']
[extra]
show_comments = "true"
+++

[![my raspberry pi is here](http://farm9.staticflickr.com/8180/7955114660_db528b2e4b_n.jpg)](http://www.flickr.com/photos/pip/7955114660/ "my raspberry pi is here by Pip, on Flickr")

My Raspberry Pi has arrived, and not only is it one of the nice [new rev2 hardware revisions](http://www.raspberrypi.org/archives/1929), it’s also [been manufactured in the UK](http://www.raspberrypi.org/archives/1925), which if you’ve [followed their trials](http://www.raspberrypi.org/archives/509), you’ll realise is a big deal.

Anyway, mine is here, and one short hunt for a spare SD card later I’d got the installation of RaspBMC, a port of XBMC, started. It took probably about ten minutes to complete, with no intervention from me.

Then I SSHd in (the default username is ‘pi’ and the password ‘raspberry’), and set about [installing get\_iplayer using these instructions](http://raspi.tv/2012/get_iplayer-installation-on-raspberry-pi-with-raspbian). I had to also install `make` and `gcc` before rtmpdump would build but other than that it all worked perfectly. I plugged in my 500GB hard drive and I now have something which:

- is a BBC PVR
- is a good household-friendly playback device for recorded tv, films and music
- can act as an AirPlay server for our iPad, iPhone and iPod touch
- uses HDMI-CEC and therefore responds to my normal TV remote
- can join my local network and play back media from other devices
- probably loads more, I’ve only had a couple of hours!

Next step will be to get a suitable case. Maybe something [custom etched](http://www.etsy.com/listing/102467745/custom-engraved-bramble-pi-case)?

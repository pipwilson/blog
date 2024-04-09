+++
title = "Internet rabbit rebuild - step 1"
date = "2017-05-18 22:12:08"
slug = "internet-rabbit-rebuild-step-1"
[taxonomies]
tags = ['general']
[extra]
show_comments = "false"
comments_file = "/content/blog/2017/05/2017-05-18-internet-rabbit-rebuild-step-1-comments.csv"
+++

Back in Christmas 2006, I was lucky enough to get everything I asked for, and one of those things was one of the first commercially available Internet of Things devices – a [Nabaztag](https://en.wikipedia.org/wiki/Nabaztag).

![A picture of my Nabaztag with other Christmas presents](http://philwilson.org/blog/wp-content/uploads/2017/05/christmas-rabbit.jpg)

This was a beautifully moudled piece of plastic designed to look like a rabbit. It connected to your wifi and triggers could control its LEDs, its individually rotating ears or play sound through the speaker. I had [great fun with it](http://philwilson.org/blog/2007/01/nabaztag/) but, in what would be a salutary lesson, the fact that it was proprietary hardware, talking over a proprietary protocol to a proprietary server was soon a problem when not only was my model made obsolete by newer models but then the company going bust. Suddenly, I had a great-looking paperweight.

Some keen nerds reverse-engineered the protocol and wrote their own servers (like [NabAlive](https://github.com/jcheype/NabAlive), [NabaztagLives](https://sourceforge.net/projects/nabaztaglives/) and [OpenJabNab](http://openjabnab.fr/) and there are [a whole host of libraries listed here](http://www.findbestopensource.com/tagged/nabaztag)), but they’re not all straightforward to set up and there isn’t as much support for the first version of the Nabaztag.

All this means that mine has been in the loft for the best part of a decade, but commodity hardware is now affordable enough, and low-effort enough (no soldering for me!) that I thought I’d try and bring my internet bunny back to life, in particular after being inspired by [Roy Tanck’s attempt at doing the same thing by replacing the insides with a Raspberry Pi](https://www.roytanck.com/tag/nabazpi/).

Step 1 was to take it apart. There are some triangular screws on the bottom which came out pretty easily using one end of some needle-nosed pliers and then the rest is standards phillips-head. It’s impressive to see how far electronics manufactoring has come in the last decade – the wireless in the original rabbit was provided by a full-sized PCMCIA card!

[![A picture of the front of the Nabaztag's main PCB](http://philwilson.org/blog/wp-content/uploads/2017/05/naked-rabbit.jpg)](http://philwilson.org/blog/wp-content/uploads/2017/05/naked-rabbit.jpg)

[![](http://philwilson.org/blog/wp-content/uploads/2017/05/pcmcia.jpg)](http://philwilson.org/blog/wp-content/uploads/2017/05/pcmcia.jpg)

Once the case was off, I removed the electronics and motors from a central plastic frame, and my next step is going to be to prototype replacing them using [a Raspberry Pi Zero W](https://www.raspberrypi.org/products/pi-zero-w/) with [a Blinkt attachment](https://shop.pimoroni.com/products/blinkt).

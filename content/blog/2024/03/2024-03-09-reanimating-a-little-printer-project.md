+++
title = "Reanimating a Little Printer project"
date = "2024-03-09 10:00:00"
slug = "reanimating-a-little-printer-project"
[taxonomies]
tags = ['berg','general','printer','ruby','space']
[extra]
show_comments = "false"
+++

I’ve made a little app which generates an image for you to display or print how many people there are in space right now. [The code is here](https://github.com/pipwilson/how-many-people-in-space).

This is based on work that the excellent design and technology agency BERG did a decade ago with [their Little Printer](https://www.theverge.com/2011/11/29/2596138/berg-little-printer-cloud-receipt-sized-newspaper).

Little Printer was a wonderful little service which used a network-connected thermal printer with a personality to send little messages of wonder and joy into your house.

<figure class="wp-block-image">![Little Printer on a bookshelf](https://lh7-us.googleusercontent.com/ZX5uPy0iPo-UBIn23ilbT7LryTQu48q40iikcxyv9FwdibZZWEUG9j-_rj8NmZO2VHisfwel3KDSHmrez0eEY26WQT5sl0QMvpSO181wzz_OONNzbwRv_X4n9B0SgPsnxfcw6tSVIrKZXKCBVbwAYk8)</figure>It was released in 2012 and as all these products inevitably do, the servers went offline a few years later and the service went away. BERG released their code and a little community sprang up to help liberate the devices and keep them running, which you can see at <https://tinyprinter.club/> and additional work from design invention studio [Nord Projects](https://nordprojects.co/projects/littleprinters/).

In the 12 years since Little Printer, desktop sized bluetooth-connected thermal printers have become a thing, and you can get one delivered to your house for [less than £20 from Amazon](https://www.amazon.co.uk/Thermal-Bluetooth-Portable-Compatible-Printable/dp/B0B391KN5S?dib=eyJ2IjoiMSJ9.WLTCBrwP98pwkBcjhQ4VUFq5pnr85BV1kVbVCEgStfycW2TfXNwjrOkV1zK36ZBNdmkuXHUqlILYt9uC68lOTgZ3ivl-qA4TfXN9x7FDPRyv90bsy9Q0E0Y6vXeKNvv-gWyHpoj_W_eTgNGsxZ15uZl70wCYlvYwCtQ__d3GnfdK48NJgcLpMnlMJ2oFakUFa1mGvRQF7J9D0Id7vQoyZQy1PyqwYplgMBLG0Qbqh7A.FIF6Kh9O2BfChzMCHVaKsKwKvbCcOSn2yCzHWdmD0FU&dib_tag=se) or Aliexpress. I have this nice cat-themed one:

<figure class="wp-block-image">![Thermal printer with a stylised cat face next to a Lego superman minifig for size comparison](https://lh7-us.googleusercontent.com/A2XiceP5QDzSyDHP_8F5UivyBFBn4nqk8bO_6atdhpD2SKWi-IOSASoScyggGdQ3tSwYg-ZLknUoqyI39v0BlbmS4IadEtlURhOikSaZuDLdIJbb_lQjhG_hIxetr4vMwz9gBrVVd7tv-E4GAM_ppZg)</figure>When tidying up my repos in GitHub I found [I’d forked one of the Little Printer repos many years ago](https://github.com/pipwilson/lp-how-many-people-in-space/), so now that I’ve got a thermal printer wouldn’t it be nice to get that running? This one prints out a little picture telling you how many people are in space right now. I can’t find a photo of this working on a Little Printer, so let’s give a spoiler instead:

<figure class="wp-block-image">![Printer publishing "How many people are in space right now?" on paper](https://lh7-us.googleusercontent.com/iF05UVZOqYbZGEwR4IwExSCf94ZuJIh4agvKTWrk6jxd1mnMCDEiuLVnI2up-cFjWWzU4BXIvWd_BDpsgaAGD3Ncbr_bD0M2JjoAPShpQK7LpXgQCe8Y6sVDT7hKxvtqdvAZvpICwl08Dq_OLXorw7s)</figure>Let’s have a quick look to see if the decade-old Ruby code runs out of the box (although with low expectations it will). No surprises, it doesn’t:

- Ruby version is too old
- Dependency compatibility is broken
- The tumblr RSS feed it relies on doesn’t get updated any more
- We don’t have a server to send the rendered content to the printer

So let’s see if we can rewrite this app!

- Find a new service with the number of people in space
- Make a simple Sinatra web app
- Point the existing app which sends content to the printer to the web app
- Press print
- Done!

[Here’s the code.](https://github.com/pipwilson/how-many-people-in-space)

The [Fun Print app that supports my printer](https://play.google.com/store/apps/details?id=com.fun.mxw) allows me to print directly from a URL, so I just give it the address of my web app, and it prints out nicely, as you can see above, and because my printer came with several rolls of sticker paper, I can simply peel it off and stick into [my Techo](https://www.jetpens.com/blog/Guide-to-the-Hobonichi-Techo-Planner/pt/900)!

Obviously the real benefit of Little Printer is that it’s push-based. If I want to be able to push this data to the printer in the future I guess I’ll need to convert the web page into an image, so I’ve added some (currently unused) [rendering with Capybara to the application](https://github.com/pipwilson/how-many-people-in-space/blob/production/screenshot.rb). I might give some of the resources linked from <https://tinyprinter.club> a go in the future to try and get push working, but I’m quite happy with pull at the moment.

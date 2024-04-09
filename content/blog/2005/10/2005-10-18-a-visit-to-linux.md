+++
title = "A visit to Linux"
date = "2005-10-18 22:48:00"
slug = "a-visit-to-linux"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
+++

![Tux, the Linux penguin](http://philwilson.org/images/linux_penguin.jpg "Tux, the Linux penguin")

A few weeks ago I decided it had been too long since I’d last checked out the state of desktop Linux, and hey, [my TV card doesn’t work on Windows](http://philwilson.org/blog/2005/08/capturing-teletext.html), and it just might under Linux.

I downloaded and installed the following distributions:

### [SUSE 9.1 Professional](http://www.novell.com/linux/suse/ "SUSE")

![SUSE Linux logo](http://philwilson.org/images/suse.jpg "SUSE Linux")

I actually have the boxed edition of this, so thought it was about time I got around to installing it. I realise that SUSE 10 is out, but I already had the DVDs and manuals ready, so I wasn’t about to waste them.

Installation onto my second hard drive was a smooth process, with no intervention from me other than “what’s your username, password, location“-type questions which is just the same as a Windows installation. Once installed, the OS worked straight away, and the choice of installed software was good and included OpenOffice, media players, and all kinds of other things. [KDE](http://kde.org/ "KDE") was the desktop environment that SUSE installed by default.

Once up and running, I wanted to install [Firefox](http://www.mozilla.org/products/firefox/) and [ScummVM](http://www.scummvm.org/ "Scumm"). ScummVM was a completely smooth installation, which involved loading the SUSE package manager, [YAST2](http://forge.novell.com/modules/xfmod/project/?yast), typing “scumm” into the search box, selecting ScummVM and clicking install. It didn’t create any icons for me, which was annoying, but I was expecting that.

Firefox was a different matter. The latest version for SUSE 9.1 was 1.0.somethingold and I wanted the latest version. Pointing YAST2 at the installation source for SUSE 10 didn’t seem to do me any favours so I had to download the Firefox non-standard installer from Mozilla’s website and run it myself. Which failed. Which again, I was expecting because last time I tried to install Firefox under RedHat it failed too. I switched to root and installed it into my user’s home directory and this time it worked, but it felt clumsy and awkward to have to do, and again I had to create my own shortcut icons in the not-Start menu (which pointed to the binary in a directory in my home dir. eww).

About half-way through my trial of SUSE, I went out and bought [a 19” TFT monitor](http://flickr.com/photos/pip/41255930/) to replace my 17” CRT. I got home, plugged it in, my monitor turned on…..and then off again. My new monitor hadn’t been detected and X was still trying to run with the refresh rates of a CRT (which are much higher than a TFT, and in this case beyond my monitor’s range). I’d already put my CRT away, so I wasn’t going to get it back out so I could look up my problem on the web, so it was lucky that I had the SUSE manuals, which told me exactly where the config file for X was that I needed. Armed with that and my monitor manual I got KDE to start up and ran a manual hardware-detection which **did** pick up my new monitor and select the correct settings. Still, I must admit that I was slightly disappointed about this since Windows (on my primary drive) had started up just fine.

Other than this, I Was very happy with my SUSE install, and (but for one thing) could quite happily have kept using it as my day-to-day desktop: my TV card worked without any intervention from me; I could burn DVDs more easily than I could under Windows (once I’d realised what the option to not truncate filenames was), and other than general unfamiliarity which could be easily countered with time, it felt good.

The one issue I had was with installing new software, and this was true for all of the distros I tried out.

I install a **lot** of software on my Windows box, because I do a lot on it: video encoding; software development in many different languages; word processing; image processing and the list goes on (and on, really). For most of these tasks I use free software that comes bundled with .exe or .msi installers; one double-click and I’m away. The same just isn’t true of Linux, and it drove me batty. Overall the experience was better than the last time I looked to switch (far less “configure; make; make install” for a start), but still a dearth of easily-installable apps. It was source code this, dependencies that, and overall I just didn’t find the range of software available that I could for Windows. Nobody was more surprised about this than me, let me tell you.

Just before you get angry at me, I did actually run a Linux-only PC for a number of years (firstly running [Enlightenment](http://www.enlightenment.org/), then KDE and [Gnome](http://gnome.org/) if you care), and so had I been *really* desperate, I could have installed whatever I wanted from any number of application respositories – I’m no stranger to building my own apps – but I don’t have the time for that any more. I have a girlfriend; I have a job, other things take up my time. I need to double click and install. No messing about.

I actually ran this SUSE installation on my desktop for about two weeks before I got tired of having to switch back into Windows to fill in my application gaps.

Phew, after that, let’s see what else I looked at.

### [Symphony OS Alpha 4](http://www.symphonyos.com/)

![Symphony OS logo](http://philwilson.org/images/symphonyos.png "SymphonyOS")

A friend recommended I have a look at this (mainly so that he didn’t have to), because as their blurb says <q cite="http://www.symphonyos.com/about.html">Symphony provides what we consider to be the easiest to use Linux experience there is.</q>. Well gosh, that’s quite a lot to claim.

Sadly, it doesn’t live up to it. Symphony is a Debian and Knoppix-based distro. Like SUSE it installs very smoothly and without hassle. Symphony uses a desktop system called [Mezzo](http://www.symphonyos.com/mezzo.html) which is, as far as I can tell, unique.

> Mezzo disposes of standard concepts like “The desktop is a folder” and nasty nested menu systems that are hard to navigate and harder to manage and instead presents all needed information directly to the user via the main desktop and four desk targets for tasks and files related to System, Programs, Files, and Trash.

This works quite well once you get used to it, and the four desk targets are actually the four corners of the desktop (the four easiest places to hit), which is great.

But then it lets itself down by not having a default Window Manager which reflects this usability – in fact, the build I tried had rounded corners, so that when I maximised a window, I couldn’t go to one of the four primary desktop locations to grab or resize it. Very poor. Overall, using Symphony *feels* very much like using the Alpha software that it is. It has some good core concepts, but usability problems, graphical incosistencies and incompleteness means that it’s got a long way to go before it can be considered “the easiest to use Linux experience there is”.

Tomorrow: Linspire, KnoppMythTV and Windows Media Centre.

+++
title = "Disable system bell in msys"
date = "2009-02-08 01:20:15"
slug = "disable-system-bell-in-msys"
[taxonomies]
tags = ['general','git','msys']
[extra]
show_comments = "true"
+++

I am using [Git](http://git-scm.com/) on the command line in Windows via [msysgit](http://code.google.com/p/msysgit/).

As with all msys installs whenever you press backspace and there is no more text to delete or you press TAB for auto-complete when there are multiple options, your speaker utters an horrendous, ugly beep.

To disable this, load msys and find out where your home directory is:

<kbd>echo $HOME</kbd>

Go to that directory (either in Windows or through msys) and create a new file called <kbd>.inputrc</kbd>

Put one line in that file:

<kbd>set bell-style none</kbd>

Save it and restart msys. You should now have no system bell! I’ve also seen it advised that you can disable your system bell by disabling the hardware emulation for this device in Device Manager, but this didn’t seem to work for me in Vista.

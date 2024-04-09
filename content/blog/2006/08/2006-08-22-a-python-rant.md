+++
title = "A Python rant"
date = "2006-08-22 17:18:00"
slug = "a-python-rant"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
+++

Whilst wedding and Norway posts are forthcoming, a small rant about installing extra libraries into [Python](http://www.python.org) on Windows.

How hard can they make it? I mean, really? What I want to do: write a python app using [the Twisted library](http://twistedmatrix.com/trac/). An hour later, and I’m yet to get to the coding part. Installation of [Python 2.4](http://www.python.org/download/releases/2.4.3/) and writing basic code is as simple as expected, yet as soon as you want to install a third party library you either have to bank on the provider having generously created a binary installer for you or you need to download almost a gig of .NET libraries in order to compile it yourself followed by editing some core Python files ([full details](http://www.vrplumber.com/programming/mstoolkit/)).

I’d use the [Twisted binary installer](http://tmrc.mit.edu/mirror/twisted/Twisted/2.4/Twisted_NoDocs-2.4.0.win32-py2.4.exe) but it doesn’t even recognise that I’ve got Python installed, so I don’t know how I can possibly help it out. [The internet suggests](http://www.velocityreviews.com/forums/t339677-twisted-nonadmin-installation.html) that this is a problem with user vs. Administrator rights. For a third party library for a programming language? Are they taking the piss? Do I need to make sure that when I use CPAN or access a JAR file I’m a particular user, no! Absolute madness.

This, of course, was **after** I managed to install the zope.interface package – the tarball I downloaded from the Twisted website included it but python setup.py install didn’t work, so I had to download it separately from <http://zope.org/Products/ZopeInterface>.

So anyway, despite no obvious indications about it on the Python website I guess my only options are

- uninstall Python 2.4 and install Python 2.3 and see if that’s any better, or
- try and make the build process compile for [mingw](http://www.mingw.org/) instead or
- play with the registry keys as [detailed in this thread](http://www.velocityreviews.com/forums/t339677-twisted-nonadmin-installation.html)

but I just don’t get it. Why the hell do I need a C++ compiler or do some horrendous registry hacking to be able to use a Python library?

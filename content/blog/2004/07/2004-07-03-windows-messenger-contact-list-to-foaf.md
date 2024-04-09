+++
title = "Windows messenger contact list to FOAF"
date = "2004-07-03 16:29:00"
slug = "windows-messenger-contact-list-to-foaf"
[taxonomies]
tags = ['general']
[extra]
show_comments = "false"
comments_file = "/content/blog/2004/07/2004-07-03-windows-messenger-contact-list-to-foaf-comments.csv"
+++

There’s now more than one way to convert your MSN Messenger contact list into FOAF.

Phil McCarthy’s [msn2foaf](http://chimpen.com/msn2foaf/) has been around for quite a while and is <q cite-="">a Perl botlet which logs onto your MSN Messenger account and outputs your contact list as friend-of-a-friend RDF data</q>, which was [extended in March 2003 by Bill Kearney to hash the mailboxes](http://www.ideaspace.net/users/wkearney/archives/000183.html).

What I hadn’t realised about MSN Messenger is that it actually allows you to save your contact list to disk as a .ctt file, which is just plain, human-readable XML. [Frank Geerling](http://frank.rollebol.com/ "Frank's homepage") has written a python script which takes this ctt file and converts it to FOAF – there’s even an [easy-to-use web interface](http://frank.rollebol.com/articles/scriptlets/ctt2foaf.py).

It works well and will hash or not hash the email addresses of your contacts as an option. The only criticism I have isn’t even Frank’s fault – the ctt file outputted by Messenger only includes your contacts’ addresses, not their nicknames. So whilst the resultant FOAF is useful for smushing purposes, it’s of little use on its own.

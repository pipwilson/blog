+++
title = "Accesskeys that aren't"
date = "2007-08-31 17:12:00"
slug = "accesskeys-that-arent"
[taxonomies]
tags = ['accessibility','email','general','usamajility']
[extra]
show_comments = "false"
comments_file = "/content/blog/2007/08/2007-08-31-accesskeys-that-arent-comments.csv"
+++

My work webmail is provided by [IMP](http://www.horde.org/imp/).

<ins datetime="2007-08-31T17:39Z"></ins>

This bit is wildly wrong but is what I saw for a variety of Greasemonkey-related reasons.

  
<del datetime="2007-08-31T17:39Z"></del>

Like Gmail it provides keyboard shortcuts for just about everything you might want to do with an email. Unfortunately, [like Gmail](http://diveintomark.org/archives/2004/04/10/gmail-accessibility), instead of just adding real accesskeys it uses JavaScript to interrupt key events and see if they match any of the IMP pre-set ones.

<del datetime="2007-08-31T17:39Z">Compounding this is that the keystrokes IMP recognises as shortcuts are all ALT+<key>, which is not only exactly the same as most default accesskey implementations (but without [the accessibility benefits](http://diveintoaccessibility.org/day_15_defining_keyboard_shortcuts.html)), but </key></del>one of the ones it recognises is ALT+D, which in Internet Explorer and Firefox has been a shortcut for “address bar” for at least a decade.

In IMP it deletes the mail you’re reading.

Thanks, IMP!

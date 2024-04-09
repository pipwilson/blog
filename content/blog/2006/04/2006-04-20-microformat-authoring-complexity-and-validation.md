+++
title = "Microformat authoring complexity and validation"
date = "2006-04-20 11:55:00"
slug = "microformat-authoring-complexity-and-validation"
[taxonomies]
tags = ['general']
[extra]
show_comments = "false"
+++

There’s a little bit going around at the moment about microformat validation; for example Norm Walsh on [Validating microformats](http://norman.walsh.name/2006/04/13/validatingMicroformats), Bill de hÓra thinks it matters [Not a whit](http://www.dehora.net/journal/2006/04/not_a_whit.html) and the mailing list is going apeshit.

Is it true? Is validation not important? If, like Bill says, it’s important at publication time, then surely it **is**.

It’s important to note the stated intention of microformats to be <q cite="http://microformats.org/">Designed for humans first and machines second</q>. Whilst this might be true for the simple microformats like rel-tag rel-nofollow and so on, it’s certainly not true for the compound/complex microformats like hCard, for which there are already multiple tools for creation. I would go further and say that writing compound microformats by hand, as part of a normal HTML page is *harder* than writing a bare XML representation of your data.

Note that I **do** think that uF are a good idea, but the humans-firstness, in the context of uF like hCard is a joke and that without even the tiniest validation (of the uF, not the HTML) except to see if it works in multiple tools, it’s like actually *wanting* to smash your face repeatedly into a mirror.

I’ll accept a refutation when someone writes the equivalent of Mark Pilgrim’s [Universal Feed Parser](http://feedparser.org/).

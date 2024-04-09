+++
title = "Personal finance tracking"
date = "2008-07-28 22:59:10"
slug = "personal-finance-tracking"
[taxonomies]
tags = ['banks','general','money','wesabe']
[extra]
show_comments = "true"
+++

How much money do you have and how do you find out what you’re spending it on?

![account-summary-mesabe_1217278643948.png](http://philwilson.org/blog/wp-content/uploads/2008/07/account-summary-mesabe_1217278643948.png)

This is the question that irks me. The financial free software world is centred around [GnuCash](http://www.gnucash.org/) which is all about detailed tracking of your finances – well, as far as I’m concerned my bank already does this for me so all I need is the visualisation from that data.

What my bank (Barclay’s) actually allows me to do is download up to the last three months’ worth of data in [OFX format](http://en.wikipedia.org/wiki/OFX).

So, right now I’m using [ofx-parser](http://code.google.com/p/ofx-parser/), a Ruby library, to process the data and import into into a sqlite database. I’m then using [CodeIgniter](http://codeigniter.com/) to display a list of my transactions and the [Yahoo! Charts](http://developer.yahoo.com/yui/charts/) library to graph them (the CodeIgniter PDO library needed some patching to support sqlite properly before I could make much progress).

Unfortunately Barclay’s don’t put a timestamp on the transactions, only a date, so the graphed balance isn’t always accurate – in the screenshot above you can see that it looks as though my account has twice dropped below zero although no such thing ever happened. Obviously this is part due to my woeful lack of graphing skills but the lack of time is still pretty annoying.

I can so far group and plot my expenditures and savings. The next set of features will be tagging by type and vendor recognition at which point I’ll be able to work out and plot exactly how much I’m spending on food over time and with which retailers.

This is all inspired by [Wesabe](http://www.wesabe.com/) which is an excellent application but despite their reassuring [Data Bill of Rights](http://www.wesabe.com/page/security) I just don’t feel comfortable uploading all my bank details and transactions to an American company once every three months.

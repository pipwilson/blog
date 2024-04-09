+++
title = "Teaching website shambles"
date = "2006-11-16 00:09:00"
slug = "teaching-website-shambles"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
+++

[![](http://philwilson.org/images/tes-outofmemory-thumb.png "TES throwing an Out Of Memory Exception")](http://philwilson.org/images/tes-outofmemory.png)

The [Times Educational Supplement](http://www.tes.co.uk/) is the UK’s premier newspaper for those working in the world of primary, secondary and further education. They have a thriving online community, with an especially busy forum.

The <span class="caps">TES</span> used to be owned by [News International](http://www.newsinternational.co.uk/), the [Murdoch](http://en.wikipedia.org/wiki/Rupert_Murdoch) stable, but was sold at the end of last year and has since undergone “restructuring” (i.e. everyone who didn’t walk out was sacked) and so they’re pushed for cash.

They have just rebranded and redesigned and relaunched their website.

Dear God, what a mess. I really hope they didn’t pay very much for it, they need the money.

The new <span class="caps">TES</span> logo and some top-level navigation takes up the top 200 pixels (that’s 3 inches on my 19” screen at 1024×768). Incidentally, my wife, who is a teacher, has a laptop whose screen is 7 inches tall – that means almost 50% of any page she visits is instantly wasted.

It gets much, much worse and in fact it’s so painful that I’ll just skim the highlights and allow you to [revel in the full horror yourselves](http://www.tes.co.uk/)

At 1024×768, none of the content of [the forums](http://www.tes.co.uk/section/staffroom/list_threads.aspx?path=/Opinion/) is visible without scrolling because every single forum page has over a thousand pixels’ height worth of navigation (that includes the awful banner).

Despite the fact that there are actually over 50 forums, it’s impossible to tell, without scrolling down the page to tell which one you’re in at any given time (no clues in page title, headings, etc.).

At launch it didn’t work in Firefox or Opera (they use JavaScript for navigation between forums and used IE-specific code), and if you could get to a page, half of the <span class="caps">CSS</span> was not applied. Even people using the <span class="caps">AOL</span> browser (which is just embedded IE) were complaining of broken functionality.

In order to try and raise some cash, they have inserted larger ads at the right-hand side of every page. These are an un-resizable 300 pixels wide and only take up the first few hundred pixels of height for any page, meaning that if you’re in a forum thread, there’s a massive amount of white space going unused (not bad in itself, but given the wasted space elsewhere, a crying shame).

The app that powers it all is written in .Net and just browsing around I’ve already seen a couple of `System.Object not found` error messages (the default <span class="caps">IIS</span> ones in red text) and one `OutOfMemoryException`. That is so, so poor.

That just skims the UI of course, I’m actually too afraid to talk about the source code in case it comes to life and kills me in my sleep – something that over-complicated simply **has** to be almost sentient. It looks like it’s been produced via <span class="caps">XSLT</span> given some of the clues in the source, but surely someone who put that together wouldn’t then be capable of liberally littering the source with `document.write` and embedded <span class="caps">CSS</span> styles on element to which they’ve just assigned a class? Validating a forum page as <span class="caps">HTML 4</span>.01 Transitional [gives you 190 errors](http://validator.w3.org/check?verbose=1&uri=http%3A%2F%2Fwww.tes.co.uk%2Fsection%2Fstaffroom%2Flist_threads.aspx%3Fpath%3D%2Fcymru%2F). I can’t imagine daring to call myself a web developer and not running some basic validation on my output – I might even not make it perfectly valid, but over 100 isn’t even trying!

I would imagine that it didn’t help that they launched on a Friday, meaning a full weekend for the many, many users to post thousands of comments slating the new look, feel and functionality without any response from staff. This also meant that any problems were going to be experienced during the period of heaviest usage. Bad decision, <span class="caps">TES</span>-ers!

I really can’t imagine that anyone in charge of designing the new look and feel was a user of the old forum site, which, although it did have its own problems, were relatively minor – the site was straightforward and simple to use; it’s now just frustrating on a minute-by-minute basis which is more likely to drive people away than anything else. Just shrinking the heading and moving forum navigation to the mostly unused sidebar would be a massive gain to usability. Given that in the past few days Firefox functionality has been fixed, it’ll be interesting to see if anything else is done to improve the site.

+++
title = "My subscriptions list in OPML, XOXO and Atom"
date = "2006-02-22 00:32:00"
slug = "my-subscriptions-list-in-opml-xoxo-and-atom"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
+++

For a larf, I added two quick hacks so that my Feed On Feeds installation now outputs my feed list in three formats:

- [My subscription list in OPML](http://philwilson.org/feeds/subscriptions-opml.xml) (which comes with Feed On Feeds already)
- [My subscription list in XOXO](http://philwilson.org/feeds/subscriptions-xoxo.xml)
- [My subscription list in Atom](http://philwilson.org/feeds/subscriptions-atom.xml)

Down sides:

- Generating the OPML was easy, but despite its ubiquity, I have no idea what will and won’t be able to read it.
- Generating the XOXO was harder, there’s no hBlogroll microformat, so I’ve just copied bits of what [Les Orchard has done](http://decafbad.com/blog/2005/12/01/feedrolls-in-xoxo-from-opml-via-xslt-and-url-line-magic "Feedrolls in XOXO from OPML via XSLT and URL-line Magic"), and no aggregator tools will be able to use it.
- Generating the Atom was *mostly* easy, but mandates an `updated` element per `entry`, which would need a query the other two don’t and I needed to ensure that if there wasn’t a feed description, that I was generating something else in order to fill the mandated `summary` element. Also, no aggregator tools will be able to use it for importing a list of feeds.

Up sides:

- My OPML might be able to be imported by other applications. Marvellous!
- My XOXO file can be displayed on the web straight away, as-is. Marvellous!
- My Atom file [validates](http://feedvalidator.org/check.cgi?url=http%3A%2F%2Fphilwilson.org%2Ffeeds%2Fsubscriptions-atom.xml), so can certainly be parsed by any tool that understands Atom. Marvellous!

Conclusion:

Subscription lists, three years on from when I first started using them, are just as crap as they were back then. If I were a tool writer now, starting from scratch, I’d be exporting and importing subscription lists in the form of Atom files. Any tool that wants to understand that file can transform it into whatever bastardised version of OPML it understands. I will definitely be adding Atom feed list import to my copy of Feed On Feeds.

On a related note, a few weeks ago [Danny Ayers was talking about using del.icio.us for reading lists](http://dannyayers.com/archives/2006/02/07/delicious-reading-lists/) and in November Aristotle Pagaltzis published [an XSLT for converting from del.icio.us API results to Atom](http://plasmasturm.org/code/delicious-atom/).

I’ll leave you to join up the dots.

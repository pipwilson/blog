+++
title = "Ambient wifi rabbits"
date = "2006-03-22 00:11:00"
slug = "ambient-wifi-rabbits"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
comments_file = "/content/blog/2006/03/2006-03-22-ambient-wifi-rabbits-comments.csv"
+++

Nine months ago [I was looking for a good ambient presence display](http://philwilson.org/blog/2005/06/ambient-presence-display.html), which could also be used for things like build status monitoring, but I didn’t really come up with anything.

[![Nabaztag on Flickr](http://static.flickr.com/19/112984923_5136f544dc_m.jpg)](http://www.flickr.com/photos/michal_hargev/112984923/)

A couple of days ago, via [Chris Heathcote’s del.icio.us links](http://del.icio.us/ChrisDodo) I found out about the [Nabaztag](http://www.nabaztag.com/vl/FR/index.jsp). It’s an 11” tall wifi-controlled rabbit with lights, motorised ears and a voice-capable speaker and also has a [published web-based API ](http://www.nabaztag.com/vl/FR/gfx/2/Documentation%20API-revA001_uk.pdf "PDF") so that you can send it commands via the manufacturer’s website. In summary: it’s brilliant.

Using the API, [Harper Reed](http://www.nata2.org/) (of [skinnycorp](http://www.skinnycorp.com/), the people behind [Threadless](http://threadless.com/)) has put together [a brief web form from which you can easily send commands to your nabaztag](http://dopeman.org/nabaztag/), there are also [perl](http://search.cpan.org/%7Ejeteve/Nabaztag-0.01/lib/Nabaztag.pm) and [ruby](http://opensource.reevoo.com/2006/03/13/release-nabaztag-01/) libraries for scripting it.

The French [Nabazweb](http://nabaztag.free.fr/) site (not associated with Violet, the Nabaztag manufacturer) has a form which lets you subscribe your rabbit to the BBC News front page using RSS (click Démos, then scroll to the bottom of the iframe) and there’s even a Nabaztag web proxy called [NabazClapier](http://nabaztools.sourceforge.net/nabazclapier-en.html) which lets you use parts of the API without going via Violet’s servers.

See

- [the photos on Flickr](http://www.flickr.com/photos/tags/nabaztag/)
- [nabaztag tag on del.icio.us](http://del.icio.us/tag/nabaztag)
- [Nabaztools](http://nabaztools.sourceforge.net/), trying to collect Nabaztag tools together
- [the blog](http://guim.typepad.com/nabazblog/) (in French)
- its [brief appearance in Make](http://www.makezine.com/blog/archive/2006/03/virtual_bunny_to_real_world_wi.html?CMP=OTC-0D6B48984890)

Obviously since it’s completely scriptable you could easily write bots for it so you could control it over instant messenger, or let it waggle its ears when one of your friends updates their blogs, or tell you when your build fails (as in fact [Reevoo do](http://opensource.reevoo.com/2006/03/13/release-nabaztag-01/)) or whatever you like!

Pixmania [are currently selling them for £65](http://www.pixmania.co.uk/uk/uk/180596/art/nabaztag/communicating-rabbit-wifi.html#fichetechnique) which is quite a bit, but I’m sure that I’ll owe myself a present or something in a few months’ time 🙂

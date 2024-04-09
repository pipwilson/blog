+++
title = "Peer-to-peer social networking"
date = "2005-11-21 13:16:00"
slug = "peer-to-peer-social-networking"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
+++

Social networking sites and functionalities are a means to an end. Personally, I want to use a social network to describe, filter and prioritise information in an aggregator (or, if you like, a “Digital Lifestyle Aggregator”).

Boris Mann has written [Distributed Social Networking](http://www.bmannconsulting.com/blog/bmann/distributed-social-networking) a nice speculative piece on the use of XMPP as a transport for passing XML-formatted data, quoting from and linking to Ton Zijlstra’s [How to Get P2P Social Networking](http://www.zylstra.org/blog/archives/001818.html).

The key to successful networks, and online networks in particular is that they require an object to connect them. For example people are linked in Flickr by photos, in del.icio.us by bookmarks and in the real world by the school they went to, their job or their hobbies. This is why, in “pure” social networking sites like Orkut and Friendster, communities form; where people are linked directly to other people, they need to artificially recreate the bonds between them.

Ton specifcally says <q cite="http://www.zylstra.org/blog/archives/001818.html">FOAF isn’t ready for this kind of thing I think</q>, which is interesting. I don’t think that RDF is the panacea for all web ills, but I do think that FOAF has some strong and clear benefits, such as simple and flexible integration of different data sources, in particular ones which come from different social networking applications and which use different objects as their pivot point, which would make its use as the default import/export to and from social networking tools seem sensible. In particular what could be useful is [the work that Dan Brickley and Leigh Dodds have been doing on SPARQL-over-XMPP](http://rdfweb.org/viewcvs/viewcvs.cgi/foafproject/htdocs/2005/code/foaftown/) which allows for querying RDF data stores (such as FOAF) using Jabber clients; of course, the tool doing querying and display doesn’t have to be a chat client, just a tool which uses XMPP as its communication protocol.

I’m not entirely sure what Ton’s peer-to-peer bit is all about. If you are to provide your network data only whilst you are online and using a particular app, as opposed to publishing your network on the web somewhere (with appropriate encryption), then anyone one else in the network trying to glean meaningful data from the network is going to have a tough time. Instead, the publishing of data and querying over XMPP seems like a more reasonable approach.

There is already a JEP for representing a user profile ([JEP-0154](http://www.jabber.org/jeps/jep-0154.html)) which stores all sorts of weird and wonderful things such as [whether you’re a smoker or not](http://www.jabber.org/jeps/jep-0154.html#smoker) (which seems a slightly bizarre thing to define – why this and not other things such as left/right-handed/ambidextrous?), but nothing, as far as I’ve seen for representing links between people (or XMPP resources), and I think this is correct. It would probably be a mistake to try and define this with a JEP, instead using another specialised format for the definition, but using XMPP for the transport (much as [PubSub](http://www.pubsub.com/) use [Atom-over-XMPP](http://www.xmpp.org/drafts/draft-saintandre-atompub-notify-04.html)).

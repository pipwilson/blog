+++
title = "Storing Atom"
date = "2006-09-04 16:32:00"
slug = "storing-atom"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
+++

So then, the [Atom Syndication Format](http://en.wikipedia.org/wiki/Atom_(standard)) is a great standard for storing data but once you start getting a large number of entries (even if it’s only in the hundreds or thousands), does storing your data as an XML file start to become unwieldly? A small part of my brain starts to cry at the thought, so I’m going to guess “yes” but there must surely be loads of companies and individuals doing this, so how do they manage?

Although I’ve previously harrumphed over [native XML support in databases](http://www.oracle.com/technology/tech/xml/xmldb/index.html), is this a reasonable use-case? Storing each `atom:entry` in a single field in a database row would seem to make some sort of sense because you could use the unchanging `entry:id` and `entry:updated` as a key for each version of the entry. I imagine the problem then might be one of containing the data in the XML and making sure it didn’t start spilling out into its own fields and tables (things like tags and categories for example).

I know that on previous occassions, Joe Gregorio [has dreamed about this](http://www.xml.com/pub/a/2005/09/21/atom-store-web-database.html) and I guess now that [Google](http://code.google.com/apis/gdata/), [WordPress](http://www.snellspace.com/wp/?p=404) and [Movable Type](http://www.benhammersley.com/undocumented_features/atom_api_in_movable_type.html) are effectively Atom Stores all of their very own but aren’t designed as such and just provides APIs to their own data stores.

I notice that the MySQL 5.1 beta has [its own XML functions](http://dev.mysql.com/doc/refman/5.1/en/xml-functions.html) so maybe it really is time to start taking a look at this approach, although most of the Java apps I work on use Hibernate at some level, and I’m not really sure how well it supports XML data fields (if at all).

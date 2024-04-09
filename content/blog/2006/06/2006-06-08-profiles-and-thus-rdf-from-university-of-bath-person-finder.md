+++
title = "Profiles (and thus RDF) from University of Bath Person Finder"
date = "2006-06-08 16:37:00"
slug = "profiles-and-thus-rdf-from-university-of-bath-person-finder"
[taxonomies]
tags = ['general']
[extra]
show_comments = "false"
+++

Work’s staff and student directory has just had an overhaul, and I finally got the change in to add the [hCard profile](http://www.w3.org/2006/03/hcard) to the &lt;head&gt; of the page.

This means that because the page is marked up with the hCard microformat, you can pass [a page like mine](http://www.bath.ac.uk/person/819130 "My entry in Person Finder") to a tool like the [RDF in XHTML processor](http://www.w3.org/2003/11/rdf-in-xhtml-demo) and get [RDF out the other end](http://www.w3.org/2005/08/online_xslt/xslt?xslfile=http%3A%2F%2Fwww.w3.org%2F2003%2F11%2Frdf-in-xhtml-processor&xmlfile=http%3A%2F%2Fwww.bath.ac.uk%2Fperson%2F819130).

Don’t say I never do anything for you.

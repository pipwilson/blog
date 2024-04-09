+++
title = "Atom extensions and FOAF"
date = "2006-03-03 14:01:00"
slug = "atom-extensions-and-foaf"
[taxonomies]
tags = ['general']
[extra]
show_comments = "false"
+++

James Snell has posted a new Internet Draft for expanding the details of an atom:author called [Atom Syndication Format Person Extensions](http://www.ietf.org/internet-drafts/draft-snell-atompub-author-extensions-00.txt). In it he gives examples of embedding details with hCard like so:

```
<pe:profile type="xhtml"
       scheme="http://microformats.org/wiki/hcard">
       <div xmlns="http://www.w3.org/1999/xhtml">
         <div class="vcard">
           <a class="url fn" href="http://example.org/">
             John Doe
          </a>
           <div class="org">Example, Org</div>
         <div>
       </div>
     </pe:profile>
```

He also gives an example of how to link to a more detailed FOAF file:

```
<pe:profile type="application/rdf+xml"
       src="http://example.org/johndoe.foaf"
       scheme="http://xmlns.com/foaf/0.1/" />
```

I’m not sure if this is really a good idea or not. I can see how it would be useful, but is it the right solution? The only alternative I can really think of is a &lt;link&gt; from an HTML page referenced in an `alternate` in the feed, but then this would only work for entries which *do* have an HTML alternative, and perhaps doesn’t deal with cases when you might also want to use one of his other Atom-related drafts such as [Syndication Format Revision Tracking](http://www.ietf.org/internet-drafts/draft-snell-atompub-revision-00.txt) where a user might have made changes in the past, but their contribution isn’t available from an alternative HTML version.

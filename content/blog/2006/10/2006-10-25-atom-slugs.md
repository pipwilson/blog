+++
title = "Atom slugs"
date = "2006-10-25 11:44:00"
slug = "atom-slugs"
[taxonomies]
tags = ['general']
[extra]
show_comments = "false"
comments_file = "/content/blog/2006/10/2006-10-25-atom-slugs-comments.csv"
+++

> 9.6 The Slug: Header
> 
> Slug is a HTTP entity-header whose value is a “slug” – a short name that can be used as part of the URI for a Member Resource.
> 
> When posting an entity to a Collection to add a new Member, the server MAY use this information when creating the Member URI of the newly-created resource, for instance by using some or all of the words in the last URI segment. It MAY also use it when creating the atom:id or as the title of a Media Link Entry (see Section 9.5.).
> 
> Servers MAY ignore the Slug entity-header and MAY alter its value before using it. For example, the server MAY filter out some characters or replace accented letters with non-accented ones, spaces with underscores, etc.

What a terrible idea.

I will be recommending internally that we never, ever use this header.

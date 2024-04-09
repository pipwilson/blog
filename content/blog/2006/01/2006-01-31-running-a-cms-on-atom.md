+++
title = "Running a CMS on Atom"
date = "2006-01-31 17:13:00"
slug = "running-a-cms-on-atom"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
comments_file = "/content/blog/2006/01/2006-01-31-running-a-cms-on-atom-comments.csv"
+++

At work I have the need to very quickly design and roll out an insanely basic CMS for a website.

There is no official workflow, all content will be in XHTML, people need to be able to create new documents, and load, edit and save existing documents, with some degree of metadata surrounding it.

I’m currently pretty convinced that my editor will be [TinyMCE](http://tinymce.moxiecode.com/).

My first thought is to write a very simple Atom backend, where each page on the website is stored as an entry in a feed along with appropriate metadata, and the editor creates new entries or edits existing ones.

The problem then is that pages appear within sections on the site. Sections can be easily defined as categories in each entry, but how do I administer the list of sections itself? At some point when creating or editing an entry, a user will need to be able to choose which section the entry belongs in; this implies to me a separate list of categories, perhaps stored as [XOXO](http://microformats.org/wiki/xoxo) ? But then what happens to all the pre-assigned entries if I change the name of an item in the XOXO file?

What about if sections are physical directories, each containing a single Atom file, which contains the pages for that section? Or is that too much overlap between the abstraction and the implementation?

Any hastily-thought ideas and suggestions welcome!

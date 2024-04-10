+++
title = "Parsing Atom with libxml2"
date = "2007-11-26 00:45:00"
slug = "parsing-atom-with-libxml2"
[taxonomies]
tags = ['atom','blogger','general','libxml2','python','real']
[extra]
show_comments = "true"
comments_file = "/content/blog/2007/11/2007-11-26-parsing-atom-with-libxml2-comments.csv"
+++

Whilst trying to parse some Atom (my Blogger backup) with libxml2 I appear to have run into the same problem that Aristotle hit two years ago in [XPath vs the default namespace: easy things should be easy](http://plasmasturm.org/log/259/), to wit: <q cite="http://plasmasturm.org/log/259/">The story is that you can’t match on the default namespace in XPath.</q>

```python
>> import libxml2
>>> doc = libxml2.parseFile("/home/pip/allposts.xml")
>>> results = doc.xpathEval("//feed")
>>> len(results)
0
```

Unbelievable.

Immediate potential solutions:

1. XSLT my Atom document to add “atom:” to all my default-namespaced elements
2. use an entirely different method of parsing
3. remove the atom namespace declaration from the top of the file
4. something else

Option 3 looks like the only sane route to take in this one-off job, but I’m quite surprised that I have to do it at all.

<ins>Actually, this turned out to be my fault – I was parsing two documents at the same time, one with a namespace declaration set correctly (for parsing my Atom file), and one with no namespaces set. I used the latter for my xpath query, which clearly didn’t work – many thanks to everyone who left a comment!</ins>
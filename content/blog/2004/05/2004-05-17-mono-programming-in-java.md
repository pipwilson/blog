+++
title = "Mono programming in Java"
date = "2004-05-17 14:27:00"
slug = "mono-programming-in-java"
[taxonomies]
tags = ['general']
[extra]
show_comments = "false"
+++

Ed Dumbill’s [Small slices of Mono wonder](http://usefulinc.com/edd/blog/2004/5/15#20:42) post mentions IKVM:

> IKVM is a translator from Java bytecode to CIL bytecode that will run Java programs in Mono. It’s a technical marvel.

Indeed.

Of particular interest to me is that I could tie an existing RDF-based Java app which uses Jena into the Mono bluetooth stack or dashboard API to provide some amazing functionality without having to actually rewrite all my code. This kind of interop is really impressive, and for projects like Mono means that a pre-existing group of developers can write for it without having to learn a whole new language which will probably increase both initial and long-term uptake rates.

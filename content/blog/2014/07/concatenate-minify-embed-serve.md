---
title: "Concatenate, minify, embed, serve."
slug: concatenate-minify-embed-serve
date: 2014-07-03 12:29:57
taxonomies:
  tags:
    - development
    - tools
  collections:
    - university of bath
extra:
  originalLocationName: The University of Bath's Web Services Blog
  originalUrl: http://blogs.bath.ac.uk/digital/2014/07/03/concatenate-minify-embed-serve/
---
Building a modern website which also performs well is hard. The amount of JavaScript and CSS [we add to our pages is going up](http://httparchive.org/trends.php?s=All&minlabel=Jul+15+2012&maxlabel=Jun+15+2014), but we still need to keep them loading quickly.

Tools like [Grunt](http://gruntjs.com/) and [Gulp](http://gulpjs.com/) help us manage these expectations by automating some of the hard work, and so it was that the development team spent Thursday in Bath's co-working hub, [The Guild](http://www.theguildhub.co.uk/en-gb), learning about how to make best use of these tools from University of Bath alumni [Jack Franklin](https://twitter.com/jack_franklin) and [Ollie Jennings](https://twitter.com/olliejennings).

In the past we've used [a similar tool](https://en.wikipedia.org/wiki/Apache_Ant) for automating some of the hard work of managing and deploying back-end applications, so we were really interested in getting an in-depth look at tools designed for doing the same thing for the front-end bits of our sites.

Grunt and Gulp are both JavaScript-based build tools. They do pretty much the same job as one another, but with a different approach to task processing (Grunt is a synchronous build tool, Gulp is asynchronous), and using a different syntax.

Using either of the two it is trivial to [convert SASS to CSS](https://github.com/gruntjs/grunt-contrib-sass), [concatenate your JS and CSS](https://github.com/gruntjs/grunt-contrib-concat), [minify them](https://github.com/gruntjs/grunt-contrib-uglify) and then [automatically add all your JS and CSS to your HTML in specific locations](https://github.com/klei/grunt-injector).

The session learning about the two tools was excellent, with everyone in the team learning lots, and it's likely that we'll soon start working with Grunt on packaging up and delivering our front-end assets!


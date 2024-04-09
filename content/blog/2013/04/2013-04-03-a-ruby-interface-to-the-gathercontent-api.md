+++
title = "A Ruby interface to the GatherContent API"
date = "2013-04-03 22:53:08"
slug = "a-ruby-interface-to-the-gathercontent-api"
[taxonomies]
tags = ['api','gathercontent','general','ruby']
[extra]
show_comments = "false"
+++

[GatherContent](https://gathercontent.com/) is an awesome tool for planning, structuring and collaborating on web content (they have a [short video demo](https://gathercontent.com/how-it-works)).

They have [a read-only API](http://gathercontent.helpjuice.com/questions/26611-How-do-I-use-the-API), but only a couple of implementations, so [here is mine, in Ruby](https://github.com/pipwilson/gathercontent-api-ruby).

The API is read-only and HTTP POST-based, and so I use [HTTParty](http://httparty.rubyforge.org/) to manage that side of things, and `method_missing` to emulate the relevant API calls, and then [Hashie](https://github.com/intridea/hashie) to convert the returned Hash into an object. It’s very simple, so give it a try.

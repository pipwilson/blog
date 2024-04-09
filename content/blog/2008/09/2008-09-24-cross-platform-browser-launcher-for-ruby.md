+++
title = "Cross-platform browser launcher for Ruby?"
date = "2008-09-24 21:28:19"
slug = "cross-platform-browser-launcher-for-ruby"
[taxonomies]
tags = ['general','ruby python']
[extra]
show_comments = "true"
comments_file = "/content/blog/2008/09/2008-09-24-cross-platform-browser-launcher-for-ruby-comments.csv"
+++

In Python, you can do this:

```
import webbrowser
webbrowser.open_new(<a href="http://philwilson.org/blog">http://philwilson.org/blog</a>)
```

and lo! it will open your default browser at that URL whether you are on Windows, Linux or Mac.

I can’t find the same functionality in Ruby anywhere. I notice that even [Shoes](http://shoooes.net/) has its own native C implementation (check out the `shoes_browser_open method` in each of the platform-specific files in [http://github.com/why/shoes/tree/master/shoes/native](http://github.com/why/shoes/tree/master/shoes/native "http://github.com/why/shoes/tree/master/shoes/native")).

Does this really mean I’ll have to implement my own? Or have I simply missed the bundled one? Google really has not been my friend on this.

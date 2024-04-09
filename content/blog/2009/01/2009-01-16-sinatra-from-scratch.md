+++
title = "Sinatra from scratch"
date = "2009-01-16 23:00:19"
slug = "sinatra-from-scratch"
[taxonomies]
tags = ['mongrel','rack','ruby','ruby','sinatra']
[extra]
show_comments = "false"
comments_file = "/content/blog/2009/01/2009-01-16-sinatra-from-scratch-comments.csv"
+++

I wrote a small Ruby app the other day which was chucking out JSON which was being parsed by some PHP.

So I thought I’d convert it to all-Ruby using [Sinatra](http://sinatra.rubyforge.org/) (my first real attempt at a Ruby web framework that’s not Hello World).

Installation was harder than expected on my clean Ubuntu box, but for reference:

```
gem install 1.8-dev
gem install mongrel
gem install rack --version 0.4
gem install sinatra
```

It was the third line which really caught me out – Sinatra is bound to version 0.4 of [Rack](http://rack.rubyforge.org/), even though it’s at 0.9.1 right now!

Everything seems fine so far, I’ll post a URL if I ever get it running!

<ins></ins>

update: [Sinatra 0.9 was released](http://blade.nagaokaut.ac.jp/cgi-bin/scat.rb/ruby/ruby-talk/325255) two days after I wrote this, and it is now dependent on Rack 0.9.1 so the “–version 0.4” is no longer needed

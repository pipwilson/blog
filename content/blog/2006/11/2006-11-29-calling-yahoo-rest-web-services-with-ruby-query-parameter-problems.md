+++
title = "Calling Yahoo REST web services with Ruby query parameter problems"
date = "2006-11-29 14:07:00"
slug = "calling-yahoo-rest-web-services-with-ruby-query-parameter-problems"
[taxonomies]
tags = ['general']
[extra]
show_comments = "false"
comments_file = "/content/blog/2006/11/2006-11-29-calling-yahoo-rest-web-services-with-ruby-query-parameter-problems-comments.csv"
+++

<ins datetime="2006-11-29T15:21:21Z"></ins>

I’m an idiot and `req = Net::HTTP::Get.new(url.path+'?'+url.query)` is my friend.

<del datetime="2006-11-29T15:21:21Z"></del>

Just playing around with Ruby and the [Yahoo Web Services](http://developer.yahoo.com/ruby/ruby-rest.html). The example they give for calling a web service is this:

```
require 'net/http'

url = 'http://api.search.yahoo.com/WebSearchService/V1/webSearch?appid=YahooDemo&query=madonna&results=1'
resp = Net::HTTP.get_response(URI.parse(url)) # get_response takes an URI object

data = resp.body
```

I am behind a proxy at work, so my code looks like this:

```
require 'net/http'

@proxy_addr = 'wwwcache.bath.ac.uk'
@proxy_port = 3128

url = URI.parse('http://api.search.yahoo.com/WebSearchService/V1/webSearch?appid=YahooDemo&query=madonna&results=1')

req = Net::HTTP::Get.new(url.path)
res = Net::HTTP::Proxy(@proxy_addr, @proxy_port).start(url.host, url.port) {|http|
    http.request(req)
}

data = res.body

puts data
```

The response I get is:

```
<?xml version="1.0" encoding="UTF-8"?>
<Error xmlns="urn:yahoo:api">
  The following errors were detected:
  <Message>invalid value: appid (empty or missing)</Message>
  <Message>invalid value: query (empty or missing)</Message>
</Error>
<!-- ws01.search.re2.yahoo.com uncompressed Wed Nov 29 05:54:50 PST 2006 -->
```

So the query parameters are being stripped from the GET request. I have no idea why. Any ideas? I’ve not had this problem with making queries through our proxy, although a look with [Wireshark](http://www.wireshark.org) could prove that they’re making it through.

<ins datetime="2006-11-29T14:25:25Z"></ins>

Oops – I think I’m actually stripping the parameters myself there by creating a new Get using `url.path` but even changing to just do a `puts http.request_get('WebSearchService/V1/webSearch?appid=YahooDemo&query=madonna&results=1').body` doesn’t work, which I thought might have had a better chance.

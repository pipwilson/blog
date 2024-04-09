+++
title = "Requesting a URL with Python"
date = "2017-04-16 12:17:09"
slug = "requesting-a-url-with-python"
[taxonomies]
tags = ['general','http','python']
[extra]
show_comments = "false"
comments_file = "/content/blog/2017/04/2017-04-16-requesting-a-url-with-python-comments.csv"
+++

After a year at the bottom of my drawer, I have busted out my [Pimoroni Flotilla](https://shop.pimoroni.com/collections/flotilla/products/flotilla-mega-treasure-chest). It has [a Python API](https://github.com/pimoroni/flotilla-python) and so I figured this was as good a time as any to use Python3 for the first time in many years.

Part of the kit is [an LED matrix](https://shop.pimoroni.com/collections/flotilla/products/flotilla-matrix). I want to use this to display how many people there are in space right now.

There is a great website which will answer this question ([howmanypeopleareinspacerightnow.com](http://www.howmanypeopleareinspacerightnow.com/)) which also has [a JSON endpoint](http://www.howmanypeopleareinspacerightnow.com/peopleinspace.json). It turns out there are lots of ways of getting this information from Python. Here are three I tried.

requests
--------

[Requests](http://docs.python-requests.org/en/master/) calls itself “HTTP for Humans”, and is mostly short and concise, but I need to send some extra headers with the request because of some user-agent filtering on the server.

```

import requests

url = 'http://www.howmanypeopleareinspacerightnow.com/peopleinspace.json'
headers = {'user-agent': 'space-requestor/0.1'}

response = requests.get(url, headers=headers)

print(response.status_code) # 200
print(response.text) # response body as text

inspacenow = response.json() # response body as JSON object

print(inspacenow["people"][0]["name"]) # 'Peggy Whitson'

```

<a id="urllib3_28"></a>urllib3
------------------------------

[urllib3](http://dillinger.io/) describes itself as a ‘powerful, sanity-friendly HTTP client’ and it’s more verbose than I’d like for my simple case, but feels like it might scale into a larger application quite well.

```

import urllib3
import json

url = 'http://www.howmanypeopleareinspacerightnow.com/peopleinspace.json'

http = urllib3.PoolManager()
response = http.request('GET', url)

print(response.status) # 200
print(response.data) # response body as byte string

inspacenow = json.loads(response.data.decode('utf-8')) # response body as JSON object

print(inspacenow["people"][0]["name"]) # Peggy Whitson


```

unirest
-------

[Unirest](http://unirest.io/) is a collection of eight HTTP client libraries for multiple programming languages, but supporting near-identical request idioms, which makes it easy to use if you are using multiple languages yourself.

Sadly, [the Python library](http://unirest.io/python.html), which I’ve used before very happily, [does not work with Python3](http://stackoverflow.com/questions/28251242/does-unirest-support-python3#28251394).

If it worked, the main call would have looked something like `response = unirest.get(url)`, which is a brevity I deeply appreciate!

Conclusion
----------

Requests seems very popular, and seems like a good solid choice for HTTP requests in Python3 applications. It’s what I’ll be using for my humans in space monitor!

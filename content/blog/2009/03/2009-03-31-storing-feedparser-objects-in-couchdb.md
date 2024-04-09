+++
title = "Storing feedparser objects in couchdb"
date = "2009-03-31 22:14:02"
slug = "storing-feedparser-objects-in-couchdb"
[taxonomies]
tags = ['couchdb','general','python','syndication']
[extra]
show_comments = "true"
comments_file = "/content/blog/2009/03/2009-03-31-storing-feedparser-objects-in-couchdb-comments.csv"
+++

<kbd>sudo apt-get install python-feedparser  
easy\_install jsonpickle  
sudo apt-get install couchdb  
easy\_install couchdb  
sudo couchdb</kbd>

Open a new terminal

<kbd>python  
import feedparser, jsonpickle  
from couchdb import Server  
s = Server('http://127.0.0.1:5984/')  
len(s)  
db = s.create('feeds')  
len(s)  
doc = feedparser.parse("http://feedparser.org/docs/examples/atom10.xml")  
doc\['feed'\]\['title'\]  
len(doc.feed.links)  
pfeed = jsonpickle.encode(doc)  
db.create({'feed1' : pfeed})</kbd>

outputs DOC\_ID

<kbd>cfeed = db\['DOC\_ID\_HERE'\]  
dfeed = jsonpickle.decode(cfeed\['feed1'\])  
dfeed\['feed'\]\['title'\]  
len(dfeed.feed.links)</kbd>

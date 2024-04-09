+++
title = "What's on telly instead?"
date = "2007-09-26 09:49:00"
slug = "whats-on-telly-instead"
[taxonomies]
tags = ['bbc','bbc','greasemonkey']
[extra]
show_comments = "false"
comments_file = "/content/blog/2007/09/2007-09-26-whats-on-telly-instead-comments.csv"
+++

[What’s on telly instead](http://philwilson.org/code/greasemonkey/whatsoninsteadofthis.user.js) is a stupid Greasemonkey script that displays what the BBC are broadcasting on TV and radio at the same time as an event marked up with [hCal](http://philwilson.org/code/greasemonkey/whatsoninsteadofthis.user.js). It’s very basic and only supports events where dtstart and dtend are specified using expanded [iso8601](http://www.ietf.org/rfc/rfc3339.txt) (i.e. of the format yyyy-mm-ddThh:mm:ssZ). It uses the [BBC Web API](http://www0.rdthdo.bbc.co.uk/services/api/) which means that it is “supported by <http://backstage.bbc.co.uk>“. If and when the script ever works, it looks a bit like this:

[![screenshot of script in action](http://philwilson.org/code/greasemonkey/whatsontelly.png "The script in action. Click for big version")](http://philwilson.org/code/greasemonkey/whatsontelly.png)

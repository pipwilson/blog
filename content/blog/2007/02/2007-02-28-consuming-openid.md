+++
title = "Consuming OpenID"
date = "2007-02-28 14:31:00"
slug = "consuming-openid"
[taxonomies]
tags = ['openid','openid']
[extra]
show_comments = "true"
comments_file = "/content/blog/2007/02/2007-02-28-consuming-openid-comments.csv"
+++

After a few more moments of thought following [my last post](http://philwilson.org/blog/2007/02/openid-at-university.html) I imagine what we could do is implement OpenID consumption so that rather than forcing people to be pre-approved before they get a light-weight account they can be post-approved.

That is to say, if you’ve registered for a light-weight account using an OpenID on a trusted server (let’s say anything in the .ac.uk domain) then your account is automatically processed and you can log in immediately, but you still have to provide the username or email address of someone with a full Bath account who will get an email asking if they really do vouch for you or not, with the account being revoked after five days if they’ve not been confirmed.

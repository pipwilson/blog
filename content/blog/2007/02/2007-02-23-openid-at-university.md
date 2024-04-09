+++
title = "OpenID at University"
date = "2007-02-23 17:22:00"
slug = "openid-at-university"
[taxonomies]
tags = ['openid','openid','shibboleth','university']
[extra]
show_comments = "true"
+++

Plenty of people have said in the last few days that there are more OpenID providers than there are [OpenID](http://openid.net/)-consuming services.

I have some basic code which, if enabled, would grant everyone at [the University I work at](http://www.bath.ac.uk) an OpenID. This isn’t the challenge though; where could we turn on OpenID consumption in [our services](http://www.bath.ac.uk/bucs/)?

We offer [a lightweight account](https://wiki.bath.ac.uk/display/bucswebdev/Web+Application+Access+Accounts) to external users so that researchers can use tools we provide to collaborate with other researchers here. However we don’t give them out freely and for each account application there needs to be a native user who supports the application. This gives us some technological and social-contract guarantees about who we grant access to.

It’s also a pain in the ass for anyone who does just want to sign in to look at some research data or whatever – they have to apply themselves or ask someone to apply for them first.

Universities in the UK have signed up to rolling out [Shibboleth](http://en.wikipedia.org/wiki/Shibboleth_%28Internet2%29) in the next few years which should enable anyone from one university to sign in to the services at another university. I wonder how many of the lightweight accounts we currently grant this would take care of?

So, what are possible use-cases for OpenID at a University?

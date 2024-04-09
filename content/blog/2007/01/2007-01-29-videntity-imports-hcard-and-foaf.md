+++
title = "Videntity imports hCard and FOAF"
date = "2007-01-29 21:17:00"
slug = "videntity-imports-hcard-and-foaf"
[taxonomies]
tags = ['foaf','foaf','hcard','openid','openid']
[extra]
show_comments = "true"
comments_file = "/content/blog/2007/01/2007-01-29-videntity-imports-hcard-and-foaf-comments.csv"
+++

[![Flickr hCard import](http://farm1.static.flickr.com/131/373767865_2e399159f2_m.jpg)](http://www.flickr.com/photos/pip/373767865/ "Flickr hCard import")

[Videntity.org](http://videntity.org), an OpenID server by Dan Libby, now [imports user profiles from sites](http://wiki.www.videntity.org/wiki/Importing_Remote_User_Profile) which provide your profile in [hCard](http://microformats.org/wiki/hcard) or FOAF. I hadn’t bothered previously filling in my profile details, but now that I’ve pointed it at [my Flickr profile page](http://www.flickr.com/people/pip/) and [my directory page from work](http://www.bath.ac.uk/person/819130) (both of which are marked up with hCard) it’s rather terrifyingly filled in all the details for me.

[This third-party service](http://pip.videntity.org/) now knows my full name, nickname, job, work phone number (which I’ve made private but is still readily available on my work page), and the city and country I live in.

I also pointed it at [my last.fm account](http://www.last.fm/user/pipthepixie), but that just confirmed my other details and expanded “UK” to “United Kingdom” (disclaimer: I have now added my jabber address by hand).

It’s been interesting watching these details import and just how much overlap there is between the information on them – not just in seeing how many times I’ve entered the same information but how it actually acts as a positive feedback mechanism, allowing certain bits of my profile to be marked as more reliable than others.

Also interestingly, I seem to recall trying to post to [Sam Ruby’s OpenID comments thread](http://www.intertwingly.net/blog/2007/01/03/OpenID-for-non-SuperUsers) using my videntity as a url (both http://pip.videntity.org and delegating from http://philwilson.org/blog, both of which [the OpenID tests](http://www.openidenabled.com/resources/openid-test/) seem to validate), but it never worked. Alas.

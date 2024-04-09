+++
title = "Choosing Microsoft"
date = "2004-11-22 21:45:00"
slug = "choosing-microsoft"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
comments_file = "/content/blog/2004/11/2004-11-22-choosing-microsoft-comments.csv"
+++

In his most recent ‘ongoing’ post, Tim Bray writes:

> These days, interoperation and integration are everything. You’d better have open interfaces, open networks, open services; that is, open data. Which in practical terms usually means XML.

I’ve been thinking about this a little bit recently. Not the specifics of using XML, but integration in general. I’ve been trying to work out why some system administrators love Microsoft and I’ve realised it’s because of the backend integration.

Taken alone any of the standard desktop Microsoft products are pretty poor and could probably be replaced with any other off-the-shelf product (or in some cases an open-source one, like OpenOffice), and the end-user wouldn’t really know the difference. They’d have to learn that app just the same as they’d had to learn MS Word before, but there’s no obvious difference (except maybe now they’re actually working more efficiently and with fewer bugs, but that’s by-the-by ;).

The difference really comes at the backend. If you deploy MS Exchange, you know exactly what you’re getting on both the client and the server end and you’re pretty much guaranteed that every other MS app will be able to pull data out of it. If you deploy Sharepoint you have detailed tie-in to everything available in Exchange, plus complete integration with (for example) MS Word docs, effectively it views them as its native file format.

If, on the other hand, you deployed SUSE Openexchange Server (which is probably the closest you’ll get to a direct Exchange replacement) and you want to continue using Outlook you’ll have to manually install the plugin on each user’s desktop (although you do get a far far better web client), and you’ve got no guarantee of any other app being able to use that data.

If you move to OpenOffice instead of MS Office then whilst the OOo apps will have a high degree of cohesion, they just won’t be able to talk as well to other desktop (or server-side) applications.

To be honest, I’ve only given all this a cursory glance, but it looks like MS have got the market sewn up.

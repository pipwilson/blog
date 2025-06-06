---
title: Export a list of all the people you follow on Medium as OPML
date: 2025-06-06 19:21:37
slug: export-a-list-of-all-the-people-you-follow-on-medium-as-opml
taxonomies:
  tags:
    - rss
    - opml
    - medium
---

For my sins, I follow lots of people on Medium.

For their sins, I never check Medium to see what they're writing.

The link below is a bookmarklet which will export the list of people you are following on Medium as an OPML file so that you can import it into your feed reader.

<!-- more -->

<a href="javascript:(function()%7Bjavascript%3A(function()%20%7B%0A%20%20function%20getFeedUrls()%20%7B%0A%20%20%20%20const%20anchors%20%3D%20document.querySelectorAll('main%20div.m%20a%5Bhref%5D')%3B%0A%20%20%20%20const%20urls%20%3D%20new%20Set()%3B%0A%20%20%20%20anchors.forEach(function(a)%20%7B%0A%20%20%20%20%20%20const%20href%20%3D%20a.getAttribute('href')%3B%0A%20%20%20%20%20%20if%20(href.startsWith('%2F%40'))%20%7B%0A%20%20%20%20%20%20%20%20const%20cleanHref%20%3D%20href.split('%3F')%5B0%5D%20%2B%20'%2Ffeed'%3B%0A%20%20%20%20%20%20%20%20urls.add(cleanHref)%3B%0A%20%20%20%20%20%20%7D%0A%20%20%20%20%7D)%3B%0A%20%20%20%20return%20Array.from(urls)%3B%0A%20%20%7D%0A%0A%20%20function%20generateOPML(feeds)%20%7B%0A%20%20%20%20const%20header%20%3D%20%5B%0A%20%20%20%20%20%20'%3C%3Fxml%20version%3D%221.0%22%20encoding%3D%22UTF-8%22%3F%3E'%2C%0A%20%20%20%20%20%20'%3Copml%20version%3D%222.0%22%3E'%2C%0A%20%20%20%20%20%20'%20%20%3Chead%3E'%2C%0A%20%20%20%20%20%20'%20%20%20%20%3Ctitle%3EMedium%20Following%20Feeds%3C%2Ftitle%3E'%2C%0A%20%20%20%20%20%20'%20%20%3C%2Fhead%3E'%2C%0A%20%20%20%20%20%20'%20%20%3Cbody%3E'%2C%0A%20%20%20%20%20%20'%20%20%20%20%3Coutline%20text%3D%22Medium%20Feeds%22%20title%3D%22Medium%20Feeds%22%3E'%0A%20%20%20%20%5D.join('%5Cn')%3B%0A%0A%20%20%20%20const%20footer%20%3D%20%5B%0A%20%20%20%20%20%20'%20%20%20%20%3C%2Foutline%3E'%2C%0A%20%20%20%20%20%20'%20%20%3C%2Fbody%3E'%2C%0A%20%20%20%20%20%20'%3C%2Fopml%3E'%0A%20%20%20%20%5D.join('%5Cn')%3B%0A%0A%20%20%20%20const%20items%20%3D%20feeds.map(function(url)%20%7B%0A%20%20%20%20%20%20const%20match%20%3D%20url.match(%2F%40(%5B%5E%5C%2F%5D%2B)%2F)%3B%0A%20%20%20%20%20%20const%20title%20%3D%20match%20%3F%20match%5B1%5D%20%3A%20'Medium%20User'%3B%0A%20%20%20%20%20%20return%20'%20%20%20%20%20%20%3Coutline%20type%3D%22rss%22%20text%3D%22'%20%2B%20title%20%2B%20'%22%20title%3D%22'%20%2B%20title%20%2B%20'%22%20xmlUrl%3D%22https%3A%2F%2Fmedium.com'%20%2B%20url%20%2B%20'%22%20%2F%3E'%3B%0A%20%20%20%20%7D).join('%5Cn')%3B%0A%0A%20%20%20%20return%20header%20%2B%20'%5Cn'%20%2B%20items%20%2B%20'%5Cn'%20%2B%20footer%3B%0A%20%20%7D%0A%0A%20%20function%20download(content%2C%20filename)%20%7B%0A%20%20%20%20const%20blob%20%3D%20new%20Blob(%5Bcontent%5D%2C%20%7Btype%3A%20'text%2Fxml'%7D)%3B%0A%20%20%20%20const%20a%20%3D%20document.createElement('a')%3B%0A%20%20%20%20a.href%20%3D%20URL.createObjectURL(blob)%3B%0A%20%20%20%20a.download%20%3D%20filename%3B%0A%20%20%20%20a.click()%3B%0A%20%20%7D%0A%0A%20%20const%20feeds%20%3D%20getFeedUrls()%3B%0A%20%20if%20(feeds.length%20%3D%3D%3D%200)%20%7B%0A%20%20%20%20alert('No%20Medium%20user%20links%20found%20on%20this%20page.')%3B%0A%20%20%20%20return%3B%0A%20%20%7D%0A%20%20const%20opml%20%3D%20generateOPML(feeds)%3B%0A%20%20download(opml%2C%20'medium-following.opml')%3B%0A%7D)()%3B%7D)()%3B">Export Medium Following</a>.

Just click and drag it to your browser bookmark toolbar, visit your "Following" page from your profile, **scroll to the bottom so that the whole list loads** and then click "Export Medium Following". This will download a file to your computer. Import it to your feed reader and you should have a new folder called "Medium Following Feeds" with the people you're following listed inside.

Tada!
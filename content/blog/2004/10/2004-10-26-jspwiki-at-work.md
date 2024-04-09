+++
title = "JSPWiki at work"
date = "2004-10-26 13:08:00"
slug = "jspwiki-at-work"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
comments_file = "/content/blog/2004/10/2004-10-26-jspwiki-at-work-comments.csv"
+++

Back in April [Russell Beattie rolled out JSPWiki at his workplace](http://www.russellbeattie.com/notebook/1007584.html), which kind of inspired me and in June we rolled out a [JSPWiki](http://jspwiki.org/) of our own to a set of trial users who all loved it. Soon after we rolled it out to some of the other departments and whilst there was some resistance, in the main its gone quite well.

In the five months we’ve been running we’ve created about 800 pages (although a healthy number of these are by-products of using the [Todo List Plugin](http://www.jspwiki.org/Wiki.jsp?page=TodoListPlugin)), which is a pretty immense output, but shows how well everyone took to the new technology.

The default theme is pretty grim, so we’re running a modified version of the [Clean Template](http://www.jspwiki.org/Wiki.jsp?page=CleanTemplate). Additionally, search is as slow as anything (like, 30 seconds to bring back any results), so I recently updated to use [Lucene for Search](http://www.jspwiki.org/Wiki.jsp?page=LuceneForSearch), which has made searching an absolute doddle – a five second max for any search! Great!

We’ve had a couple of problems with JSPWiki along the way (and we still have some). First and foremost was that inserting a carriage return doesn’t actually insert a &lt;br&gt;, you have to force it using wiki syntax with a double backslash, which is pretty unintuitive and for the non-technical users downright confusing. Fortunately [Kieron Wilkinson](http://www.jspwiki.org/Wiki.jsp?page=KieronWilkinson) has written a patch which will insert implicit linebreaks as well as supporting the existing wiki syntax. I applied it to our wiki, and not only did it not break any pages, but now line breaks work in the way they should! Hurrah that man!

We’ve also had a problem with page naming. You have to make everyone follow a consistent style when naming pages whilst not being too draconian, but if someone creates an inappropriately named page then there’s not much you can do about it except create a whole new page, copy and paste the old content and make sure the old page isn’t linked to by anything else. It’s awkward and a hassle to administer (especially if you want to actually completely remove the unnecessary pages which means having to delete the underlying physical files, which, on our system, meant that the built-in search broke – I’ve not tried it since we switched to Lucene but I’d imagine that that would also break since it wouldn’t be able to update its index because the deletion hasn’t gone through the wiki). There is a [Rename Page patch](http://www.jspwiki.org/Wiki.jsp?page=RenamePagePatch) which I’d like to apply as soon as possible and which should remove the admin burden from this but so far I’ve not got around to trying it.

The two outstanding problems we have are both Mozilla-based. People are always inserting links to locations and files on the network via file://, and these links work just fine in IE but security restrictions in Mozilla browsers mean that clicking on the links does nothing – there’s no user feedback or notification why the navigation failed (unless the Javascript console is open of course, in which case they’ll see the message “Security Error: Content at \[URL\] may not load or link to \[file\]” thrown. At the moment the only workaround I have for this is to install the [IEView extension](http://ieview.mozdev.org/), right click the link and go “Open in IE”, which will then work of course.

The second is a problem in the default print CSS for the Clean Template which I haven’t solved yet (to be fair I’ve only spent a couple of minutes looking) but means that when you print a wiki page it’ll print the first paragraph or so, then insert a page break and continue on the next sheet of paper, which means you can only reliably print from IE. Very annoying!

Despite these flaws though, JSPWiki has been a clear success for bottom-up information creation and sharing and I’d definitely recommend it to any company looking to increase the flow of information from the shop-floor (as it were), with the info not just flowing upwards as typically happens in official reports, but also sideways, which is oftentimes where it’s more needed.

<ins datetime="2004-12-03T12:42:05Z"></ins>

Back in November an anonymous commentor posted a solution to the file://// URI problem on one of my old posts. Herewith:

> Go to ‘about:config’ and use a filter of ‘checkloaduri’.
> 
> Set that value to false (double click on it) and you should be able to load from file:// urls.

And it works an absolute treat. I circulated this workaround around the office, and now we’re just down to the printing issue 🙂

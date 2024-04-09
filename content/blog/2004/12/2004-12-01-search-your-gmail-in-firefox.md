+++
title = "Search your gmail in Firefox"
date = "2004-12-01 21:19:00"
slug = "search-your-gmail-in-firefox"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
+++

<script type="text/javascript">
\<!--
function errorMsg()
{
  alert("A Mozilla browsis needed to install a search plugin");
}
function addEngine(name,ext,cat)
{
  if ((typeof window.sidebar == "object") && (typeof
  window.sidebar.addSearchEngine == "function"))
  {
    //cat="Web";
    //cat=prompt("In what category should this engine be installed?","Web")
    window.sidebar.addSearchEngine(
      "http://philwilson.org/gmailsearch/"+name+".src",
      "http://philwilson.org/gmailsearch/"+name+"."+ext,
      name,
      cat );
  }
  else
  {
    errorMsg();
  }
}
//-->
</script>

I’ve only recently made the move from Firefox 0.9.x to 1.0 (I was waiting for all the extensions I use to finally get updated) and although I mainly do my searching using [keywords](http://www.mozilla.org/products/firefox/smart-keywords.html "apparently they're called 'smart keywords' now"), I’m really enjoying the [search toolbar](http://www.mozilla.org/products/firefox/search.html). It’s incredibly intuitive, and although I’m both **very** used to, and very quick at using keywords to perform all my searches I find myself using the search toolbar time and time again, it’s clearly a very intuitive widget, and [massively extensible](http://mycroft.mozdev.org/) to boot.

It’s not actually listed on the [mycroft website](http://mycroft.mozdev.org/), but as well as Amazon, Wikipedia, IMDB and all the other search engines that can be plugged into it, there’s also one for [letting you search your gmail](http://www.tong-web.com/gmail/) (the ‘install’ link on the site doesn’t work though, but you can [click this link to install the gmail search engine](javascript:addEngine('Gmail','png','web'))).

It’s actually quite useful being able to search your mail from your browser, especially when it lets you perform [complex queries like I wrote about before](http://philwilson.org/blog/2004/11/gmail-searching.html).

![What using the gmail search toolbar looks like](/images/gmailsearch.png "Typing 'from:name' retrieves all the emails from that person")

What’s also nice is that if you don’t type anything and just hit enter it takes you straight to your inbox. Must save me literally *seconds* every day 🙂

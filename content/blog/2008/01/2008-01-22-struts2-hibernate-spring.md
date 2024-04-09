+++
title = "Struts2 + Hibernate + Spring"
date = "2008-01-22 22:46:28"
slug = "struts2-hibernate-spring"
[taxonomies]
tags = ['general','java']
[extra]
show_comments = "true"
comments_file = "/content/blog/2008/01/2008-01-22-struts2-hibernate-spring-comments.csv"
+++

At work we’re playing with creating a personal-homepage application in the style of [iGoogle](http://www.google.com/ig) and others. We’re a Java shop, using pretty basic JSP+servlets+Hibernate as our standard application development structure. Since when we formed we were quite a varied team in skillset this has meant that everyone is now more or less equally versed in core Java web app development.

We’ve used this opportunity of writing a new application to try out a number of ways of reaching that goal – specifically we broke in to three teams of two, wrote up a [very basic requirements spec](http://wiki.bath.ac.uk/display/bucswebdev/first-pass+tech+implementation) (“drag and drop panels and remember the positions”, “show an RSS feed”, “use single-sign on”), gave ourselves three days for implementation and chose three methodologies. In fact, we chose three different languages!

One team looked at using [Symfony](http://www.symfony-project.org/), another team looked at [Ruby on Rails](http://rubyonrails.org/) and a colleague and I looked at using “a Java framework”. I didn’t want to choose anything too complicated or with too-steep a learning curve (we had to be able to actually achieve our requirements!) and went very quickly through about six or so before settling on [Struts2](http://struts.apache.org/2.0.11/index.html) as looking like a clean, well-separated development framework. This turned out to be the right choice for the job.

The [quickstart application](http://struts.apache.org/2.0.11/docs/struts-2-spring-2-jpa-ajax.html) we downloaded from the wiki came with everything we needed to get going. It uses Hibernate as an EJB3 persistence layer (using POJO annotations) and uses Spring to inject the session management whenever it’s required. It also came set up as an Eclipse Tomcat project which deployed instantly.

We only really scratched the surface of what’s possible, but overall I was very impressed with this combination of tools and additions like the [REST plugin](http://struts.apache.org/2.x/docs/rest-plugin.html). In particular, using annotations to power the persistence was a revelation, as previously I’ve maintained the hibernate.cfg.xml and mapping files, which are terrible. This does mean that we no longer get support from Hibernate tools like [hbm2ddl](http://www.hibernate.org/hib_docs/tools/reference/en/html/ant.html#d0e1137), but it’s a small price to pay.

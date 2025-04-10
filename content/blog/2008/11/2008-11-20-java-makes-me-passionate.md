+++
title = "Java makes me passionate"
date = "2008-11-20 17:31:15"
slug = "java-makes-me-passionate"

[taxonomies]
tags = [ "apache", "grails", "java", "play", "ruby", "struts2",]

[extra]
show_comments = "true"
comments_file = "/content/blog/2008/11/2008-11-20-java-makes-me-passionate-comments.csv"

+++

Seriously.

I really like Java, it’s a fundamentally great language. Verbose at times, but great.

However, web application development in Java is painful. Additionally, the compilation and deployment of Java webapps completely suck. I mean, they’re **terrible**.

I dread to think how many frameworks exist in Java to ease web app development – each one claiming it’s the best and will solve all your woes, yet none come anywhere close to the ease of development in Rails, Django, or any of the PHP frameworks.

I remember being introduced to JSF at ApacheCon Europe 2006. I came back declaring that we would never use JSF for our internally-developed applications. When there was masses of hype, and everyone was claiming JSF was amazing, I got a few questions in the office.

Two years on and there’s finally some acceptance that JSF 1.0 was horrible for developing web applications, with some defensively claiming that JSF 2.0 will solve all the problems. Right, because that always works.

See the recent discussion:

- [ http://raibledesigns.com/rd/entry/restful\_web\_applications\_with\_subbu](http://raibledesigns.com/rd/entry/restful_web_applications_with_subbu)
- [ http://www.subbu.org/blog/2008/10/jsf-is-not-fixable](http://www.subbu.org/blog/2008/10/jsf-is-not-fixable)
- [ http://epirsch.blogspot.com/2008/10/is-jsf-fixable.html](http://epirsch.blogspot.com/2008/10/is-jsf-fixable.html)

Anyway this means I try and keep a close eye on things like JRuby and Grails but we’ve been pretty reluctant to use them at work because we tend to have large monolithic applications which require maintenance by different people over time which means code homogenisation is good.

To this end, our last couple of projects have been in Struts2+Spring+JPA+Hibernate. This is a nice combination, with a number of well-understood components working well together, especially since we’ve used the [Zero Configuration](http://struts.apache.org/2.0.12/docs/zero-configuration.html) plugin which allows us to drop tens of lines of XML in favour of a few lines of annotations. The Zero Configuration stuff is as buggy as hell and there’s no concrete date for [Struts 2.1.2](http://struts.apache.org/2.1.2/) where it should be fixed, but that’s by-the-by. For me, the fact that we haven’t had to be editing XML almost makes it worth it 😉 Also, Struts2 is [highly testable](http://struts.apache.org/2.x/docs/how-can-we-test-actions.html) which fits in nicely with our existing testing process.

But when you have a framework you’re (mostly) happy with for development, it highlights the other pain points you may have. For us, this was definitely the deploy/test cycle. We were already using [TDD](http://en.wikipedia.org/wiki/Test-driven_development) in the compile cycle so there’s a level of confidence about the backend code – tests **always** run after a successful compile, but when you’re amending the web interface either for small cosmetic changes or for larger changes of data representation there’s a long recompile, redploy, retest cycle that drives me insane. Obviously there are ways around it if you’re using something like Eclipse and have a web application in the structure it needs but we tend to have a number of files which are built at compile-time by Ant. Also, I don’t like being tied to an IDE for tooling purposes – I’m very happy with my current editor thank you very much. The only real missed opportunity was [AppFuse](http://appfuse.org/) – we remembered about it too late; any other Struts2 projects will probably start with it though.

All of this is why I was pleased to see [Play!](http://www.playframework.org/) . It’s a just-in-time compilation framework where the controllers and model are pure Java and the view is Groovy; excellent!

This means that we can reduce the time taken to learn (we only need to learn one component – the view – plus config) whilst leaving all the business logic in a state maintainable by anyone in the team. It serves up locally through [Apache Mina](http://mina.apache.org/) whilst also being deployable to a more conventional container like Tomcat or JBoss. Changes to both business logic and template are instant, and you can still [test it to your heart’s content](http://www.playframework.org/manual/contents/test) !

Unfortunately the [latest stable version](http://www.playframework.org/download/) (1.0-stable3 at writing) doesn’t contain critical features like, um, if..else in the template language. Everything seems to be in the nightly, but having been burned with the Zero Configuration Struts plugin (which had the notice “This is experimental. Feedback is appreciated!”) I wouldn’t like to commit any real effort to writing an application in it. As soon as they have that core stuff nailed down though – I’m there.
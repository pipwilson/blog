+++
title = "The surprise of Spring Boot"
date = "2017-03-14 21:47:32"
slug = "the-surprise-of-spring-boot"
[taxonomies]
tags = ['general','java']
[extra]
show_comments = "false"
comments_file = "/content/blog/2017/03/2017-03-14-the-surprise-of-spring-boot-comments.csv"
+++

I am a long time Java programmer. It was what I used to write my final year project at university, and it was my first, second and third jobs.

That third job lasted more than a decade and, alongside a huge amount of other things, I got to deliver a number of projects in both PHP and Ruby. PHP was interesting and I’d happily work in it again, but Ruby was *fun*.

Terse, expressive, powerful and (mostly) lightweight in nature, it feels like a blessing of a language.

The time came to change job again though, and although I looked for some Ruby roles, I’d been a bit too hands-off to be able to be seriously considered and so I got another Java role. But! What a surprise! Whilst I wasn’t looking, Java frameworks learned some lessons from their “[convention over configuration](https://en.wikipedia.org/wiki/Convention_over_configuration)” brethren, and those lessons are mostly reflected in [Spring Boot](https://projects.spring.io/spring-boot/) by Pivotal Software. Here is a complete Hello World web application in Spring Boot:

```
@RestController
class ThisWillActuallyRun {

    @RequestMapping("/")
    String home() {
        "Hello World!"
    }

}
```

This is borrowed from [the Quick Start example](http://docs.spring.io/spring-boot/docs/current-SNAPSHOT/reference/htmlsingle/#getting-started-cli-example), and is in Groovy, so there’s no other requirement for imports, classpaths etc. Just use the Spring Boot command line tool to run it, and you’re done!

The [Getting Started](https://spring.io/guides#gs) guides cover a wealth of activities to do almost anything you can imagine, but the framework is perfect for writing microservice-based applications with very little configuration required beyond adding some annotations to your classes and methods.

It makes writing Java a pleasure again, and an experience far from the heavyweight EJB and Spring2 I was recoiling from a few years ago!

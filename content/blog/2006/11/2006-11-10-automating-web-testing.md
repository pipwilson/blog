+++
title = "Automating web testing"
date = "2006-11-10 15:36:00"
slug = "automating-web-testing"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
+++

We’re just starting to ramp up the amount of testing we do on our web apps at work, mostly via the use of [JUnit](http://junit.org/) and some [code coverage tools](http://cobertura.sourceforge.net/) which are automated via [CruiseControl](http://cruisecontrol.sourceforge.net/).

I’m reasonably interested in getting some automated user acceptance testing going, and have been looking at [Selenium](http://www.openqa.org/selenium/), because it seems a great way to generate tests from the real UI, rather than, say, writing code for them in [HttpUnit](http://httpunit.sourceforge.net/) or [JMeter](http://jakarta.apache.org/jmeter/) (although I know that’s really a load testing tool, it could do the job at a push).

I’d like to be able to generate the tests using the [Selenium IDE](http://openqa.org/selenium-ide/) which is a Firefox extension. My problem with Selenium seems to be that it validates against real browsers, rather than against the HTTP requests and responses and so won’t fit in to our automated testing.

It’s possible to write [Selenium tests as Java code](http://openqa.org/selenium-rc/java.html) (amongst others) but again this runs against the actual browser, and the whole point is that with the IDE you should’t actually have to be a developer to write acceptance tests.

Our [CruiseControl](http://cruisecontrol.sourceforge.net/) machine is a headless server somewhere, so does this really mean that we can’t use Selenium?

I think that actually I’m just baffled that a tool might work this way, and [not allow automation without a browser](http://wiki.openqa.org/display/SIDE/Automating+Selenium+IDE+tests " Automating Selenium IDE tests") to hand. It rather looks as though we’re going to have to forget the idea of generating tests using the Selenium IDE and just code them in with HttpUnit (or [Cactus](http://jakarta.apache.org/cactus/) or [HtmlUnit](http://htmlunit.sourceforge.net/) or whatever)

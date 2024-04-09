+++
title = "Output a timestamp with each line in a Maven log"
date = "2017-12-04 13:21:58"
slug = "output-a-timestamp-with-each-line-in-a-maven-log"
[taxonomies]
tags = ['general']
[extra]
show_comments = "false"
+++

Maven is a powerful build tool for Java and it tends to spit out a large amount of logs, requiring you to scroll back in your output window or console to look at what’s happening. If you’re running it regularly, for example whilst building tests then it’s easy to scroll back slightly too far and look at the results from a previous run by accident.

An easy way to avoid this is to configure Maven to output a timestamp on each log line. Just open up your MAVEN\_HOME/conf/logging/simplelogger.properties and change the dateTimeFormat like this:

`org.slf4j.simpleLogger.dateTimeFormat=HH:mm:ss.S`

Not only will this make it easier to spot if you’re looking at the correct log lines but you’ll also be better able to see how long each stage is taking (although for real measurements here you’ll want [a profiler](https://github.com/takari/maven-profiler)).

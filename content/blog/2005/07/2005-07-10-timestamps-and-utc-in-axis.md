+++
title = "Timestamps and UTC in Axis"
date = "2005-07-10 15:34:00"
slug = "timestamps-and-utc-in-axis"
[taxonomies]
tags = ['general']
[extra]
show_comments = "false"
+++

Aaron Johnson recently had some [fun with Axis / SOAP, Java and Calendar](http://cephas.net/blog/2005/07/01/fun_with_axis_soap_java_and_calendar.html), which reminded me of an issue I had on my last project – our [Axis](http://ws.apache.org/axis/)-based app had been working fine for a few months, but we came in one morning to find that all our reporting tools were telling us that the clients thought our server was an hour out.

After many hours of scratching our heads, we suddenly realised that we’d just switched from <acronym title="Greenwich Mean Time">GMT</acronym> into <acronymtitle summer="" time="">BST and the applications hadn’t accounted for this. Like Aaron, we hadn’t realised that Axis’ CalendarDeserializer class internally converts everything to UTC since whilst we’d been developing everything *was* UTC. As soon as the last Sunday in March came around – bam!</acronymtitle>

Lesson I learned: always beware of what third party libraries are doing to your data. Unit tests should be your friends!

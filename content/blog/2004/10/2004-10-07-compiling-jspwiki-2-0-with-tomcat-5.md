+++
title = "Compiling JSPWiki 2.0 with Tomcat 5"
date = "2004-10-07 21:03:00"
slug = "compiling-jspwiki-20-with-tomcat-5"
[taxonomies]
tags = ['general']
[extra]
show_comments = "false"
comments_file = "/content/blog/2004/10/2004-10-07-compiling-jspwiki-2-0-with-tomcat-5-comments.csv"
+++

Specifically, that’s JSPWiki 2.0.52 and Tomcat 5.0.29, but who’s counting anyway?

The compilation instructions for JSPWiki confidently state that you should copy your servlet.jar from your $CATALINA\_HOME/common/lib directory into either $JAVA\_HOME/jre/lib/ext or to JSPWiki/lib.

Tomcat 5 doesn’t use servlet.jar any more, so the JARs you need to copy are $CATALINA\_HOMEcommonlibjsp-api.jar and $CATALINA\_HOMEcommonlibservlet-api.jar. I just dropped them into my JSPWiki/lib dir because I didn’t want them influencing any of my other Java apps, but putting them into $JAVA\_HOME/jre/lib/ext should also work.

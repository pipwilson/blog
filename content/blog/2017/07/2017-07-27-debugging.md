+++
title = "Debugging"
date = "2017-07-27 13:48:24"
slug = "debugging"
[taxonomies]
tags = ['general']
[extra]
show_comments = "false"
comments_file = "/content/blog/2017/07/2017-07-27-debugging-comments.csv"
+++

I do not like debugging. I prefer good logging.

The [log4j manual quotes Brian W. Kernighan and Rob Pike](https://logging.apache.org/log4j/1.2/manual.html#Introduction) from their “truly excellent book” The Practice of Programming:

> As personal choice, we tend not to use debuggers beyond getting a stack trace or the value of a variable or two. One reason is that it is easy to get lost in details of complicated data structures and control flow; we find stepping through a program less productive than thinking harder and adding output statements and self-checking code at critical places.
> 
> Clicking over statements takes longer than scanning the output of judiciously-placed displays. It takes less time to decide where to put print statements than to single-step to the critical section of code, even assuming we know where that is. More important, debugging statements stay with the program; debugging sessions are transient.

There are times when a debugger can be really helpful, but in my experience they are normally used as a fallback for a poorly documented system with an unclear flow of logic, or overly large methods with poor test coverage.

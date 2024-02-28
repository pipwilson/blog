+++
title = '''Prefer planned rework to big bang delivery'''
date = "2023-06-08 23:14:26"
slug = "prefer-planned-rework-to-big-bang-delivery"
[taxonomies]
tags = ['general']
+++

We have a few large projects on at work to replace key legacy systems and are discussing how to do that.

Most of the discussions so far have tended to end up in a position where an incremental piece of delivery of the large overall system has been rejected because we know it will require rework later.

In this case, knowing about the rework is good!

For large projects which do not plan to deliver in an incremental way, the total amount of work required is unknown. It is in our interests to make as much of that work as known as possible as early as possible, but if a large system does not go into production until is fully complete, then the amount of bugs and rework to be done are both a) unknown in advance and b) time-critical. This is the worst of all worlds.

Far better is to incrementally deliver over an up-front longer timescale (you’re going to have a longer timescale than your big bang delivery plan accommodates anyway, you can just choose to ignore that fact by drawing a gantt chart of how many days a task 2 years from now will take) and know that what you’re delivering actually works, and that reworking it will be a time-bounded effort because you will have both the experience of doing the delivery and evidence of real-world usage and behaviours of your system.\n
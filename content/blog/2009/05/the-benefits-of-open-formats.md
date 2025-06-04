---
title: "The benefits of open formats"
slug: the-benefits-of-open-formats
date: 2009-05-14 10:45:43
taxonomies:
  tags:
    - communication
    - development
    - team
    - calendar
    - support
  collections:
    - university of bath
extra:
  originalLocationName: The University of Bath Web Services Blog
  originalUrl: http://blogs.bath.ac.uk/webservices/2009/05/14/the-benefits-of-open-formats/
---
As of this time last year, [the University Academic Year Charts](http://www.bath.ac.uk/catalogues/academic-year-charts/) have been generated in HTML, PDF and iCalendar formats from Excel spreadsheets. Previously there were only PDFs for download but we thought that providing versions to view live on the web and a version people could add to their own calendar software would be useful.

To take the burden out of maintaining all these different formats by hand we used some short Ruby scripts to do this (using libraries such as [roo](http://roo.rubyforge.org/), [pdf-writer](http://ruby-pdf.rubyforge.org/pdf-writer/), and [icalendar](http://icalendar.rubyforge.org/)).

Within Web Services we use the [calendar plugin](http://confluence.atlassian.com/display/CONFEXT/Calendar+Plugin) of [our wiki](http://wiki.bath.ac.uk/display/webservices) to [schedule who handles our frontline support](http://wiki.bath.ac.uk/display/webservices/Support+schedule) on a daily basis (and then get it deliverd to us over instant messenger, [as we've blogged about before](http://blogs.bath.ac.uk/webservices/2008/11/20/supporting-ourselves-with-xmpp/)) but it didn't show the University holidays, meaning that the support was somtimes unfairly balanced.

[![A screenshot of our support schedule plus University holidays](http://blogs.bath.ac.uk/webservices/files/2009/05/dates.png)](http://blogs.bath.ac.uk/webservices/files/2009/05/dates.png)

A screenshot of our support schedule plus University holidays

Yesterday we remembered that one of the year charts we generate just contains dates relevant to staff, without all the teaching days and student holidays marked in, and like all the others, we generate an iCalendar file for it, which the calendar plugin can read. So, a few clicks later and now our support schedule contains the University holiday dates as well as our custom-added events.

This means our calendar has an iCalendar input ([the holidays](http://www.bath.ac.uk/catalogues/academic-year-charts/staff-ay-chart-2008-2009.ics)) for human usage when we're updating the schedule as well as an iCalendar output ([our support schedule](http://wiki.bath.ac.uk/plugins/calendar/ical/dc.action?pageId=24543968&cid=supportschedule&scid=LXERYRPPNRJQGBNWELHN3OFJ33A9S7S9)) for robot usage when delivering our schedule directly to us! We've had to do comparatively little to enable this, neither of them have to be maintained by hand, and this is only a tiny fraction of the things that are possible, and all enabled because we use software which generates and consumes standard, open formats (and thanks to Tom Natt for making sure we did it!).


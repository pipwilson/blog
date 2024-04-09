+++
title = "Government Digital Service developer docs"
date = "2016-12-07 13:36:37"
slug = "government-digital-service-developer-docs"
[taxonomies]
tags = ['general']
[extra]
show_comments = "false"
+++

GDS has an absolute boat-load of [repositories on GitHub](https://github.com/alphagov), and no clear way to access or browse them.

One of those repositories, [govuk-developers](https://github.com/alphagov/govuk-developers), is an ordered index to those repositories, allowing you to find exactly what you’re looking for. This is a static site generated with Middleman and served from Heroku, except that you need a GDS login to be able to access it (presumably for cost reasons).

In the description for that repo it says <q>This project is being rebuilt and is undergoing rapid change.</q> but there haven’t been any changes for nearly a week, so [I’ve forked it](https://github.com/pipwilson/govuk-developers).

It’s now [running in my Heroku account](https://govuk-developers.herokuapp.com/) with no username and password (there’s a prompt, but just hit `<ENTER>`), so you too can browse the GDS repos and docs in a useful way.

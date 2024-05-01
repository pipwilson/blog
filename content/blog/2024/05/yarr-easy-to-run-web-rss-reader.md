---
title: Yarr is an easy-to-run web-based RSS reader
date: 2024-05-01 19:53:24
slug: yarr-easy-to-run-web-rss-reader
taxonomies:
  tags:
    - rss
    - atom
    - go
    - yarr
    - rss-reader
---

You can go and [download Yarr](https://github.com/nkanaev/yarr/releases), unzip and it and (for the windows version) double-click the .exe. Straight away you will have a working web-based RSS reader.

<!-- more -->

![](/images/2024/05/yarr-screenshot.png)

[Yarr](https://github.com/nkanaev/yarr/) is written in [go](https://go.dev/) and compiled to a single binary and uses SQLite for its database. This means that if you’re running your own server (or even running it on your own computer) you don’t need to configure a web server, set up the relevant language (like PHP or Ruby on Rails), configure a database server etc. You can just [download and run the binary file](https://github.com/nkanaev/yarr/releases) and then visit it in your browser. 

This is refreshing in the extreme. 

What’s also nice is that the frontend (written in [Vue](https://vuejs.org/)) has been abstracted from the backend via its own nice API which we can talk to! You can [see the routes here](https://github.com/nkanaev/yarr/blob/master/src/server/routes.go), but the tried-and-tested method of just watching network traffic tells you what you need to know.

Not only that, but if you have the patience to either build the source code yourself or ([like I did](https://github.com/pipwilson/yarr/actions/runs/8511608496)), fork the repo and create a release from the latest code then you also get [Fever API](https://github.com/DigitalDJ/tinytinyrss-fever-plugin/blob/master/fever-api.md) compatibility, opening it up to other clients like [Read You on Android](https://github.com/Ashinch/ReadYou) or [one of the Mac or iOS apps listed on the Yarr Fever API page](https://github.com/nkanaev/yarr/blob/master/doc/fever.md). The next official release will contain this, but I was too [impatient](https://github.com/nkanaev/yarr/issues/185).

Importantly, running `yarr -h` tells you that you can provide authentication, change the IP and port binding and provide some other config too, which means it's OK to have this face the public internet.

I don’t like being beholden to third parties for stuff I use daily, so something I can run and configure really easily without it being a pain to host, is a joy.

I’d love it if all the webapps I use could run this easily. It looks like there's [also](https://github.com/cosmtrek/air) [some](https://github.com/mitranim/gow) [tooling](https://thegodev.com/live-reloading/) to do dynamic recompilation when the code changes, which should also make for a good code-build-test cycle - I'm super impressed!
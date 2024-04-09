+++
title = "Running 16-bit Windows 95 games on 64-bit Windows 10"
date = "2022-08-14 20:46:00"
slug = "running-16-bit-windows-95-games-on-64-bit-windows-10"
[taxonomies]
tags = ['games','general','windows']
[extra]
show_comments = "false"
comments_file = "/content/blog/2022/08/2022-08-14-running-16-bit-windows-95-games-on-64-bit-windows-10-comments.csv"
+++

If you are running an x64 version of Windows then when you try and run an old 16-bit Windows 95 application you will see an error screen saying “This app can’t run on your PC”:

<figure class="wp-block-image size-large">[![](https://philwilson.org/blog/wp-content/uploads/2023/11/this-app-cant-run-1024x279.png)](https://philwilson.org/blog/wp-content/uploads/2023/11/this-app-cant-run.png)</figure>To solve this:

1. [Grab a build of winevdm](https://ci.appveyor.com/project/otya128/winevdm) ([source](https://github.com/otya128/winevdm)) from AppVeyor
2. Extract the artifact somewhere local, open a command window and `cd` to that directory
3. Run your win16 binary as a parameter to otvdm e.g. `otvdm c:\games\game.exe`
4. Done!

There’s some [background information on why this running 16bit apps doesn’t work, and the virtualisation layers and tooling involved here](https://docs.microsoft.com/en-us/windows/compatibility/ntvdm-and-16-bit-app-support).

The reason I started looking at this is because I was reminded of an old game called Mordor (here is [the official Mordor homepage](https://www.decklinsdemise.com/mordor.htm) and [here is the demo on the Internet Archive](https://archive.org/details/MordorTheDepthsofDejenol_1020)) from some random videogame nostalgia thread somewhere on that internet. Despite the name, it has nothing to do with anything by Tolkein, but is a rogue-like dungeon-exploring RPG.

I had forgotten it existed until seeing its name in that context jogged a 25-year-old memory, and now I can play it again!

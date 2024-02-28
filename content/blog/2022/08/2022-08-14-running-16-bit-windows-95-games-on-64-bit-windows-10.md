+++
title = '''Running 16-bit Windows 95 games on 64-bit Windows 10'''
date = "2022-08-14 20:46:00"
slug = "running-16-bit-windows-95-games-on-64-bit-windows-10"
[taxonomies]
tags = ['games','general','windows']
+++

If you are running an x64 version of Windows then when you try and run an old 16-bit Windows 95 application you will see an error screen saying &#8220;This app can&#8217;t run on your PC&#8221;: <figure class="wp-block-image size-large">

[<img loading="lazy" decoding="async" width="1024" height="279" src="https://philwilson.org/blog/wp-content/uploads/2022/08/this-app-cant-run-1024x279.png" alt="" class="wp-image-1735" srcset="https://philwilson.org/blog/wp-content/uploads/2022/08/this-app-cant-run-1024x279.png 1024w, https://philwilson.org/blog/wp-content/uploads/2022/08/this-app-cant-run-300x82.png 300w, https://philwilson.org/blog/wp-content/uploads/2022/08/this-app-cant-run-768x210.png 768w, https://philwilson.org/blog/wp-content/uploads/2022/08/this-app-cant-run.png 1459w" sizes="(max-width: 1024px) 100vw, 1024px" />][1]</figure> 



To solve this:

  1. [Grab a build of winevdm][2] ([source][3]) from AppVeyor
  2. Extract the artifact somewhere local, open a command window and `cd` to that directory
  3. Run your win16 binary as a parameter to otvdm e.g. `otvdm c:\games\game.exe`
  4. Done!

There&#8217;s some [background information on why this running 16bit apps doesn&#8217;t work, and the virtualisation layers and tooling involved here][4].

The reason I started looking at this is because I was reminded of an old game called Mordor (here is [the official Mordor homepage][5] and [here is the demo on the Internet Archive][6]) from some random videogame nostalgia thread somewhere on that internet. Despite the name, it has nothing to do with anything by Tolkein, but is a rogue-like dungeon-exploring RPG.

I had forgotten it existed until seeing its name in that context jogged a 25-year-old memory, and now I can play it again!

 [1]: https://philwilson.org/blog/wp-content/uploads/2022/08/this-app-cant-run.png
 [2]: https://ci.appveyor.com/project/otya128/winevdm
 [3]: https://github.com/otya128/winevdm
 [4]: https://docs.microsoft.com/en-us/windows/compatibility/ntvdm-and-16-bit-app-support
 [5]: https://www.decklinsdemise.com/mordor.htm
 [6]: https://archive.org/details/MordorTheDepthsofDejenol_1020\n
+++
title = "Getting started with .NET Core"
date = "2015-10-11 22:29:05"
slug = "getting-started-with-net-core"
[taxonomies]
tags = ['.net','coding','general']
[extra]
show_comments = "true"
comments_file = "/content/blog/2015/10/2015-10-11-getting-started-with-net-core-comments.csv"
+++

It’s been a few years since I last used .net so I thought I’d give it a go. It was slightly more eventful 30 minutes than I’d have liked, so I thought I’d write it up.

I started by trying to install Visual Studio, but half an hour later it was still under 50% done, and since I only wanted to be writing scripts rather than applications, I started looking for some smaller getting started guides and came across Microsoft’s guide to [getting started with .NET Core](https://dotnet.github.io/core/getting-started/). So I took a brief look at [the new shape of the .NET stack](https://dotnet.github.io/core/about/overview.html), liked what I saw, and went back to the guide.

After installing the .NET Version Manager (dnvm) I had to restart PowerShell to get the changes to my PATH to take effect, and also I had to open an Administrator PowerShell window and run `set-executionpolicy remotesigned` because I hit the <q>Running scripts is disabled on this system</q> error message.

The code samples from the guide can’t simply be copy and pasted into an editor – each is actually a single line of code and then JavaScript is applied to make it appear as though it is spread across multiple lines. This is pretty disappointing, I thought something was wrong with my local editor configuration until I hit view source on the page.

I was using [Visual Studio Code](https://code.visualstudio.com/), and at this point was also disappointed that [SHIFT+ALT+F](https://code.visualstudio.com/Docs/editor/keybindings) didn’t format the CSharp code for me, although it did format the JSON.

I’d closed my PowerShell window by this point, and when I opened a new one and ran `dnu restore` I got an error message about it not being on my path (<q>The term ‘dnu’ is not recognized as the name of a cmdlet, function, script file, or operable program.</q>). Running `dnvm upgrade` seems to have fixed this and I can now run the commands from both PowerShell and Command Prompt!

My “Hello World” did at least run first time. Phew!

I should now have the infrastructure to get properly going, but this was a much rougher intro than I was hoping for.

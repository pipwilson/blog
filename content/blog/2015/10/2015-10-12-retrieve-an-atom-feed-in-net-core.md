+++
title = "Retrieve an Atom feed in .NET Core"
date = "2015-10-12 21:11:13"
slug = "retrieve-an-atom-feed-in-net-core"
[taxonomies]
tags = ['.net','atom','coding','general']
[extra]
show_comments = "false"
+++

After [yesterday’s adventure](http://philwilson.org/blog/2015/10/getting-started-with-net-core/) and recent [forehead-smacking](http://philwilson.org/blog/2015/09/rfc-4287/), this seemed like an appropriate, and small, goal.

After some Googling I found [RestSharp](http://restsharp.org), which bills itself as a <q>Simple REST and HTTP API Client for .NET</q>. Sounds good.

I tried to work out how to add this to my `project.json` but couldn’t find any documentation on what it should like, even after [I remembered about things like NuGet](http://www.nuget.org/packages/RestSharp).

So I guessed and typed `dnu install restsharp`, which seemed to fetch the right files. My `package.json` didn’t seem to have updated though, so I then did a `dnu restore`. This updated the package file, but might have been overkill and a timing issue in my editor.

I now have [a small file which will retrieve an Atom file and dump it to screen](https://github.com/pipwilson/hello-world-dotnet/blob/4810c8881cad18a718f9b81a90a462b0559d0fcb/HelloWorld.cs).

Another small step tomorrow.

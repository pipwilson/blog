+++
title = "Running .NET code from Visual Studio Code"
date = "2015-10-13 20:45:44"
slug = "running-net-code-from-visual-studio-code"
[taxonomies]
tags = ['general']
[extra]
show_comments = "false"
+++

“Code” is the name of Microsoft’s<span class="Apple-converted-space"> </span>[new lightweight code editor](https://code.visualstudio.com/). It’s been out since April but it seemed like this project was a good opportunity to use it properly.

It has [a command palette](https://code.visualstudio.com/docs/editor/codebasics#_command-palette) much like the one in<span class="Apple-converted-space"> </span>[Sublime Text](http://www.sublimetext.com/), but I couldn’t find a command to run my small .cs file.

Lots of the docs talk about<span class="Apple-converted-space"> </span>[using Grunt and Gulp to run your tasks](https://code.visualstudio.com/docs/editor/tasks), but that seemed like overkill for running a single command to build and run my code.

It turns out that you can configure your<span class="Apple-converted-space"> </span>`project.json`<span class="Apple-converted-space"> </span>with<span class="Apple-converted-space"> </span>[a list of commands which then appear in the palette](https://code.visualstudio.com/Docs/runtimes/ASPnet5#_commands-with-ease).

[A couple of small lines](https://github.com/pipwilson/hello-world-dotnet/commit/529910fbc6d8a7d16ecbcc323509a6bac6f041a5#diff-c5bf2bc313c7a64c67e8360f32d9e7dd)<span class="Apple-converted-space"> </span>and now I can run my code directly from inside Code, hurray!

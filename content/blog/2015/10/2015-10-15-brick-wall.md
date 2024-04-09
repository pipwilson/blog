+++
title = "Brick wall"
date = "2015-10-15 20:45:21"
slug = "brick-wall"
[taxonomies]
tags = ['coding','dotnet','general']
[extra]
show_comments = "false"
comments_file = "/content/blog/2015/10/2015-10-15-brick-wall-comments.csv"
+++

So I wanted to parse the feed I retrieved yesterday, and now I know a bit more about how the package system works, I just search NuGet and found [SimpleFeedReader](https://github.com/RobThree/SimpleFeedReader)

`$ dnu install SimpleFeedReader`

At this point Visual Studio Code prompts me that it needs to run the `restore` command, so I click the button and in theory SimpleFeedReader becomes available from my code.

In theory anyway. In practice it doesn’t look like it works in .NET Core, so I decided to try and use the [System.XML.XPath](https://msdn.microsoft.com/en-us/library/system.xml.xpath%28v=vs.110%29.aspx?f=255&MSPPError=-2147217396) package to parse the feed myself, but after a few hours of trying to include the dependencies in package.json correctly, I simply couldn’t do it and ended up going to install Visual Studio. I feel very disappointed about this – I was hoping I could treat .NET as just another language – I don’t need a specialised editor to be able to write small scripts in almost any other language, but the docs around .NET Core just aren’t there. Hopefully I will be able to use Visual Studio to work out what I was getting wrong.

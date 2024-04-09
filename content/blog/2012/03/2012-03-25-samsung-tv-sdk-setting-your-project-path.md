+++
title = "Samsung TV SDK - setting your project path"
date = "2012-03-25 23:09:08"
slug = "samsung-tv-sdk-setting-your-project-path"
[taxonomies]
tags = ['general','mklink','samsung','tv']
[extra]
show_comments = "true"
+++

I have a Samsung Smart TV which means I can write apps for it. [The SDK you can download](http://www.samsungdforum.com/) is really a visual editor and a shorcut to launching the emulator – the apps themselves are mostly written in HTML, JavaScript and CSS. It comes with jQuery, and all-in-all is surprisingly acceptable.

The biggest problem is that your projects *must* live in the “C:Program FilesSamsungSamsung TV SDK(3.1.1)apps” folder. After a brief moment of outrage at not being able to store my code where I want, I found [this blog post by Peter Friese](http://www.peterfriese.de/your-windows-ide-sucks-replace-it-with-your-favorite-editor-on-the-mac/) which reminded me that Windows does actually support symlinks via [the mklink tool](http://technet.microsoft.com/en-us/library/cc753194(v=ws.10).aspx) – so running up `command` as the local Administrator, going to the Samsung SDK folder, deleting the `apps` folder (after first moving my code where I wanted it to be!) and typing

```
mklink /D apps c:codesamsung_tv_apps

```

has fixed my problem!

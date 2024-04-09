+++
title = "Setting up the Play framework on Google App Engine"
date = "2009-12-14 23:49:21"
slug = "setting-up-the-play-framework-on-google-app-engine"
[taxonomies]
tags = ['gae','general','java','play']
[extra]
show_comments = "true"
comments_file = "/content/blog/2009/12/2009-12-14-setting-up-the-play-framework-on-google-app-engine-comments.csv"
+++

The [Play framework](http://www.playframework.org/) is the most fun I’ve had developing Java web applications. It’s fast, natural, comes with [a rails-like scaffolding for CRUD operations](http://www.playframework.org/documentation/1.0/guide7) on your model, has [built-in Selenium testing as well as unit and functional tests](http://www.playframework.org/documentation/1.0/guide10), and most importantly Just Works.

It also deploys natively onto [Google App Engine](http://www.playframework.org/documentation/1.0/gae), but this isn’t described very well in [the official documentation](http://www.playframework.org/documentation/1.0/gae) so here are the basics:

#### Get started

1. Get yourself a GAE account and set up an application. you will need the ID.
2. Download a recent [nightly of the stable 1.0 branch](http://download.playframework.org/1.0-nightly/) (1.0 final doesn’t work with GAE, and Play needs to sort out its versioning system here)
3. Unzip
4. Download [the GAE SDK for Java](http://code.google.com/appengine/downloads.html#Google_App_Engine_SDK_for_Java)
5. Unzip
6. [Create your app](http://www.playframework.org/documentation/1.0/firstapp) (although [use Siena](http://www.playframework.org/documentation/1.0/siena) rather than JPA if you want to persist to the GAE data store) and [configure it to use the GAE module](http://www.playframework.org/documentation/1.0/gae#aSettinguptheGAEmodulea)
7. Add your GAE application ID to myapp/war/WEB-INF/appengine-web.xml

#### Deploy to a local dev GAE environment

1. run <kbd>play war myappname -o myappname-war</kbd>
2. run <kbd>APPENGINE\_SDK\_DIR/bin/dev\_appserver myappname-war</kbd>

#### Deploy to the GAE server

1. run <kbd>play war myappname -o ../myappname-war</kbd>
2. run <kbd>APPENGINE\_SDK\_DIR/bin/appcfg update myappname-war/</kbd>
3. log in to your [app engine console](http://appengine.google.com) and check out your application!

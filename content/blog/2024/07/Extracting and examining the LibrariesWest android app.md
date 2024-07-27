---
title: Extracting and examining the LibrariesWest android app
date: 2024-07-27 20:14:79
slug: extracting-and-examining-the-librarieswest-android-app
taxonomies:
  tags:
    - android
    - libraries
    - cordova
    - javascript
    - disappointment
---

I use my local library a lot, and use the [LibrariesWest app](https://play.google.com/store/apps/details?id=uk.co.solus.librarieswest) and [website](https://www.librarieswest.org.uk/) to do my browsing and make reservations. While website is "ok", the app is a travesty, and has been for years (my app review in 2016 started with "Works, after a fashion, but incredibly slow and unintuitive."). Both are provided by [Solus UK](https://wp.sol.us/).

A new release of the app came out a few months ago - if anything the app is now slower and clunkier than ever before. Every review of the app since its update has been 1 star out of 5.

It is a [Cordova](https://cordova.apache.org/) app using [Framework7](https://framework7.io/) (which I'd never heard of before.).

How do I know this? Well, I used [ML Manager](https://about.javiersantos.me/mlmanager/) to extract the application file (APK) from my phone, unzipped it (an APK is just a zip file) and took a look!

In the assets/www folder we find an index.html file which contains the app, this tells us about the Cordova use and it loads two minified Javascript files: /src/app1.min.js and src/framework7.bundle.min.js

Running app1.min.js through https://www.unminify2.com/ gives us a prettier version we can read, and now we can see how some parts of the app work.

Next step: work out how authentication is done!
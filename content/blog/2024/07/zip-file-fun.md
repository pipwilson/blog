---
title: Zip file fun
date: 2024-07-24 16:49:40
slug: zip-file-fun
taxonomies:
  tags:
    - zip
    - php
---

Back in March when I was working on my Wordpress-to-Zola exporter I'd written some PHP to generate a .zip file with my markdown site in it, but there was a problem.

Although the file size was correct, opening it with Windows Explorer revealed that there were no files in it, but opening it with [7-zip](https://www.7-zip.org/) showed that all the files were there as expected. Baffling!

I eventually found someone online with the same problem, fortunately [in an issue](https://github.com/pierrejoye/php_zip/issues/32) on [the official PHP ZIP extension repo](https://github.com/pierrejoye/php_zip)  

Thankfully [one of the comments there revealed my problem](https://github.com/pierrejoye/php_zip/issues/32#issuecomment-1199671727)

From the [.ZIP File Format Specification](https://pkware.cachefly.net/webdocs/casestudies/APPNOTE.TXT), paragraph 4.4.17.1 :

> The name of the file, with optional relative path. The path stored MUST NOT contain a drive or device letter, or a leading slash. All slashes MUST be forward slashes '/' as opposed to backwards slashes '' for compatibility with Amiga and UNIX file systems etc.

So some quick changes to strip my leading slash and convert any backslashes to forward slashes and done, all files present and correct!
 
I'd always assumed that leading slashes were a requirement whenever defining a folder structure so that you can reliably predict what the entrance of that structure is - in the case of .zip it's been standardised into the spec. TIL.

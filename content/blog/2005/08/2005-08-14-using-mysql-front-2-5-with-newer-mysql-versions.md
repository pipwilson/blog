+++
title = "Using MySQL-Front 2.5 with newer MySQL versions"
date = "2005-08-14 00:23:00"
slug = "using-mysql-front-25-with-newer-mysql-versions"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
comments_file = "/content/blog/2005/08/2005-08-14-using-mysql-front-2-5-with-newer-mysql-versions-comments.csv"
+++

Just for my own reference, because I keep forgetting the syntax and having to Google it:

`SET PASSWORD FOR 'some_user'@'some_host' = OLD_PASSWORD('mypass');`

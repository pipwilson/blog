+++
title = "How to push to two servers at once with git"
date = "2010-07-05 22:41:57"
slug = "how-to-push-to-two-servers-at-once-with-git"
[taxonomies]
tags = ['bzr','general','git','github']
[extra]
show_comments = "true"
comments_file = "/content/blog/2010/07/2010-07-05-how-to-push-to-two-servers-at-once-with-git-comments.csv"
+++

[As I said this time last year](http://philwilson.org/blog/2009/07/github-worries-me), I dislike the idea of people using a decentralised version control system to centralise their code.

This means that some of my code sits in Bazaar on my server, some in Git on my server, and some in [github](https://github.com/). I’m not keen on this situation, and given that github does have a large amount of mindshare, and that [launchpad](https://launchpad.net/) is really quite horrible to use, I want to be able to “git push” to both my server and github at the same time.

It turns out this is quite easy; and everything below (with a few very minor modifications) comes from “[Setting up a new remote git repository](http://toolmantim.com/thoughts/setting_up_a_new_remote_git_repository)” by Tim Lucas and [Aristotle Pagaltzis](http://plasmasturm.org/)‘ answer on [this Stackoverflow question](http://stackoverflow.com/questions/165092/).

So, given that I have a working github repo, and a local checkout:

> Set up the new bare repo on the server:
> 
> ```
> $ ssh myserver.com
> $ mkdir /var/git/myapp.git
> $ cd /var/git/myapp.git
> $ git --bare init
> Initialized empty Git repository in /var/git/myapp.git
> $ exit
> ```
> 
> Add the remote repository to your existing local git repo and push:
> 
> ```
> $ cd ~/code/myapp
> $ git remote add myserver ssh://myserver.com/var/git/myapp.git
> $ git push myserver master
> ```

You have now associated the remote repo with your local repo under the name “myserver”. Now open up `~/code/myapp/.git/config` and:

> put something like this:
> 
> ```
> [remote "public"]
>     url = git@github.com:username/myapp.git
>     url = ssh://myserver.com/var/git/myapp.git
> ```
> 
> Now you can say “git push public” to push to both repos at once.

and that’s it! Every time you push you will be making sure that your code lives on both your server and on github. Adds links to both in your README and the job is complete.

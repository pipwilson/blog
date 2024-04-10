+++
title = "Stop yourself from committing to master with git hooks"
date = "2019-04-03 09:14:00"
slug = "stop-yourself-from-committing-to-master-with-git-hooks"
[taxonomies]
tags = ['general','git']
[extra]
show_comments = "false"
comments_file = "/content/blog/2019/04/2019-04-03-stop-yourself-from-committing-to-master-with-git-hooks-comments.csv"
+++

This is based on the excellent work of Aaron Hoffman which [he’s written up here](https://aaron-hoffman.blogspot.com/2017/04/git-protect-local-master-branch-commit-push.html).

This process adds two git hooks to your repositories which prevent you from committing or pushing to a branch named `master`.

Add directories
---------------

Git hooks live in each of your git repositories rather than in a global location, and so the first thing to do is create the files which will be copied into each repository when you do a `git clone` (or a `git init` in an existing local repository).

```
mkdir -p ~/.git-templates/hooks
```

Add git hooks
-------------

Create a file called `pre-commit` and give it this content:

```bash
!/bin/sh
 prevent commit to local master branch
 branch=git symbolic-ref HEAD
 if [ "$branch" = "refs/heads/master" ]; then
     echo "pre-commit hook: Can not commit to the local master branch."
     exit 1
 fi
 exit
```

Create a file called `pre-push` and give it this content:

```bash
!/bin/sh
 Prevent push to remote master branch
 while read local_ref local_sha remote_ref remote_sha
 do
     if [ "$remote_ref" = "refs/heads/master" ]; then
         echo "pre-push hook: Can not push to remote master branch."
         exit 1
     fi
 done
 exit 0
```

Mark them as executable
-----------------------

```
chmod a+x .git-templates/hooks/*
```

Set the git init.templateDir configuration variable
---------------------------------------------------

`git config --global init.templateDir '~/.git-templates'`

Add the hooks to an existing local repository clone
---------------------------------------------------

Run `git init` while in your local clone directory. This is a non-destructive command which will copy the new hooks into your `REPO/.git/hooks` directory

You can [double-check the git-init docs](https://git-scm.com/docs/git-init) if you’re nervous before doing this!

Add the hooks when you clone a repository
-----------------------------------------

Just clone the repo and your hooks will be in the .git/hooks directory!

Downsides
---------

You will no longer get the sample git hooks copied into `REPO/.git/hooks`, nor the sample `excludes` file but they will continue to exist in` /usr/share/git-core/templates` and can be copied into your `~/.git-templates` directory if you want to keep them.

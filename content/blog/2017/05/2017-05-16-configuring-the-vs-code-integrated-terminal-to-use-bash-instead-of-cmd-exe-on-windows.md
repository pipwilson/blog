+++
title = "Configuring the VS Code integrated terminal to use Bash instead of cmd.exe on Windows"
date = "2017-05-16 20:37:13"
slug = "configuring-the-vs-code-integrated-terminal-to-use-bash-instead-of-cmd-exe-on-windows"
[taxonomies]
tags = ['bash','general','linux','vscode','windows']
[extra]
show_comments = "true"
comments_file = "/content/blog/2017/05/2017-05-16-configuring-the-vs-code-integrated-terminal-to-use-bash-instead-of-cmd-exe-on-windows-comments.csv"
+++

[Visual Studio](https://code.visualstudio.com/) has an [integrated terminal](https://code.visualstudio.com/docs/editor/integrated-terminal) and by default on Windows this loads cmd.exe – the standard, and fairly rubbish Windows command prompt.

I normally use [cmder](http://cmder.net/) as my default terminal on Windows –  
 this is basically the excellent [conemu tabbed console emulator](https://conemu.github.io/), with a few customisations.

If you try and set VS Code’s integrated terminal to the cmder executable, it will open a new terminal window, rather than be integrated, so you need to point it at the bash.exe executable instead.

After installing cmder to to C:\\cmder the bash binary is in C:\\cmder\\vendor\\git-for-windows\\bin and the setting you need to add to VS Code is this:

`"terminal.integrated.shell.windows": "C:\\cmder\\vendor\\git-for-windows\\bin\\bash.exe"`

This will now give you bash when you open the integrated terminal! On one of my computers the default prompt came out ugly, so I changed it like this:

Open the integrated terminal and type

`vi ~/.bashrc`

Then enter insert mode by pressing ‘i’ and pasting in this:

`export PS1="\[\e]0;\w\a\]\n\[\e[32m\]\u@\h \[\e[35m\]$MSYSTEM\[\e[0m\] \[\e[33m\]\w\[\e[0m\]\n\$ "`

Save the file by pressing Escape, then typing ‘wq’ and pressing Enter.

Exit the terminal by typing ‘exit’ (rather than just hiding it by using the VS Code menu or keyboard shortcut.

Re-open it and tada! a much improved integrated terminal!

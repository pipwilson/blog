+++
title = "mdtable-pretty-printer is a plugin for Inkdrop"
date = "2024-02-10 19:22:51"
slug = "mdtable-pretty-printer-is-a-plugin-for-inkdrop"
[taxonomies]
tags = ['general','inkdrop','javascript']
[extra]
show_comments = "false"
comments_file = "/content/blog/2024/02/2024-02-10-mdtable-pretty-printer-is-a-plugin-for-inkdrop-comments.csv"
+++

[mdtable-pretty-printer](https://my.inkdrop.app/plugins/mdtable-pretty-printer) is a plugin for [Inkdrop](https://www.inkdrop.app/) which tidies markdown tables in your notes.

This is the first plugin I’ve written for Inkdrop, and was an interesting experience. Plugins are written in JavaScript, which I don’t write a lot of, and follow React-based patterns which I’m not very familiar with and I ended up having to revert my intended plugin structure (one file with the entrance point and the actual class doing the work in another) to just bundling everything in one file.

The markdown tidying is done by Ian McNaughton’s zero-dependency [mdTablePrettyPrinter library](https://github.com/imcnaugh/mdTablePrettyPrinter), which worked great. It also powers his website <https://www.mdtableprettyprinter.com/> which is what I’d been copy/pasting my tables into to tidy them previously.

I don’t recommend using my plugin, instead I recommend [table-editor](https://my.inkdrop.app/plugins/table-editor) which is far more powerful and formats tables safely with fewer error edge cases than mine, and which I didn’t find until after I’d written my plugin!

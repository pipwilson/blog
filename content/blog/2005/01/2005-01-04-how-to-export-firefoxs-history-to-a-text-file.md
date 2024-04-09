+++
title = "How to export Firefox's history to a text file"
date = "2005-01-04 23:25:00"
slug = "how-to-export-firefoxs-history-to-a-text-file"
[taxonomies]
tags = ['general']
[extra]
show_comments = "true"
+++

<ins datetime="2006-01-07T18:52:06Z"></ins>

Note that this doesn’t currently work in Firefox 1.5

Specifically, serialised as RDF/XML.

Early last year, [Jamie Zawinski asked about how to extract information from Firefox’s history.dat file](http://www.livejournal.com/users/jwz/312657.html) and ended up having to write a Perl script to do it.

He actually got further than most – most people who try to access the data not via Firefox itself just give up. This is because Firefox’s history is stored in a Mork file, which is an incredibly over-complicated and under-documented proprietary file format. You’ll learn more about it by reading the comments on Jamie’s post that you would by reading the docs.

Mork is used as a file format all over Mozilla, in both Firefox and Thunderbird in various points, but there are plans to replace it with SQLite in Mozilla 2.0 (see [Unified Storage on the official Mozilla wiki](http://wiki.mozilla.org/index.php/Mozilla2:Unified_Storage)) possibly with some interfaces made public via RDF (but I’m not 100% sure on this).

As it stands, there’s an open bug asking for [history.dat to be easier to parse](https://bugzilla.mozilla.org/show_bug.cgi?id=241438) (which will probably be fixed by the move to SQLite rather than anything else) which actually has a very useful piece of Javascript attached which will convert the Mork history.dat into an RDF/XML history file, which I personally use as a bookmarklet from my toolbar: [export history.dat](<javascript:(function(){netscape.security.PrivilegeManager.enablePrivilege(%22UniversalXPConnect%22);var rdfhis =Components.classes[%22@mozilla.org/rdf/rdf-service;1%22].getService(Components.interfaces.nsIRDFService).GetDataSource(%22rdf:history%22);var serializer=Components.classes[%22@mozilla.org/rdf/xml-serializer;1%22] .createInstance(Components.interfaces.nsIRDFXMLSerializer);serializer.init(rdfhis);var outputStream = { data: %22%22, close : function(){}, flush : function(){},write: function (buffer,count){this.data += buffer; return count; }, writeFrom : function (stream,count){}, isNonBlocking: false};serializer.QueryInterface(Components.interfaces.nsIRDFXMLSource).Serialize(outputStream);outputStream.close();var summ=outputStream.data;var fp =Components.classes[%22@mozilla.org/filepicker;1%22].createInstance(Components.interfaces.nsIFilePicker);fp.init(window,%22%22,Components.interfaces.nsIFilePicker.modeSave);fp.defaultString = %22history.rdf.txt%22;fp.show();var filoutputStream = Components.classes[%22@mozilla.org/network/file-output-stream;1%22].createInstance( Components.interfaces.nsIFileOutputStream );filoutputStream.init( fp.file, 0x04 | 0x08, 420, 0 );filoutputStream.write(summ, summ.length);filoutputStream.close();})()
\>). Just drag it to your toolbar, load **a local file** in Firefox to ensure you’re in a trusted context and click it like you would any other bookmarklet. It’ll give you a security warning, which you can click “yes” to (if you trust my link – if not, you can get it from the bug linked to above, or look at the code yourself). It’ll take a few seconds to kick in (or longer, depending on the size of your history) but will eventually ask you to specify a location to save the file to. Give it a name, and you’re free to parse it with whatever you like (although preferably an actual RDF parser 🙂

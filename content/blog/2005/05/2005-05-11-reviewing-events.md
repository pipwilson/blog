+++
title = "Reviewing events"
date = "2005-05-11 20:38:00"
slug = "reviewing-events"

[taxonomies]
tags = [ "microformats", "aggregation", "reviews",]

[extra]
show_comments = "false"
comments_file = "/content/blog/2005/05/2005-05-11-reviewing-events-comments.csv"

+++

With all this talk of microformats, a thought just struck me – the biggest deal is being able to aggregate reviews of events. Gosh, wouldn’t that be something impressive for centralised services to be doing? Imagine being able to specify an event you attended in the past and have other people’s reviews of it come up. I’d be impressed (and I don’t mean that this data should be held in an event-specific service like upcoming.org – good as it is – but in people’s feeds and on their websites).

But how do you do it? Just mix the namespaces in a single &lt;item&gt; for RSS2 and Atom? But what about when you’re writing a review of an event *after* you’ve already written about the event? Just put both sets of details in a new item? My assumption is that you’re posting your event data, and then your event review data in the same feed – how do the items relate to one another? I don’t *think* that &lt;link rel=”related”…&gt; can be enough, can it?

There’s also the UI problem of selecting *which* event you’re describing, but that’s **certainly** beyond me at this moment in time 🙂

I get the suspicion the answers are staring me in the face, but it’s been a long, long day.

(btw, [Arnaud Leene has been doing some interesting comparisons](http://www.sivas.com/aleene/microcontent/microcontent_comments.php?id=1977_0_12_0_C) in which he notes that [the RDF Review Vocabulary](http://dannyayers.com/xmlns/rev/) has an Item at its core, not the review, which appears to be unique, I’ll take a closer look in the morning)
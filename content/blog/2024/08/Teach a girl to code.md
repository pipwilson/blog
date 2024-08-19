---
title: Teach a girl to code HTML
date: 2024-08-04 12:51:49
slug: teach-a-girl-to-code-html
taxonomies:
  tags:
    - kids
    - html
---

After playing with [some web publishing tools in March](https://philwilson.org/blog/2024/03/web-publishing-for-yourself/), I spent a few hours in April teaching my 11-year-old daughter some HTML.

She *loved* the idea of being able to publish her own words on the internet, and was delighted by the concept of [nekoweb](https://nekoweb.org/), not least because she's an avid player of [Neko Atsume](https://www.nekoatsume.com/en/).

Once I'd shown her some basic HTML and the "make a change, hit save, refresh the page" loop of seeing changes on the real internet mere seconds after making them she politely ushered me out of the room and set out to make her own page!

One of the nice things about publishing on Nekoweb is that your site turns up on the homepage in the "recently updated" section, which she was thrilled by, but also meant we got the chance to click through to other sites to see what kind of things were possible. I very quickly got requests to show her how to add formatting, change the layout, change the background colour, add images and customise the cursor. The cursor customisation (in her case turning the pointer into a cat head) I had to do myself since it meant adding some JS and some in-page hooks, but the rest we did with some good old fashioned HTML - none of your fancy CSS here!

Text formatting was via old friends `b`, `i` and `u`, which matched up with her existing understanding of Word-style editors.

We set the page's background colour by using the `bgcolor` attribute on the `body` element, using [a reference sheet of named colours](https://www.w3schools.com/colors/colors_names.asp). Images were added by using copy/paste on an example I created, and she used [Bing's Image Creator](https://www.bing.com/images/create) to generate the graphics she wanted.

Layout was with tables.

![Grandma says this was all tables back in my day](/images/2024/08/tables-for-layout.jpeg)

This was super-easy to visualise by setting the attribute `border="1"` (even though like most of the other stuff above [it's deprecated](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/table#deprecated_attributes)) so she could quickly get an idea of what she wanted her page to look like, and kept all of the layout in both the same file and the same syntax that she was slowly getting to grips with with the rest of the page.

All of these breaks with good practice meant that she ended up with a page she was happy to make changes to by herself, using a brand new language but which kept the simplicity and idioms from other tools she's used in the past. Maybe there's a point in the future where I teach those good practices but I strongly believe that starting with them here (CSS for layout! CSS for styles! Accessibility!) would have raised the barrier to entry way too high, and she'd have dropped the whole thing.

I'm really happy with her progress and having shown her she can pick this stuff up and make progress with it in a short amount of time means she's more likely to have another go in the future.
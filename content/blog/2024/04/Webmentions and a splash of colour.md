---
title: Webmentions and a splash of colour
date: 2024-04-26 10:29:42
slug: webmentions-and-a-splash-of-colour
taxonomies:
  tags:
    - general
    - sass
---

What did I get done this week? What am I doing next week? Is there anything where I'd like some support to help me move forward?

Well, the confidence to drill into walls and doors without making a colossal mess of it all would be great on the last point. 😬

In other news, the blog now supports sending and receiving webmentions (hopefully) - sending is via a [post-build hook in my GitHub Actions](https://github.com/pipwilson/blog/commit/f4f27d495619be7a9e2bd3a6691708dcb10eba1e) - this uses the same library by [Remy Sharp](https://remysharp.com/) that powers <https://webmention.app/> so it should work OK. Receiving webmentions is via <https://webmention.io/> but I'd like to replace that with some local PHP if possible, at least for caching them in case the service goes away. Hopefully if [I link to my last post](https://philwilson.org/blog/2024/04/very-weaknotes/), I should shortly be able to see a mention on my dashboard.

Also I added some colour! This meant playing with Sass and [`clip-path: polygon`](https://developer.mozilla.org/en-US/docs/Web/CSS/clip-path) to add a random colour to the background of each heading on a post listing page and to add a rough "tear" effect so it doesn't look too uniform.

Making the background colour random means I also needed to make sure the text colour was suitable (i.e. I don't want white text colour if the background colour then makes it illegible), and found that [David Halford had implemented the W3C's formula for contrast calculations](https://www.davidhalford.com/articles/auto-contrasting-text.html) in JavaScript and [Jonny Kates had published the Sass equivalent in a gist](https://gist.githubusercontent.com/jonnykates/c2961ec71d493ede56ac9dcd55f10254/raw/e0dc7349f15917ba8bac9928ede828180b8c5b2a/text-contrast-david-halford.scss), so I added that and voila, black or white heading text based on the background colour! This is what it looks like:

![A screenshot of my blog homepage with the different coloured background to headings and the heading text is a different colour based on that](/images/2024/04/headings-colour-splash.png)

[Here it is in my Sass file](https://github.com/pipwilson/blog/commit/91c970e4633dfe929b7af9f2e965b829437c753d#diff-95a5cddd8b2417c761d250dd7feaf05b49cd0f8eac14ad60213e99dbd7a6bf04R33).

What am I going to do next week? Unknown. Maybe add [some confetti](https://github.com/catdad/canvas-confetti)?
# A simple slider to practice JS/jQuery

__Important note (Feb 5, 2018): This project has been converted into the [Simple Slider 2](https://github.com/diliaur/simple-slider-2).__

## Pre-requisite(s) for Use 
- Intended for use on WordPress sites
- Images added must be of the same size if you want consistency. However, slider adjusts automatically to images of different aspect ratio.
- Excerpts are cut off with "..." depending on page width. This may be something you want to adjust for.


## Key for Task List
- [] to be done
- [+] did this but it wasn't on the todo list
- [x] done from todo list

## Todo

### Display
- [] title font sizes shrink/grow depending on # of slides
- [] decide & add breakpoint: when to break title container off and display it underneath the slider image (otherwise titles stay longer than image and look bad)

- ~~~[] calculate size of titles based on # of slides to make sure titles/dates won't be obscured; if the div becomes too small, then use this in the decision breakpoint~~~
- ~~~[] how to fail gracefully when no slides are available? -> default slide? etc.~~~ no longer necessary as wordpress won't serve a slide w/o an attached image

### Code refactoring & Testing
- [] IMPORTANT prefix everything with something unique to avoid clashing with other css or page elements
- [] test compatibility with different browsers + versions
- [tabled] better way to manipulate currentSlide global ?
- [] make dots click callback into own function (maybe)
- [tabled] make allSlides list a global since it's used in multiple places (may not matter)

### Wordpressify
- [] transform into widget
	- [] add admin control for number of slots (incl. maximum based on appearance - this is about 7-8 slides)

## Done
- [x] (Jan 22 18) cut off excerpt text when it is too long
	- note: the key was doing this on the ```<p>```, not the div.excerpt element
- [x] (Jan 22 18) request: make exerpt text bigger
	- note: 16px from default of 14px
- [x] (Jun 14 17) refactor - make code look neater (organize & comment)
- [x] (Jun 13 17) if there is no image, do not include the post
- [x] (Jun 6 17) display - style categories
- [x] (Jun 6 17) wordpress-ify - link titles to post
- [x] (Jun 5 17) wordpress-ify - display categories
- [x] (Jun 5 17) wordpress-ify - auto-populate slides, titles, excerpts, etc.
- [x] (Apr 28 17) wordpress-ify - jQuery $() workaround
- [x] (Apr 28 17) wordpress-ify - import JS & CSS correctly
- [+] (Apr 27 17) wordpressify - html -> php file
- [x] (Apr 3 17) refactor - separate JS, CSS, and HTML into separate files
- [x] (Apr 3 17) nav functionality - dots can be clicked and brought to the right slide
- [+] (Apr 3 17) added dots generation as ul and also dot highlight in accordance with slide movement
- [x] (Mar 30 17) nav functionality - left/right arrows flip through slides
- [x] (Mar 28 17) slide functionality - split slide() up into prev() and forward()
- [x] (Mar 21 17) sliding functionality - highlight current title on right side corresponding to current slide
- [x] (Mar 20 17) populate titles based on slides
- [x] (Mar 20 17) sliding functionality - flipping through images and excerpts
- [x] (Mar 20 17) nav - display # of dots according to # of slides
- [x] (Mar 20 17) reorganize so that each slide, title, categories, excerpt, etc. are together in one li for ease of wordpress-ifying
- [+] (Mar 20 17) changed navigators to unicode symbols
- [x] (Mar 15 17) add classes and spans/divs to control styling (e.g. spans for titles, dates if will add them)
- [x] (Mar 13 17) Make responsive height/width-wise so can be plugged in to any layout (e.g. Bootstrap)
	- responsive width-wise most important for scaling

## Notes

### Issue: JS or CSS throws off behavior of other sliders when this plugin is active

(Sep 5 17) Noticed when activated on a wordpress site without being used on the page -- the code runs anyway, and some positioning in MetroTheme slider became misaligned. Not sure if this will happen with other sliders. Potential fix may be to tighten up the naming practices of the elements in this slider.

### Issue: Strange behavior when shortcode used in non-widget areas

(Sep 1 17) Potential fix: WP discourages output directly from shortcode, which causes unexpected behavior; to get arounds this, send output to buffer and then return that output. This makes the widget on pages and posts look good, BUT in the widget area the spacing of certain elements (height/padding/margin, something) is thrown off. Not sure why this is (yet).

(Aug 31 17) When used on posts and pages, duplicates the slider & title cards are not formatted correctly for height, and neither is the image area. Eventually whole thing collapses into short divs. Could this be due to some element naming collision? Works fine in widget areas of different themes, at least.

### Issue [Resolved]: Not adding posts categorized as 'Featured' but which have no thumbnail

(Jun 13 17) Used ```if ( has_post_thumbnail() )``` to make sure no posts without an image makes it into the slider. However, this then impacts the number of slides that make it into the slider -- it will not take the top 5 posts without an image, it will take the top 5 posts & then only display those with images (e.g. if 2/5 have no image, then slider will only have 3 slides). This is probably because the query is running before the IF; need to find a way to find the top 5 with image as 1 query.

Solution: Used ```meta_key``` in ```WP_Query``` arguments list to grab posts with filled field ```_thumbnail_id```, meaning they have attached thumbnail images.

### Issue: UNICODE arrows displaying as different sizes

(Jun 6 17) For some reason, &#9668; displays as smaller than &#9658;, even when font-size property was set. Ditched the symbols for <> brackets for now (or permanently).

### Issue [Resolved]: jQuery broken when wordpressified

(Jun 5 17) Once got posts to populate, jQuery worked to cycle through but adding dots, alignment of divs, some other things broke. Currently will strip features and see about restoring basic sliding functionality, then build on top of that to return features.

Addendum 1: Fixed HTML structure which restored some JS functionality. Dots still being weird. Alignment still off. Possibly issue with insufficient post content-> strangely sized, sometimes missing, images, etc.

Addendum 2: Cycling is still weird, titles not linking to correct images, some counter is off somewhere.

Addendum 3: Seems like there is an issue with WP thumbnails in the wordpress install itself, or some configuration of plugins or the theme which is upsetting this.

Solution: Counter discrepancy was caused by selecting ALL li children of ul.slide-list by '.slide-list li'. Changed to immediate descendant selection, '.slide-list > li' and this rectified the issue.

### jQuery selectors

(Apr 3 17) In its current iteration, the nature of the CSS classes and the way they're selected by jQuery means that only one of these sliders should be used on a page at a single time. This is OK for my purposes, but in the future should make it multiple-iteration-proof just for robustness, especially if it will be WordPress-ified.

### slideBackward()

seems to make a weird skipping effect when changing slides,e.g. from the first to the last when going around, or sometimes in the middle. need to check if this repeats on other machines. may not be an issue, since this method will be used once at a time when arrows are clicked, and not for continuous motion like  slideForward()

### Controls (Unicode)

Left arrow (for previous) - &#9668; ```&#9668;```

Right arrow (for next) - &#9658; ```&#9658;```

Open square (navigation dot, unhighlighted) - &#9633; ```&#9633;```

Closed square (navigation dot, highlighted) - &#9632; ```&#9632;```
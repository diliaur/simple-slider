# A simple slider to practice JS/jQuery

## Pre-requisite(s) for Use 
- Images added must be of the same size if you want consistency. (You decide what looks good, but the demo uses 900x300.)


## Key for Task List
- [] to be done
- [+] did this but it wasn't on the todo list
- [x] done from todo list

## Todo

### Display
- [] display - title div slightly shorter than slide div
- ~~~[] nav functionality - select by title on right side~~~
- [] display - control length of titles and excerpts (ellipsis '...' after max # of characters)
- [] display - decide breakpoint: when to break title container off and display it underneath the slider image (otherwise titles stay longer than image and look bad)
- [] display - add test to see when title divs are too small (i.e. when the title and date are getting cut off) and use that to 
- [] display - calculate size of titles based on # of slides
- ~~~[] complete a mockup that looks like finished product, to make sure styles are set~~~
- [] prevent i-bar from coming up when hovering over controls (icing)

### Code refactoring & Testing
- [] test compatibility with different browsers + versions
- [] refactor - separate JS, CSS, and HTML into separate files
- [] refactor - make code look neater (organize & comment)
- [] move functions outside of document.ready() if they don't need to be there

### Wordpressify
- [] wordpress-ify - auto-populate slides, titles, excerpts, etc.
- [] wordpress-ify - display categories
- [] wordpress-ify - jQuery $() workaround
- [] wordpress-ify - link titles to post

## Done
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

### jQuery selectors

(Apr 3 17) In its current iteration, the nature of the CSS classes and the way they're selected by jQuery means that only one of these sliders should be used on a page at a single time. This is OK for my purposes, but in the future should make it multiple-iteration-proof just for robustness, especially if it will be WordPress-ified.

### slideBackward()

seems to make a weird skipping effect when changing slides,e.g. from the first to the last when going around, or sometimes in the middle. need to check if this repeats on other machines. may not be an issue, since this method will be used once at a time when arrows are clicked, and not for continuous motion like  slideForward()

### Controls (Unicode)

Left arrow (for previous) - &#9668; ```&#9668;```

Right arrow (for next) - &#9658; ```&#9658;```

Open square (navigation dot, unhighlighted) - &#9633; ```&#9633;```

Closed square (navigation dot, highlighted) - &#9632; ```&#9632;```
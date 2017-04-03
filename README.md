# A simple slider to practice JS/jQuery

## Pre-requisite(s) for Use 
- Images added must be of the same size if you want consistency. (You decide what looks good, but the demo uses 900x300.)


## Key for Task List
- [] to be done
- [+] did this but it wasn't on the todo list
- [x] done from todo list

## Todo
- [] nav functionality - dots can be clicked and brought to the right slide
- [] nav functionality - select by title on right side
- [] display - control length of titles and excerpts (ellipsis '...' after max # of characters)
- [] display - decide breakpoint: when to break title container off and display it underneath the slider image (otherwise titles stay longer than image and look bad)
- [] display - add test to see when title divs are too small (i.e. when the title and date are getting cut off) and use that to 
- [] calculate size of titles based on # of slides
- ~~~[] complete a mockup that looks like finished product, to make sure styles are set~~~
- [] test compatibility with different browsers + versions
- [] refactor - separate JS, CSS, and HTML into separate files
- [] refactor - make code look neater (organize & comment)
- [] wordpress-ify - auto-populate slides, titles, excerpts, etc.
- [] wordpress-ify - display categories
- [] wordpress-ify - jQuery $() workaround

## Done
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

### slideBackward()

seems to make a weird skipping effect when changing slides,e.g. from the first to the last when going around, or sometimes in the middle. need to check if this repeats on other machines. may not be an issue, since this method will be used once at a time when arrows are clicked, and not for continuous motion like  slideForward()
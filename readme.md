files
=======

* css/main.css          ... primary style sheet
* index.php             ... homepage (currently index.HTML)
* splash.html           ... initital "splash page" that shows before the game starts
* results.html          ... the page you get after you click a photo on index.html (instead of the alert dialogue)
* stats.html            ... leaderboard
* api/instagram_api.php ... php to grab new pics from instagram and add to db
* api/getThings.php     ... php to grab 2 imgs from mongo db
* ?????                 ... php to add win to mongo db
* ?????                 ... php to grab stats
* ?????                 ... php to leader board
* js/main.js            ... instagram api, instaslam db api, ui functions 
    * change var site_url = your localhost or live site url



data
=========

* url
* id
* [tags]
* wins
* losses
* count (times shown)
* username



done
======

- jenn finished much of the design
- mw set up rough approx of jenn's design in html and css
- anthony and mw got the instagram api working with javascript
- mw set up js for switching between tags
- mw: js now triggers php api to grab pics and add to DB
- JK: All the pages exist and are styled (inclduing Typekit fonts). Images have been sliced. Buttons and links have hover states. I started a new JS file for fancy front-end functionality. I have implemented an expand/collapse thingy to the disclaimer in the footer.


next
======

- anthony -- email or post the js. i will put it to use now.
- write basic js function to place 2 images into html
- write html/css/js for prompt after selection
- write js to put new images in db
- write js to grab randome imgs from db
- write js to grab stats from db
- set up server -- this could be a pain. we should get this rolling.
- anything else?
- JK: finish additional front-end fancy javascript, add color to design. 

later (if there's time)
======

- add sliding to logo & menu 
- add functions to select stuff by tag
- create leaderboard
- create leaderboard by tag
- post winners to tumblr
- anything else?


leader board logic
===========

We can have a table

daily_leader = [ID,count,timestamp]
all_time_leader = [ID,count] or top_ten-eva = [{ID, count},{ID, count},{ID, count},{ID, count},...]

Then we ask:

Is today the same day as our current daily leader's timestamp?
yes: does current selection have more wins than the daily leader? 
yes: make selection the leader. stamp it with today's date. 
no: do nothing.
no, different date: 
current selection must be first click for today. make it the leader. the win count doesn't matter.
does former daily leader have more wins than all time leader (or #10 in all time top 10 list)?
yes: make it the all time leader (or rank it in the list and drop number 10)
no: do nothing. 
We can tweak this logic to have a hall fame for each past date. Or do weekly leader. But the stuff above gives us a basic leader board to start with. We can worry about more complicated stuff later.


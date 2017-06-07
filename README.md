# [MRun Webmaster Information](http://mrun.clubrunning.org)

* The website is accessible through FTP/SFTP/SSH. You can use a free client like FileZilla or Cyberduck to access the website's files. Ask the previous MRun webmaster for the username and password. 
* In order to test out the website on your own computer you need to be running a server with PHP. Download xampp to set up your localhost as a server.

## How To Update Website
#### Events
* To update social events, meets, and mass meeting times by editing the `events.txt` file
* Do not change the `#page` and be sure to make sure events are place below the proper page and formatted like: `/Event\`
* Social events go on the current members page, mass meetings and prectice times go on the potential members page
```
#page year
/Month Day Event Name\
/Month Day Event Name @ Location\

#page year
/Month Day Time Event Name @ Location (Building)\
```
#### Meet Results
* To update meet results go into the `results.html` page
* Format the html the same as the other blocks of code and be sure to add `<!--MOST RECENT-->` after the most recent event link (this will update the link on the home page)
```html
<!--XC-->
<h2>Year</h2>
<p>
  <a href="link">Event</a><br>
  <a href="link">Event</a><br>
</p>
<!--XC-->

<!--TF-->
<h2>Year</h2>
<p>
  <a href="link">Event</a><br>
  <a href="link">Event</a><br><!--MOST RECENT-->
</p>
<!--TF-->
```
#### News and Newsletters
* To add newsletters simply add a pdf to the `newsletters` folder saved as `YYYY-MM.pdf`
* To add news articles to the news page add html files to the `articles` folder saved as `YYYY-MM-DD.html`
```html
<h1>Headline</h1>
<p>Paragraph</p>
<h3>Subheadline</h3>
<p>Paragraph</p>
<!--avoid using <h2>-->
```

## When to Update The Website
#### Basic overview
* Keep meet information (dates, locations, results) up to date
* Keep club info (practice time/location, etc.) up to date
* Keep record times document up to date after each meet
* Add/update any information people ask for
* Update social events, meets, and mass meeting times by editing the `events.txt` file.

#### Summer/beginning of the year
* Update pictures on website with new ones from latest track season
* Update board member information on contact page

#### After fall and spring mass meetings
* Put mass meeting slides on website

#### After each meet
* Update results page with link to meet results
*Check if any new club records were set, and add them to the records document
* Possibly add any new pictures from the meet (not always necessary, just if there are any good ones or whatever)

#### Before/during RAM
* Update donation link (IMPORTANT)
* Update RAM information (current year, list of business sponsors)
* Update pictures

#### News and sponsors sections
* Update with new sponsors and newsletters/blog posts as they become available (president or someone else will tell you when there's new sponsor or blog stuff to post, newsletters come out every month)

#### At the end of your term (after next elections, during board transition)
* Give new webmaster access to the records spreadsheet
* Give new webmaster access to google analytics account
* Give new webmaster access to mrunwebmaster@umich.edu (on MCommunity under the groups link)
* Send them this document 

#### Other Responsibilities
* Help out whever is necessary (learn to use google sheets and forms)
* If you are good and graphic design then you can help make S.W.A.G.
* Update the Google Calendar

## Recommended Things To Know
* HTML, CSS
* JavaScript and jQuery
* PHP is optional but helpful
* Bootstrap

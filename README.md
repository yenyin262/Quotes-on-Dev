
# Quotes on Dev Website

This website is based on a WordPress theme by Chris Coyler’s Quotes on Design.  

It consists of a home-page, front-page, about-page, page-archive, archive-page, search-results page, 404-page and a submit-form page.  

The home-page displays random quotes once the button is clicked. The quotes are collected using WP REST API which fetches quotes in a random manner.  On the other hand, the front-page uses a GET request to a WP REST API via AJAX to add a quote without the need to refresh the browser, which then corresponds with an updated URL. 

The POST request to a WP REST API is used on the submit-page, which has a quote submission form when the user is logged in.


# Web Technologies used: 

1.	WordPress
2.	GULP 
3.	SASS
4.	HTML5 
5.	JQuery
6.	AJAX
7.	PHP
8.	Databases
9.	MAMP

# SnapShots 

## Mobile View: 

![mobile archive](https://user-images.githubusercontent.com/43800526/51865853-60a46400-22fc-11e9-8498-790abadd9145.png)


![screencapture-localhost-8888-project_5-submit-a-quote-2019-01-28-12_26_00](https://user-images.githubusercontent.com/43800526/51866460-de1ca400-22fd-11e9-87c7-ef4f6d95bfed.png)



## Tablet View: 
![tablet](https://user-images.githubusercontent.com/43800526/51866056-c42e9180-22fc-11e9-855f-b3a66cf13fb5.png)

![tablet category](https://user-images.githubusercontent.com/43800526/51866079-d4467100-22fc-11e9-9d45-23ec57840b60.png)

## Desktop View: 

![screencapture-localhost-8888-project_5-2019-01-28-12_46_20](https://user-images.githubusercontent.com/43800526/51865723-02778100-22fc-11e9-9114-3b28c03a2acb.png)

![desktopnotlogin](https://user-images.githubusercontent.com/43800526/51865726-04414480-22fc-11e9-8433-00c892353bfb.png)




# Personal Learning Developments: - 

1.	Using appropriate functions to display different number of posts on the archive, page-archive and blog post index. 

2.	Applying GET & POST REQUEST to retrieve data requested and submit data. 

3.	Referred to the WP template hierarchy in generating the required templates for the website.




## Installation instructions

### 1. Download me (don't clone me!)

Then add me to your `wp-content/themes` directory.


### 2. Install the dev dependencies

Next you'll need to run `npm install` **inside your theme directory** to install the npm packages you'll need for Gulp, etc.

### 3. Update the proxy in `gulpfile.js`

Lastly, be sure to update your `gulpfile.js` with the appropriate URL for the Browsersync proxy (so change `localhost[:port-here]/[your-dir-name-here]` to the appropriate localhost URL).

### 4. Import Database

Be sure to import database into your mySQL

### 5. Reset permalinks 

Login into wp-admin to reset the permalinks 

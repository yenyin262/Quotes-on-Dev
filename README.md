
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

#SnapShots: 

## Mobile View: 

![mobile login](https://user-images.githubusercontent.com/43800526/51865138-600ace00-22fa-11e9-99dc-9bde13df2ad8.png)

![mobile archive](https://user-images.githubusercontent.com/43800526/51865144-6305be80-22fa-11e9-940c-5e2807417d51.png)


## Tablet View: 
![tablet](https://user-images.githubusercontent.com/43800526/51864992-18844200-22fa-11e9-92d6-7e1332404547.png)

![tablet category](https://user-images.githubusercontent.com/43800526/51864995-1c17c900-22fa-11e9-99e6-19d6c792ac79.png)

## Desktop View: 

![screencapture-localhost-8888-project_5-2019-01-28-12_46_20](https://user-images.githubusercontent.com/43800526/51865316-c1cb3800-22fa-11e9-9baf-b23419986b8c.png)


![desktopnotlogin](https://user-images.githubusercontent.com/43800526/51865227-95afb700-22fa-11e9-96da-5482801bb51f.png)




# Personal Learning Developments: - 

1.	Using appropriate functions to display different number of posts on the archive, page-archive and blog post index. 

2.	Applying GET & POST REQUEST to retrieve data requested and submit data. 

3.	Referred to the WP template hierarchy in generating the required templates for the website.




## Installation instructions

### 1. Download me (don't clone me!)

Then add me to your `wp-content/themes` directory.

### 2. Rename the `quotesondev-starter-master` directory

Make sure that the theme directory name is project appropriate! Do you need `starter` or `master` in the directory name?

### 3. Install the dev dependencies

Next you'll need to run `npm install` **inside your theme directory** to install the npm packages you'll need for Gulp, etc.

### 4. Update the proxy in `gulpfile.js`

Lastly, be sure to update your `gulpfile.js` with the appropriate URL for the Browsersync proxy (so change `localhost[:port-here]/[your-dir-name-here]` to the appropriate localhost URL).

And now would be a good time to `git init` :)

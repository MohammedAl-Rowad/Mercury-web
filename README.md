# Welcome to Mercury
# :fearful:
### I'm making these notes for future because I don't have the time to make any changes right now, and I believe I will come back to this after a month or two, and I think this will make me remember what I have done.
A Web application using  [Laravel](https://laravel.com/). The PHP Framework For Web Artisans
####  Some notes or 'Todos' :
- PHP [faker](https://github.com/fzaninotto/Faker) for generating database data for testing. :heavy_check_mark:
- [AOS ](https://michalsnik.github.io/aos/) for good animation. :heavy_check_mark:
- [JQuery](https://jquery.com/) . :heavy_check_mark:
- [Webpack](https://webpack.js.org/) & [Babel](https://babeljs.io/) for bundling and compiling [ES6](http://es6-features.org/#Constants) and [SASS](https://sass-lang.com/), of course using [Laravel Mix](https://laravel.com/docs/5.7/mix). :heavy_check_mark:
- [Materialize-css](https://materializecss.com/) for styling and making the website responsive. :heavy_check_mark:
- [Axios](https://github.com/axios/axios) A promise based HTTP client for the browser and node.js. :heavy_check_mark:
- And a little bit of [Vuejs](https://vuejs.org/). :heavy_check_mark:
- Used [particlesjs](https://vincentgarreau.com/particles.js/) . :heavy_check_mark:
- [Redis](https://redis.io/) For caching and enabling real time communication using [Pub/Sub](https://en.wikipedia.org/wiki/Publish%E2%80%93subscribe_pattern)  architecture. :heavy_multiplication_x:
* All the **CRUD** operations are in the models **(static methods)**, and the controllers are just a medium to enable interaction between requests and responses. :heavy_check_mark:
* The **Controllers** only validate the data and return what the models gave them. :heavy_check_mark:
* Almost all the JavaScript code is written in ES6, **some JQuery code only worked when I used ES5**. :heavy_check_mark:
* All The images are minified. :heavy_check_mark:
* Minify CSS and Javascript. :heavy_multiplication_x:

#### Real ' // Todos ' or Bugs :bug:
1 - Fix The bug in the **landing page** (welcome page), login page, and register  page **which you can't notice it the first time!**, and it won't matter but it will make the UI/UX better. :heavy_multiplication_x:
2 - If you have time improve on the wished posts modal **(design)** & the follow request Modal **(Performance)**. :heavy_multiplication_x:
3 - Implement the **Explore**, Which will take a so much Time page. :heavy_multiplication_x:
4 - Make the validation on the login & register uses asynchronous HTTP requests. :heavy_multiplication_x:
5 - Don't forget the Chat and notification, **real time** using Redis .:heavy_multiplication_x:
6 - Add more realistic features to the profile page. :heavy_multiplication_x:
7 - When the user navigate to profile => * clicks on the image * => posts,
the design here is a little bit weird and there is a bug **(the z-index bug)**. :heavy_multiplication_x:
8 - Implement realistic and efficient  search which could be accessed from every where. :heavy_multiplication_x:
9 - I believe that there is more than this   ¯\_(ツ)_/¯.

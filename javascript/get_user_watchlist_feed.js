//This file is autogenerated. See modules.json and autogenerator.py for details

/*
    get_user_watchlist_feed.js

    MediaWiki Action API Code Samples
    Demo of `Feedwatchlist` module: Get a watchlist feed from another user.

    MIT License
*/

var url = "https://en.wikipedia.org/w/api.php"; 

var params = {
    action: "feedwatchlist",
    wlowner: "sample_user",
    wltoken: "sample_watchlist_token"
};

url = url + "?origin=*";
Object.keys(params).forEach(function(key){url += "&" + key + "=" + params[key];});

fetch(url)
    .then(function(response){return response.json();})
    .then(function(response) {console.log(response);})
    .catch(function(error){console.log(error);});

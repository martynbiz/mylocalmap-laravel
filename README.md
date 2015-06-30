My Local Map

Introduction

My Local Map is software written in Laravel for creating location based directories.

Server requirements

Apache 2.4
PHP 5.4+
MySQL
MongoDB

Installation

git clone ...
composer install
npm install
bower install -- do we still need this? we are versioning the files anyway?






Things to add to base-theme: (if i start a new project from this one - merge in the current branch, then remove stuff base-theme doesn't need e.g. controllers, views, libraries, etc), commit base-theme, create new branch from that :)

TODO:

Tags in mongodb

Acl - reported error
https://github.com/kodeine/laravel-acl/issues/28

CREATE LISTING:
- redirect to..? - view
- tags


Jump to.. jump to location (add data-lat and data-lng, and data-zoom?)

MongoDB as it will handle tags much much better

MAP (google maps api, clustering, ui filters)
Filters - Food: supermarkets, farmers' market, butchers, greengrocers, bakery, fish mongers, coffee shops, alchohol; co-operatives, indy record shops, second hand ; clothing,
On change: reload data
http://fronteed.com/iCheck/

TESTING
- *_testing database
- mock auth


Enhancement
- mongodb, heavy use of tags?
- time to put mongo into n odm? or no?





flaws with atom:
- when i rename an open file, it closes that file (do like sublime)



About: local businesses, local produce, organic (food), ethically sourced (?),
Work with us: regional admin - review submitted shops, approve

Splash overlay - what we're about, "OK" button close



Click on result/ pin: open

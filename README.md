My Local Map

*quick todo
- validate listings: description max size, at least one tag
- new tags: cake shop, deli, fruit n veg -> greengrocer

Introduction

My Local Map is software written in Laravel for creating location based directories.

Possible uses - specialized business directory, campsite directory, 

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

Developer Guide

Databases

MyLocalMap uses two databases: MongoDB, and MySQL. As we use Laravel's out of the box
authentication, and possibly ACL - I've stuck with Eloquent.




Things to add to base-theme: (if i start a new project from this one - merge in the current branch, then remove stuff base-theme doesn't need e.g. controllers, views, libraries, etc), commit base-theme, create new branch from that :)

TODO:


MongoDB vs
- city, tags: how to output e.g stirling -> Stirling

ACL
- put users into mongo/ create provider for mongo
- use isAdmin/ isModerator etc for now

- search from home -> /listing (before map clusting)

MAP (google maps api, clustering, ui filters)
Filters - Food: supermarkets, farmers' market, butchers, greengrocers, bakery, fish mongers, coffee shops, alchohol; co-operatives, indy record shops, second hand ; clothing,
On change: reload data
http://fronteed.com/iCheck/

Pages

- listing/show
- listing/edit
- admin/listing
- admin/tags
- admin/users (acl)

- comments
- voting


Javascript changes
- Templates: Handlebar loading
- Collapsible groups/tags
- Store stuff in cookies/account? (e.g. location)
-




V2

USERS (MongoDB)
- move to mongo - create new authentication classes, middleware, etc
- acl - users, user_roles, user_permissions
- seeding

JAVASCRIPT
- load templates via JS
- Jump to.. (geos in data-*), tags

TESTING
- *_testing database
- mock auth


Enhancement

- mongodb, heavy use of tags?
- time to put mongo into n odm? or no?
- bring back turbo links










flaws with atom:
- when i rename an open file, it closes that file (do like sublime)
- no file preview like sublime



About: local businesses, local produce, organic (food), ethically sourced (?),
Work with us: regional admin - review submitted shops, approve

Splash overlay - what we're about, "OK" button close



Click on result/ pin: open


Acl - reported error
https://github.com/kodeine/laravel-acl/issues/28

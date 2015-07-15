My Local Map

localfoodshops.net

Introduction

My Local Map is software written in Laravel for creating location based directories.

Possible uses - specialized business directory, campsite directory, co-operatives, charties

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



eloquent vs mongo
- eloquent lets me ref users
- mongo has neat map functions
- i don't really need mongo now as doing filtering on front end
- eloquent has auth user model


TODO:

* we don't need aggregate apparently

*quick todo
- validate listings: description max size, at least one tag, tag is valid, 
- new tags: cake shop, deli, fruit n veg -> greengrocer, music shops, co-operatives

Pages

- listing/edit
- admin/listing (/approve)
- admin/tags
- admin/users (acl)


Javascript changes
- tick groups, check/uncheck all
- on load hide tags: show arrow box "Select nearest town/city"; on selection,
    show tags; list button for mobile too
-

GUI enhancements
- groups collapse links
- create page - 2 columns, groups collapse
-



V2

Javascript changes
- Templates: Handlebar loading

notifications

- comments
- voting

Checkboxes
http://fronteed.com/iCheck/

MAP
- clustering

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


! revert back to eloquent? :/ .. we've had our fun with mongo, don't need it
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

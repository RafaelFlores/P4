# AGTEL SITE

## Live URL
<http://p4.raspike.me>

## Description
1. A landing page with a description of the app
2. 3 buttons to access features.
3. Lorem Ipsum Generator: You can generate up to 99 paragraphs of
random text. Includes validation. Only integers are accepted,
the field is required. Maximum value of 99
4. Random User Generator: Generate random data for users by default Includes
name and address, it has three additional options: email, username and
password. Validation for number of users: It is a required field. Only
integers are accepted, max number 99.
5. xkcd Password Generator: adapted from p2, Generate xkcd passwords up to 10
words. with two optional fields. include a number and/or include a symbol.
Validation for the number of words: Its a required field, max number of 10,
only integers are accepted.


## Demo
<https://youtu.be/FJTTcZn1ZS4>

## Details for teaching team
This web app has a landing page from where you can access the three tools
It has button on the Top in, the content and in the footer.
Each button is labeled with the name of the tool where it directs.

Each button redirects to an specific route:
"/" for home
"/lorem" for the lorem Ipsum Generator
"randomuser" for the Random User Generator
"passgen" for the xkcd Password Generator

Depending on the access method (Post or Get) the appropriate function in the
controller will take the corresponding action.
and then displayed in the view files.

## Outside code
* For the Lorem Ipsum Generator the badcow/lorem-ipsum package is used.
* For the Random User Generato the fzaninotto/faker package is used.
* For the xkcd Password Generator the code on P2 was adapted to fit this project.
* The css theme was taken from http://html5up.net/alpha

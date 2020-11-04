# Hackers Poulette

- Type of challenge: `consolidation`, SOLO
- Repository: `hackers-poulette`
- Duration: `3 days` 
- Deadline: `28/08/2020 17:00`
- Host : https://www.heroku.com/ (or personnal host)
- Form: https://docs.google.com/spreadsheets/d/15L9ltD_QdwpBJslozFXJYxKxjXsy0DjJW6zTThMIg0g/edit#gid=882975320

CAUTION: This project will use PHP. And we didn't talk about a GitHub Page. Maybe there is a reason.

## Missions objectives

At the end of this challenge you should have improved your:

- *semantical* HTML
- *accessibility* in HTML
- progressive enhancement
- PHP programming
- project planning
- mock-up creation

You should also be able to :

- display errors

## The mission

The company _Hackers Poulette ™_ sells Raspberry Pi accessory kits to build
your own. They want to allow their users to contact their support team. Your
mission is to create a fully-functioning online "contact support" form, in *PHP*. It must *display a contact form* and *process the received answer* (sanitize, validate, answer the user).

[Hackers logo](./hackers-poulette-logo.png)

The form should be comprised of:

- name and lastname
- gender
- email address
- country
- subject (3 possibilities)
- message

NOTE: All field, except _subject_, have to be completed. The field _subject_
takes a default value of *Other*.

### Instructions

Must have:

- the project repository must include a low-fidelity mock-up
- the form's html code *must* be semantically valid
- the HTML *must be* accessible to blind people
- in case of wrong input, the form should display a useful visual clue about the error
- display the error message near the correct input field
- the error message must be readable (helpful to users)
- the form has to be *sanitised* and *validated* (server side)
- if all required inputs are valid, the script should respond by email to a given address
- implement a [honeypot](https://www.thryv.com/blog/honeypot-technique/) anti spam technique.

Optional:

- client side validation with *JavaScript*
- work on a good and clear _user experience_ (UX)
- respond to the user request with [Ajax](https://www.javatpoint.com/ajax-tutorial)

#### Part 0: plan the work ahead

Study all the project aspects, from frontend to backend, then make a mock-up and
finally start coding.

#### Part 1: contact form (html)

Start by creating the HTML of the form, don't forget the *progressive
enhancement* and accessibility to the blinds

#### Part 2: contact form (css, via framework css)

Use *bootstrap*, *bulma*, *materialize*, ... to quickly get your visual, while respecting the graphic chart
below.

- font: https://www.fontsquirrel.com/fonts/bellota 
- colors: #0d8187, #FFF, #303030

#### Part 3: contact form (PHP)

To help you during development, display the *rough data* received from the form
with the help of the [print_r](http://php.net/manual/en/function.print-r.php) PHP function.

#### Part 4: process the form data

Finally, sanitize the input from things like `<script>`, then validate the
content (obligatory field, valid email, etc...), ending by an email sent and a
feedback for the user.

### Resources

- [error message](http://uxmas.com/2012/the-4-hs-of-writing-error-messages)
- [class mailer](https://github.com/PHPMailer/PHPMailer)

### Links

- [Honey](https://www.thryv.com/blog/honeypot-technique/)
- [Ajax](https://www.javatpoint.com/ajax-tutorial)
- [phpr](http://php.net/manual/en/function.print-r.php)




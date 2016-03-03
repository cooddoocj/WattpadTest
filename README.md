# WattpadTest
Wattpad API Test Applications

## What I want to do
I want to be able to:
* Search books by ID
* Get all the books inside a Reading List that I will search by list's ID

## What I expect in response
I expect some book data and metrics, like:
* Title
* Author
  * ID
  * Name
* Description
* Metrics
  * Reading Count
  * Vote Count
  * Comment Count

Would be awesome get data and metrics for chapters too! :)

## Why I want this
* I study statistics and will be a statician in the future
* My girlfriend started writing in Wattpad a year ago and I started to study the metrics, as you can see here: [Book Watcher](http://bookwatcher.servebeer.com)

So, I am interested in this data and it's behaviour, so I can study and also make my girlfriend happy seeing the results and reports :)

## Problems encountered
* Search by Book Title
  * Well, I don't expect a Google Engine here but, sometimes, the most relevant result is not on the "front page" (first 10 results in JSON)
  * There is some books that aren't returned as a result at all! (At first contact with Wattpad Developers they told me that it was because the book was marked as Mature Content and the API don't know my age)
    * Well, the API knows the App's owner by it's API-KEY, so the API knows my age
    * The same book is the first and only result when search it's ID
    * I am a "mature" in whatever country you can think of
* Search by Book ID
  * Some titles simply doesn't return at all
    * **This is MOST IMPORTANT thing that I need**
* Search by custom TAGs inside Book's Description
  * So I tryed putting some sort of TAG inside books' description and tryed to search by this TAG
    * At first glance, it worked like a charm
    * After some time, the resultset became **EMPTY**
    * The last one became empty **TODAY** (O Único Homem da Minha Mulher Sou Eu)
* Search by List ID
  * Never worked
    * Always get error 404, list not found

## What I've tryed
* Use Developers' Playground API-KEY
* Use my own API-KEY
* Create a new account and App to receive a new API-KEY
* Tryed with cURL in command line
* Tryed with Postmaster
* Tryed with PHP and cURL
* Tryed with Python Requests/HTTPLib/URLLib
* Tryed with Python and cURL

So, after everything failed, I did an App Log In to get an Access Token and tryed the whole list again:
* Using my Username, my Access Token and my API-KEY
* Using my Username, my Access Token and Developers' Playground API-KEY
* Using Bearer username, my Access Token and my API-KEY
* Using Bearer username, my Access Token and Developers' Playground API-KEY
* Using my Username, Developers' Playground Access Token and my API-KEY
* Using my Username, Developers' Playground Access Token and Developers' Playground API-KEY
* Using Bearer username, Developers' Playground Access Token and my API-KEY
* Using Bearer username, Developers' Playground Access Token and Developers' Playground API-KEY

## What I need
* HELP!
* HELP!
* HELP!

# FarmToFable

## About

Farm to Fable is the result of a 48-hour hackathon. The project implements an AI chatbot (trained on Azure) and an ethereum blockchain solution. The project's intent was to make blockchain have more commercial acceptance.
This project won first place in this hackathon, as well as people's choice among all contestants.
This repo only contains the front end and static communications which is what I worked on.
The chatbot is currently offline, however when online it connects to a blockchain backend which uses ethereum
based smart contracts which imbue transactions with string values that the farmer can input into the blockchain.
Tools used: Bootstrap, JQuery and PHP (used for the feedback form at the bottom of the page).

## To run 
Have an instance of PHP running (https://www.apachefriends.org/index.html or https://sourceforge.net/projects/wampserver/). The localhost database credentials are as follows:
  
  $servername = "localhost";
  $dblogin = "justince_farmtofable";
  $password = "Sample1234";
  $dbname = "justince_farmtotable";
  
  Clone the repo and open index.html in your browser of choice. 

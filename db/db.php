<?php

$productions = [
  new Movie('Matrix', 'Sci-Fi', ['Keanu Reeves', 'Laurence Fishburne', 'Carrie-Anne Moss'], new Media('locandina.jpg', 'Matrix'), 133, 1999),
  new Movie('Titanic', 'Dramatic', ['Leonardo DiCaprio', 'Kate Winslet', 'Billy Zane'], new Media('locandinapg9.jpg', 'Titanic'), 194, 1998),
  new Movie('Una notte da leoni', 'Comedy', ['Bradley Cooper', 'Ed Helms', 'Zach Galifianakis', 'Heather Graham', 'Justin Bartha'], new Media('locandina-una-notte-da-leoni.jpg', 'Una notte da leoni'), 100, 2009),
  new Movie('Il miglio verde', 'Fantasy', ['Tom Hanks', 'David Morse', 'Michael Clarke Duncan'], new Media('locandina-il-miglio-verde.jpg', 'Il miglio verde'), 188, 1999),
  new SerieTv('Lost', 'Dramatic', ['Matthew Fox', 'Evangeline Lilly', 'Dominic Monaghan', 'Ian Somerhalder'], new Media ('lost.jpg', 'Lost'), 2004, 2010, 122, 6),
  new SerieTv('Breaking Bad', 'Thriller', ['Bryan Cranston', 'Aaron Paul', 'Anna Gunn'], new Media('breaking-bad.jpg', 'Breaking Bad'), 2008, 2013, 62, 5),
  new SerieTv('Tutto in famiglia', 'Comedy', ['Damon Wayans', 'Tisha Campbell-Martin', 'George Gore', 'Parker McKenna Posey'], new Media ('tuttoinfamiglia.jpg', 'Tutto in famiglia'), 2001, 2005, 123, 5),
  new SerieTv('La vita secondo Jim', 'Comedy', ['Jim Belushi', 'Courtney Thorne-Smith', 'Larry Joe Campbell', 'Taylor Atelian'], new Media ('lavitasecondojim.jpg', 'La vita secondo Jim'), 2001, 2009, 182, 8),
];


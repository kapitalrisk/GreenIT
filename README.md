Design4Green 2018
======

This project was realized by a group of five students during 48 hours
on the occasion of the Design4Green challenge which takes place every year.

What is Design4Green ?
----

It is a challenge of eco-design. Compete the best green developer and tomorrow’s talent on a specific subject made by
AGIT during 48 hours non stop which objective is to encourage an federate both students and professionals for sustainable IT.

This project
---

As a result, this project tends to matches all requirements explained in the subject :
1. Have a form of around 90 questions about IT impact on the environment.
2. Keep this form on a single page.
3. Keep the application as light as possible.
4. Desgin a pleasant interface to keep the user interested.
5. Allow users to save their answers and continue filling the form later.

As the importance of the above requirements were not specified, our group mainly focused on having all questions in one page
which lead to a large home page and an average green ranking (50 / 100 according to the tool provided for testing, because of this large page).

Technology used
---
1. We used Python to parse the list of questions provided in an Excel file and generate the database contents.
2. We used SQLite as DBMS for its modularity, lightness and large load support.
3. We used PHP 7.1 with Symfony 4 to generate the form and to interface the database.
4. The DOM is generated using the Twig rendering engine
5. As we belived that Javascript is a huge energy consumer for the client, we decided not to use any Javascript library and use it only when it was strictly essential (when manipulating the DOM or sending form's data to the back-end in order to avoid re-rendering the page)
6. CSS3 was used to style the application, we designed a dark interface as we belived that it would require less energy from the user's screen.

<!DOCTYPE html>
<html>
  <head>
    <style>
        body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

header {
  background-color: #333;
  color: #fff;
  padding: 20px;
}

header nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
}

header nav ul li {
  margin-right: 20px;
}

header nav ul li a {
  color: #fff;
  text-decoration: none;
}

main {
  display: flex;
}

#destinations {
  flex: 2;
  padding: 20px;
}

#destinations ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

#destinations li {
  margin-bottom: 20px
}

#destinations img {
  width: 100%;
}

aside {
  flex: 1;
  padding: 20px;
  background-color: #eee;
}

aside h2 {
  margin-bottom: 20px;
}

aside ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

footer {
  background-color: #333;
  color: #fff;
  padding: 20px;
  text-align: center;
}

    </style>
    <title>Travel Dashboard</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Bookings</a></li>
          <li><a href="#">Account</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <section id="destinations">
        <h2>Popular Destinations</h2>
        <ul>
          <li>
            <img src="paris.jpg" alt="Paris">
            <h3>Paris</h3>
            <p>The city of love, known for its iconic landmarks such as the Eiffel Tower and the Louvre.</p>
          </li>
          <li>
            <img src="new-york.jpg" alt="New York City">
            <h3>New York City</h3>
            <p>The city that never sleeps, known for its diverse culture, shopping and nightlife.</p>
          </li>
          <li>
            <img src="tokyo.jpg" alt="Tokyo">
            <h3>Tokyo</h3>
            <p>The bustling capital of Japan, known for its technology, delicious food and traditional culture.</p>
          </li>
        </ul>
      </section>
      <aside>
        <h2>Upcoming Trips</h2>
        <ul>
          <li>
            <h3>Paris</h3>
            <p>Leaving on June 1st</p>
          </li>
          <li>
            <h3>New York City</h3>
            <p>Leaving on August 15th</p>
          </li>
        </ul>
      </aside>
    </main>
    <footer>
      <p>Copyright © 2021 My Travel Dashboard</p>
    </footer>
  </body>
</html>

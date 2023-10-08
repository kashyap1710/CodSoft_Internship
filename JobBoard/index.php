<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Job Board</title>
    <link rel="stylesheet" href="./styles.css" />
  </head>
  <body>
    <header class="header">
      <nav class="navbar">
        <div class="navbar-brand">
          <h1 class="navbar-title">Job Board</h1>
        </div>
        <ul class="navbar-menu">
          <li><a href="#" class="navbar-link">Home</a></li>
          <li><a href="#" class="navbar-link">Contact</a></li>
          <li><a href="./signup.php" class="navbar-link">Signup</a></li>
          <li><a href="./login.php" class="navbar-link">Login</a></li>
        </ul>
      </nav>
    </header>

    <main class="container">
      <section class="job-listings">
        <h2 class="section-title">Job Listings</h2>
        <ul class="job-list">
          <li class="job-item">
            <h3 class="job-title">Software Developer</h3>
            <p class="job-description">Develop software applications.</p>
          </li>
          <li class="job-item">
            <h3 class="job-title">Graphic Designer</h3>
            <p class="job-description">Design graphics and visuals.</p>
          </li>
          <li class="job-item">
            <h3 class="job-title">Data Analyst</h3>
            <p class="job-description">Analyze data and generate reports.</p>
          </li>
        </ul>
      </section>

      <section class="post-job">
        <h2 class="section-title">Post a Job</h2>
        <form action="#" method="POST" class="job-form">
          <label for="job-title" class="job-label">Job Title:</label>
          <input
            type="text"
            id="job-title"
            name="job-title"
            class="job-input"
            required
          />

          <label for="job-description" class="job-label"
            >Job Description:</label
          >
          <textarea
            id="job-description"
            name="job-description"
            class="job-input"
            required
          ></textarea>

          <button type="submit" class="job-button">Post Job</button>
        </form>
      </section>
    </main>
  </body>
</html>

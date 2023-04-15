<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h1>Welcome to My Portfolio</h1>
            <p>Here you can see some of my recent work and learn more about me.</p>
        </section>
        <?php
            // Define an array of projects
            $projects = array(
                array(
                    "title" => "Project 1",
                    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed sapien eu velit finibus malesuada."
                ),
                array(
                    "title" => "Project 2",
                    "description" => "Pellentesque in mauris at tellus efficitur ultricies vitae eu velit. Aliquam erat volutpat."
                ),
                array(
                    "title" => "Project 3",
                    "description" => "Sed eget felis eget turpis convallis feugiat. Aenean malesuada faucibus urna, eget convallis purus."
                )
            );

            // Loop through the projects array and display each project in a section
            foreach ($projects as $project) {
                echo "<section>";
                echo "<h2>{$project['title']}</h2>";
                echo "<p>{$project['description']}</p>";
                echo "</section>";
            }
        ?>
        <section>
            <h2>Contact Me</h2>
            <form method="post" action="process_form.php">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name"><br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email"><br>

                <label for="message">Message:</label>
                <textarea id="message" name="message"></textarea><br>

                <input type="submit" value="Submit">
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 My Portfolio</p>
    </footer>
</body>
</html>

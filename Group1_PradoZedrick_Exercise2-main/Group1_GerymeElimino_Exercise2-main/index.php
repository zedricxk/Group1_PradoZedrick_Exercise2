<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meet the Crew</title>
    <link rel="icon" type="image/png" href="team.png">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <img src="team.png" alt="Team Logo" class="logo">
        <h1>Meet Our Team</h1> 
        <p>Our talented and experienced team is here to lead with innovation.</p>
    </header>

    <div class="team-container">
        <?php

        $team = [
            [
                "name" => "Geryme Elimino",
                "role" => "Team Leader",
                "description" => "An Artist and an IT Student",
                "image" => "ger.jpg",
                "facebook" => "https://www.facebook.com/GrymGdLmn/",
                "instagram" => "https://www.instagram.com/_draw.meeee/"
            ],
            [
                "name" => "Jestine Toribio",
                "role" => "Co-Leader",
                "description" => "A Gamer and an IT Student",
                "image" => "jes.jpg",
                "facebook" => "https://www.facebook.com/jestine517",
                "instagram" => "https://www.instagram.com/_draw.meeee/"
            ],
            [
                "name" => "Zedrick Prado",
                "role" => "Member",
                "description" => "An IT Student and Cyclist",
                "image" => "zed.jpg",
                "facebook" => "https://www.facebook.com/zedd1717",
                "instagram" => "https://www.instagram.com/_draw.meeee/"
            ],
            [
                "name" => "Joseph Hansol",
                "role" => "Member",
                "description" => "IT Wizard and Gamer",
                "image" => "jos.jpg",
                "facebook" => "https://www.facebook.com/joseph.hansol.9",
                "instagram" => "https://www.instagram.com/_draw.meeee/"
            ],
            [
                "name" => "Chel Sea Ordoña ",
                "role" => "Member",
                "description" => "One of the boys, IT Student",
                "image" => "chel.jpg",
                "facebook" => "https://www.facebook.com/profile.php?id=100010720775747",
                "instagram" => "https://www.instagram.com/_draw.meeee/"
            ]
        ];

        foreach ($team as $member) {
            echo "<div class='team-member'>
                    <img src='{$member['image']}' alt='{$member['name']}'>
                    <h3>{$member['name']}</h3>
                    <p><strong>{$member['role']}</strong></p>
                    <p>{$member['description']}</p>
                    <div class='social-icons'>
                    
                        <a href='{$member['facebook']}' target='_blank'>
                            <img src='facebook.png' alt='Facebook' class='icon'>
                        </a>
                        <a href='{$member['instagram']}' target='_blank'>
                            <img src='instagram.png' alt='Instagram' class='icon'>
                        </a>
                    </div>
                  </div>";
        }
        ?>
    </div>

    <script src="script.js"></script>
</body>
</html>

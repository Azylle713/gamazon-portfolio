<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Midterm</title>
    <link rel="stylesheet" href="Achievements.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/js/lightbox.min.js"></script>
</head>
<body>
    <div class="background">
        <div class="nav">
            <p class="title"></p>

            <ul>
                <li><a href="indexIn.php">Home</a></li>
                <li><a href="AchievementsIn.php">Achievements</a></li>
                <li><a href="HobbiesIn.php">Hobbies</a></li>
                <li><a href="EducationIn.php">Education</a></li>
                <li><a href="ContactIn.php">Contact</a></li>
                <li class="nav-item"><a href="logout.php">Log out</a></li>
            </ul>
        </div>

        <h1>Achievements</h1>
        <h2>Certificates</h2>
        <div class="container">

            <div class="certificate-scroll">
                <div class="certificate-item">
                    <a href="a1.png" data-lightbox="certificates" class="certificate-item" data-title="Certificate 1">
                        <img src="a1.png" alt="Certificate 1">
                    </a>
                </div>
                <div class="certificate-item">
                    <a href="a2.png" data-lightbox="certificates" class="certificate-item" data-title="Certificate 2">
                        <img src="a2.png" alt="Certificate 2">
                    </a>
                </div>
                <div class="certificate-item">
                    <a href="a3.png" data-lightbox="certificates" class="certificate-item" data-title="Certificate 3">
                        <img src="a3.png" alt="Certificate 3">
                    </a>
                </div>
                <div class="certificate-item">
                    <a href="a4.png" data-lightbox="certificates" class="certificate-item" data-title="Certificate 4">
                        <img src="a4.png" alt="Certificate 4">
                    </a>
                </div>
                <div class="certificate-item">
                    <a href="a5.png" data-lightbox="certificates" class="certificate-item" data-title="Certificate 5">
                        <img src="a5.png" alt="Certificate 5">
                    </a>
                </div>
                <div class="certificate-item">
                    <a href="a6.png" data-lightbox="certificates" class="certificate-item" data-title="Certificate 6">
                        <img src="a6.png" alt="Certificate 6">
                    </a>
                </div>
                <div class="certificate-item">
                    <a href="a7.png" data-lightbox="certificates" class="certificate-item" data-title="Certificate 7">
                        <img src="a7.png" alt="Certificate 7">
                    </a>
                </div>
                <div class="certificate-item">
                    <a href="a8.png" data-lightbox="certificates" class="certificate-item" data-title="Certificate 8">
                        <img src="a8.png" alt="Certificate 8">
                    </a>
                </div>
            </div>
        </div>
        <br>
        <h2>Dean's Lister</h2>
        <div class="container">
            <div class="certificate-scroll">
                <div class="certificate-item">
                    <a href="dl1.jpg" data-lightbox="new-section" class="certificate-item" data-title="Image 1">
                        <img src="dl1.jpg" alt="Image 1">
                    </a>
                </div>
                <div class="certificate-item">
                    <a href="dl2.jpg" data-lightbox="new-section" class="certificate-item" data-title="Image 2">
                        <img src="dl2.jpg" alt="Image 2">
                    </a>
                </div>
            </div>
        </div>

    </div>


    <script>
        // Add a script to handle the click event for the close button
        document.addEventListener('DOMContentLoaded', function () {
            document.addEventListener('click', function (event) {
                if (event.target.classList.contains('lightbox-title-close')) {
                    // Close the lightbox when the close button is clicked
                    lightbox.close();
                }
            });
        });
    </script>
</body>
</html>

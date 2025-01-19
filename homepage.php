<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtual Art Gallery - Homepage</title>
    <link rel="stylesheet" href="homepage.css">
</head>
<body>
    <div class="background-blur"></div>
    <div class="container homepage-container">
        <h1>Welcome to the Virtual Art Gallery</h1>

        <!-- Art Submission Section -->
        <section class="upload-art">
            <h2>Would you like to share your art?</h2>
            <form action="gallery.php" method="POST" enctype="multipart/form-data">
                <input type="file" name="artwork" accept="image/*" required>
                <button type="submit">Submit Your Art</button>
            </form>
        </section>

        <!-- Famous Artworks and Quotes -->
        <section class="famous-art">
            <div class="artwork">
                <img src="starrynight.jpg" alt="Starry Night by Vincent van Gogh">
                <blockquote>
                    "Great art picks up where nature ends." <br>
                    — Marc Chagall
                </blockquote>
            </div>
            <div class="artwork">
                <img src="monalisa.jpg" alt="Mona Lisa by Leonardo da Vinci">
                <blockquote>
                    "Art is the lie that enables us to realize the truth." <br>
                    — Pablo Picasso
                </blockquote>
            </div>
        </section>

        <!-- Button to Enter the Gallery -->
        <a href="game.html"><button class="enter-gallery">Enter the Gallery</button></a>
    </div>
</body>
</html>

<?php include 'Components/Header.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/style.css">
    <title>Harley</title>
</head>

<body>

    <div class="scroll-container">
        <div class="section hero-section">
            <div class="floating-icons">
                <img src="Assets/adobe-after-effects-icon.png" alt="Adobe after effects" class="ae">
                <img src="Assets/adobe-premiere-pro-icon.png" alt="Adobe premier pro" class="pr">
                <img src="Assets/capcut-icon.png" alt="capcut" class="capcut">
                <img src="Assets/figma.png" alt="figma" class="figma">
                <img src="Assets/css.png" alt="css" class="css">
                <img src="Assets/html.png" alt="html" class="html">

            </div>

            <div class="image1">
                <img src="Assets/homepage image.png" id="img1" alt="img1">
            </div>

            <div class="hero-container">
                <div class="intro-text">
                    <div class="welcome">WELCOME TO MY</div>
                    <div class="portfolio">PORTFOLIO</div>
                </div>
            </div>

            <div class="bg-gradient"></div>

            <div class="scroll-down">
                <svg width="46" height="46" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 21V3"></path>
                    <path d="m18 15-6 6-6-6"></path>
                </svg>
                <span>See More</span>
            </div>

        </div>

        <!-- <div class="image-overlay"></div> -->

        <div class="section next-section">
            <div class="left-side-container">
                <div class="hi">Hi I'm</div>
                <div class="harley-name">HARLEY</div>
                <div class="role">Junior Full Stack Developer</div>
                <div class="paragraph-1">
                    <p>A dedicated Junior Full Stack Developer that brings the best version of the clients task and do it professionally. I offer an affordable and skill base rate in order to met the expectation of the clients</p>
                </div>
                <div class="button-group">
                    <button class="button-see-more">About Me</button>
                    <button class="button-projects">Projects</button>
                </div>
            </div>

            <div class="right-side-container">


            </div>

        </div>

    </div>


    <script>
        let isScrolling = false;
        const container = document.querySelector('.scroll-container');

        container.addEventListener('wheel', (e) => {
            if (isScrolling) return;

            isScrolling = true;
            if (e.deltaY > 0) {
                container.scrollBy({
                    top: window.innerHeight,
                    behavior: 'smooth'
                });
            } else {
                container.scrollBy({
                    top: -window.innerHeight,
                    behavior: 'smooth'
                });
            }

            setTimeout(() => {
                isScrolling = false;
            }, 800);
        });

        const hero = document.querySelector('.hero-section');
        const icons = document.querySelector('.floating-icons');

        document.querySelector('.scroll-container').addEventListener('scroll', () => {
            const scrollY = document.querySelector('.scroll-container').scrollTop;
            const opacity = 1 - (scrollY / window.innerHeight);
            icons.style.opacity = opacity;
            hero.querySelector('.intro-text').style.opacity = opacity;
            hero.querySelector('.image1').style.opacity = opacity;
        });
    </script>
</body>



</html>
<style>
    .home-caption-cover {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        /* adjust the opacity to your liking */
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .home-caption-cover h1 {
        color: #fff;
        font-size: 48px;
        /* adjust the font size to your liking */
        text-align: center;
    }

    .carousel-item img {
        height: 90vh;
        object-fit: cover;
        width: 100%;
    }
</style>
</head>

<body>
    <section id="home" class="vh-100">
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="logo-4.png" class="d-block w-100" alt="paris tower">
                    <div class="home-caption-cover d-flex justify-content-center align-items-center">
                        <h1 class="text-center" data-tra="welcome">Welcome <br> To Our Recycling page.</h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/home1.jpg" class="d-block w-100" alt="buildings">
                    <div class="home-caption-cover d-flex justify-content-center align-items-center">
                        <h1 class="text-center" data-tra="focus">Focused <br>On Strategy.</h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/celiloos.jpg " class="d-block w-100" alt="bridge">
                    <div class="home-caption-cover d-flex justify-content-center align-items-center">
                        <h1 class="text-center" data-tra="advanced">Advanced in <br>Digital Works.</h1>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden" data-tra="previous">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden" data-tra="next">Next</span>
            </button>
        </div>
    </section>

<?php include "config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Elite Resort</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

</head>
<body>

<!-- HERO SECTION -->
<section class="hero" id="home">

    <header>
        <div class="logo-container">
            <img src="https://tse2.mm.bing.net/th/id/OIP.9DPxIjmhIfdUFE0FA7u_bQHaHa?rs=1&pid=ImgDetMain&o=7&rm=3">
            <h2>Elite Resort</h2>
        </div>

           <nav>
            <a href="#home">Home</a>
            <a href="#rooms">Rooms</a>
            <a href="#services">Services</a>
            <a href="#gallery">Gallery</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
            <a href="login.php">Admin Login</a>
            <a href="booking.php" class="btn">Book Now</a>
        </nav>
    </header>

    <div class="hero-overlay">
        <div class="hero-content">
            <h1>Experience Luxury & Comfort</h1>
            <p>Stay at the Finest Hotel in the City</p>
            <a href="#rooms" class="btn">Book Your Stay</a>
        </div>
    </div>

</section>

<!-- ROOMS (DYNAMIC) -->
<section class="rooms-section" id="rooms">

    <h2 class="section-title">OUR ROOMS</h2>

    <p class="section-desc">
        Elevate the joy of exploring a new city or the rewards that come with a productive day.
    </p>

    <div class="room-slider">

        <!-- Left Preview -->
        <div class="room-preview left">
            <img id="leftPreview">
        </div>

        <!-- Main Image -->
        <div class="room-main">
            <img id="mainRoomImg">
        </div>

        <!-- Purple Info Box -->
        <div class="room-info">
            <h3 id="roomTitle"></h3>
            <p id="roomDesc"></p>

            <!-- ✅ FIXED BUTTON -->
            <a id="viewDetailsBtn" class="btn">VIEW DETAILS</a>
        </div>

        <!-- Right Preview -->
        <div class="room-preview right">
            <img id="rightPreview">
        </div>

        <!-- Navigation -->
        <div class="room-nav">
            <span class="prev">&#8592;</span>
            <span id="roomCounter">1 / 3</span>
            <span class="next">&#8594;</span>
        </div>

    </div>

</section>
<!-- AMENITIES -->
<section class="amenities" id="services">
    <div class="section-header dark">
        <h2>Our Amenities</h2>
    </div>
    <p class="subtitle dark-text">Explore Our Hotel</p>

    <div class="amenities-container">
        <div class="amenity">
            <div class="icon">🧖</div>
            <p>Spa & Wellness</p>
        </div>
        <div class="amenity">
            <div class="icon">🏊</div>
            <p>Outdoor Pool</p>
        </div>
        <div class="amenity">
            <div class="icon">🍽</div>
            <p>Fine Dining</p>
        </div>
        <div class="amenity">
            <div class="icon">🏋️</div>
            <p>Fitness Center</p>
        </div>
    </div>
</section>

<section class="center-gallery" id="gallery">

    <h2 class="gallery-title">GALLERY</h2>

    <div class="gallery-wrapper">

        <!-- Left Preview -->
        <div class="side-image">
            <img id="galleryLeft">
        </div>

        <!-- Main Image -->
        <div class="main-image">
            <img id="galleryMain">
        </div>

        <!-- Right Preview -->
        <div class="side-image">
            <img id="galleryRight">
        </div>

        <!-- Arrows -->
        <button class="gallery-prev">&#8249;</button>
        <button class="gallery-next">&#8250;</button>

    </div>

</section>
<!-- ===== LUXURY EXPERIENCE SLIDER ===== -->
<section class="experience">

    <div class="experience-header">
        
        <h2>CONNECT WITH YOUR SENSES</h2>
        <p>
            Treat your wandering soul to a blissful retreat.
            From indulgent spa treatments to invigorating workouts,
            there's a moment of calm waiting for you.
        </p>
    </div>

    <div class="experience-wrapper">

        <div class="experience-text">
        <div class="section-icon">✿</div>
    <h3 id="expSubTitle">Spa & Wellness</h3>
    <p id="expText">
        Refresh from a day of city adventures at our serene spa.
        Find yourself enveloped in luxurious treatments designed
        to rejuvenate your mind, body and soul.
    </p>

    <div class="experience-nav">
        <span id="prevBtn">&#8592;</span>
        <span id="counter">1 / 3</span>
        <span id="nextBtn">&#8594;</span>
    </div>
</div>

        <div class="experience-image">
            <img id="expImage"
                 src="https://images.unsplash.com/photo-1544161515-4ab6ce6db874?w=1200">
        </div>

    </div>

</section>

<!-- ===== TESTIMONIAL SECTION ===== -->
<section class="testimonials">
    <div class="testimonial-header">
        <h2>EXPERIENCES THAT INSPIRE</h2>
        <p>
            Within our blend of hospitality, lies a genuine passion
            to make your experience more than a stay.
            Their stories have inspired us, as we prepare to welcome you.
        </p>
    </div>

    <div class="testimonial-container">

        <div class="testimonial-card">
            <div class="quote-icon">“</div>
            <h3>GOOD FOOD, GREAT A COMFORTABLE PLACE TO SEE COLOMBO FROM</h3>
            <p>
                Well looked after in this modern downtown Colombo hotel.
                Extensive smorgasbord for breakfast, good sized gym and tea
                of all flavours! Clean spacious rooms and a good laundry
                service. We walked places but transport readily available
                when it was too hot.
            </p>
            <span>Anne B, Australia</span>
        </div>

        <div class="testimonial-card">
            <div class="quote-icon">“</div>
            <h3>BEAUTIFUL HOTEL & LOCATION</h3>
            <p>
                The hotel is one of the best in Colombo. I have stayed here
                several times before and have never had any complaints.
                Special mention to the staff who deal with guests' needs with ease.
            </p>
            <span>Dillon M, United Kingdom</span>
        </div>

        <div class="testimonial-card">
            <div class="quote-icon">“</div>
            <h3>SUPER SEAFOOD AT LAGOON</h3>
            <p>
                We enjoyed coming back to Lagoon for dinner,
                which has maintained its high standards for delicious
                and fresh seafood. The red curry white fish and tamarind
                cuttlefish were great.
            </p>
            <span>Shamara, Sri Lanka</span>
        </div>

    </div>

</section>

<section class="location-section">
    <div id="map"></div>
</section>

<!-- ABOUT -->
<section class="about" id="about">

    <div class="section-header">
        <h2>ABOUT US</h2>
    </div>

    <p class="subtitle">Welcome to Elite Resort</p>

    <div class="about-container">

        <div class="about-image">
            <img src="https://thepuxuan.com/file/webpage/shared/banner/dining/lobby-atrium-mid.webp">
        </div>

        <div class="about-content">
            <h3>Luxury & Comfort Redefined</h3>

            <p>
                Elite Resort offers luxury rooms, world-class service,
                fine dining, relaxing spa experiences and unforgettable
                comfort designed for your perfect stay.
            </p>

            <p>
                Whether you are traveling for business or leisure,
                our elegant spaces and exceptional hospitality
                create an experience beyond expectations.
            </p>

            <a href="about.php" class="about-btn">Learn More</a>

        </div>

    </div>

</section>

<section class="contact" id="contact">

    <div class="section-header">
        <h2>CONTACT US</h2>
    </div>

    <p class="subtitle">Get in Touch</p>

    <div class="contact-container">

        <div class="contact-form">

            <form id="contactForm">

                <div class="form-row">
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                </div>

                <textarea name="message" placeholder="Your Message" required></textarea>

                <button type="submit" class="contact-btn">
                    Send Message
                </button>

            </form>

        </div>

        <div class="contact-map">
            <img src="https://i.pinimg.com/736x/03/33/64/033364440dbaef7d3ba27f5622cdb4d0.jpg">
        </div>

    </div>

</section>

<script>
document.addEventListener("DOMContentLoaded", function () {

    const galleryImages = [
        "https://images.unsplash.com/photo-1590490360182-c33d57733427?auto=format&fit=crop&w=1200&q=80",
        "https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?auto=format&fit=crop&w=1200&q=80",
        "https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?auto=format&fit=crop&w=1200&q=80",
        "https://images.unsplash.com/photo-1552566626-2d907dab0dff?auto=format&fit=crop&w=1200&q=80"
    ];

    let current = 0;

    const main = document.getElementById("galleryMain");
    const left = document.getElementById("galleryLeft");
    const right = document.getElementById("galleryRight");

    const prevBtn = document.querySelector(".gallery-prev");
    const nextBtn = document.querySelector(".gallery-next");

    function updateGallery() {
        main.src = galleryImages[current];
        left.src = galleryImages[(current - 1 + galleryImages.length) % galleryImages.length];
        right.src = galleryImages[(current + 1) % galleryImages.length];
    }

    nextBtn.addEventListener("click", function () {
        current = (current + 1) % galleryImages.length;
        updateGallery();
    });

    prevBtn.addEventListener("click", function () {
        current = (current - 1 + galleryImages.length) % galleryImages.length;
        updateGallery();
    });

    updateGallery();
});
</script>
<script>
document.addEventListener("DOMContentLoaded", function () {

    const rooms = [
        {
            id: 1,
            title: "DELUXE ROOM",
            desc: "Setting the pace for a grand adventure in the city.",
            img: "https://images.unsplash.com/photo-1590490360182-c33d57733427"
        },
        {
            id: 2,
            title: "EXECUTIVE SUITE",
            desc: "Experience elevated comfort with elegant design.",
            img: "https://images.unsplash.com/photo-1560448204-e02f11c3d0e2"
        },
        {
            id: 3,
            title: "PRESIDENTIAL SUITE",
            desc: "An exquisitely designed suite offering ultimate luxury.",
            img: "https://images.unsplash.com/photo-1582719478250-c89cae4dc85b"
        }
    ];

    let index = 0;

    const mainImg = document.getElementById("mainRoomImg");
    const leftPreview = document.getElementById("leftPreview");
    const rightPreview = document.getElementById("rightPreview");
    const roomTitle = document.getElementById("roomTitle");
    const roomDesc = document.getElementById("roomDesc");
    const counter = document.getElementById("roomCounter");
    const viewBtn = document.getElementById("viewDetailsBtn");

    const prevBtn = document.querySelector(".prev");
    const nextBtn = document.querySelector(".next");

    function updateRoom() {

        mainImg.src = rooms[index].img;
        roomTitle.textContent = rooms[index].title;
        roomDesc.textContent = rooms[index].desc;

        leftPreview.src = rooms[(index - 1 + rooms.length) % rooms.length].img;
        rightPreview.src = rooms[(index + 1) % rooms.length].img;

        counter.textContent = (index + 1) + " / " + rooms.length;

        // ✅ FIX: dynamic link
        viewBtn.onclick = function () {
            window.location.href = "room_details.php?id=" + rooms[index].id;
        };
    }

    nextBtn.addEventListener("click", function () {
        index = (index + 1) % rooms.length;
        updateRoom();
    });

    prevBtn.addEventListener("click", function () {
        index = (index - 1 + rooms.length) % rooms.length;
        updateRoom();
    });

    updateRoom();
});
</script>


<script>
document.getElementById("contactForm").addEventListener("submit", function(e){
    e.preventDefault();

    let formData = new FormData(this);

    fetch("send_message.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.text())
    .then(data => {

        if(data.trim() === "success"){
            alert("Message sent successfully!");
            document.getElementById("contactForm").reset();
        }
        else if(data.trim() === "empty"){
            alert("Please fill all fields!");
        }
        else{
            alert("Something went wrong!");
        }

    })
    .catch(error => {
        alert("Error sending message!");
    });
});
</script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
var swiper = new Swiper(".mySwiper", {
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
</script>

<script>
const subTitles = [
"Spa & Wellness",
"Infinity Pool Experience",
"Fitness & Gym"
];

const texts = [
`Refresh from a day of city adventures at our serene spa.
Find yourself enveloped in luxurious treatments designed
to rejuvenate your mind, body and soul.`,

`Take a dip in not one, but two refreshing pools and
find your moment of calm. Feel the city hustle wash away
with every soothing lap.`,

`Yet to hit your 10k steps? With two fully equipped gyms,
maintaining your fitness routine has never been easier,
whether you are on vacation or on a work trip.`
];

const images = [
"https://images.unsplash.com/photo-1544161515-4ab6ce6db874?w=1200",
"https://images.unsplash.com/photo-1507525428034-b723cf961d3e?w=1200",
"https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=1200"
];

let current = 0;

const expText = document.getElementById("expText");
const expImage = document.getElementById("expImage");
const counter = document.getElementById("counter");
const expSubTitle = document.getElementById("expSubTitle");

document.getElementById("nextBtn").addEventListener("click", () => {
    current = (current + 1) % texts.length;
    updateExperience();
});

document.getElementById("prevBtn").addEventListener("click", () => {
    current = (current - 1 + texts.length) % texts.length;
    updateExperience();
});

function updateExperience() {
    expText.style.opacity = 0;
    expImage.style.opacity = 0;
    expSubTitle.style.opacity = 0;

    setTimeout(() => {
        expSubTitle.innerText = subTitles[current];
        expText.innerText = texts[current];
        expImage.src = images[current];
        counter.innerText = (current + 1) + " / 3";

        expText.style.opacity = 1;
        expImage.style.opacity = 1;
        expSubTitle.style.opacity = 1;
    }, 300);
}
</script>

<script>
    var map = L.map('map', {
        scrollWheelZoom: false
    }).setView([6.9271, 79.8612], 11);

    L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    function addHotelMarker(lat, lng) {
        return L.circleMarker([lat, lng], {
            radius: 10,
            fillColor: "#5e2b97",
            color: "#5e2b97",
            weight: 2,
            opacity: 1,
            fillOpacity: 1
        }).addTo(map);
    }

    addHotelMarker(6.9271, 79.8612);
    addHotelMarker(6.9000, 79.8700);
    addHotelMarker(6.8500, 79.9200);

</script>

<script>
var swiper = new Swiper(".mySwiper", {
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
</script>


<script>
document.addEventListener("DOMContentLoaded", function () {

    const rooms = [
        {
            title: "DELUXE ROOM",
            desc: "Setting the pace for a grand adventure in the city.",
            img: "https://images.unsplash.com/photo-1590490360182-c33d57733427"
        },
        {
            title: "EXECUTIVE SUITE",
            desc: "Experience elevated comfort with elegant design and city views.",
            img: "https://images.unsplash.com/photo-1560448204-e02f11c3d0e2"
        },
        {
            title: "PRESIDENTIAL SUITE",
            desc: "An exquisitely designed suite offering ultimate luxury.",
            img: "https://images.unsplash.com/photo-1582719478250-c89cae4dc85b"
        }
    ];

    let index = 0;

    const mainImg = document.getElementById("mainRoomImg");
    const leftPreview = document.getElementById("leftPreview");
    const rightPreview = document.getElementById("rightPreview");
    const roomTitle = document.getElementById("roomTitle");
    const roomDesc = document.getElementById("roomDesc");
    const counter = document.getElementById("roomCounter");

    function updateRoom() {
        if (!mainImg) return; // safety check

        mainImg.src = rooms[index].img;
        roomTitle.innerText = rooms[index].title;
        roomDesc.innerText = rooms[index].desc;

        leftPreview.src = rooms[(index - 1 + rooms.length) % rooms.length].img;
        rightPreview.src = rooms[(index + 1) % rooms.length].img;

        counter.innerText = (index + 1) + " / " + rooms.length;
    }

    document.querySelector(".next").onclick = function () {
        index = (index + 1) % rooms.length;
        updateRoom();
    };

    document.querySelector(".prev").onclick = function () {
        index = (index - 1 + rooms.length) % rooms.length;
        updateRoom();
    };

    updateRoom();
});
</script>
</body>
</html>
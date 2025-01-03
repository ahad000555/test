<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
            scroll-behavior: smooth;
		
		body {
            
             background-color: #0d1b2a;
            color: #fff;
            overflow-x: hidden;
        }
		
		
		
		
		
		        /* Navigation Styles */
        /* Navigation Styles */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 1.2rem 3rem; /* Slightly increased padding for spacing */
            background-color: rgba(13, 27, 42, 0.95);
            z-index: 1000;
            transition: background-color 0.3s ease-in-out;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Added shadow for a floating effect */
        }

        .logo {
            font-size: 13px;
            color: #ffd400;
            font-weight: bold;
        }

        nav {
            display: flex;
            align-items: center;
        }

        nav ul {
            list-style-type: none;
            display: flex;
            margin-right: 40px;
        }

        nav ul li {
            margin-right: 40px;
        }

        nav ul li a {
            text-decoration: none;
            color: #fff;
            font-weight: 540;
            position: relative;
            transition: color 0.3s, background-color 0.3s; /* Transition for background color */
            padding: 10px 15px; /* Increased padding */
            font-size: 14px;
            border-radius: 5px; /* Rounded corners */
        }

        /* Styles for dropdown menu when shown */
        nav ul.show {
            display: flex; /* Show flex when the menu is active */
            flex-direction: column; /* Stack items vertically */
            position: absolute;
            top: 60px; /* Position the dropdown */
            left: 0; /* Align to the left */
            width: 100%; /* Full width */
            background-color: rgba(13, 27, 42, 0.95); /* Semi-transparent background */
            padding: 1rem; /* Padding for the dropdown */
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5); /* Shadow for depth */
        }

        /* Hover Effects for Menu Items */
        nav ul li a:hover {
            color: #feda6a; /* Change text color on hover */
            background-color: rgba(255, 255, 255, 0.1); /* Light background on hover */
        }

        nav ul li a::before {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #fff;
            transform: scaleX(0);
            transform-origin: bottom left;
            transition: transform 0.3s ease;
        }

        nav ul li a:hover::before {
            transform: scaleX(1);
            transform-origin: bottom right;
        }

        /* Glass Button Styles */
        .glass-button {
            display: inline-block;
            padding: 11px 27px;
            font-size: 14px;
            border-radius: 30px;
            color: #ffd400;
            text-decoration: none;
            background: transparent;
            backdrop-filter: blur(8px);
            box-shadow: 0 8px 32px rgba(31, 38, 135, 0.37);
            border: 1px solid #ffd400;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            margin-left: 20px; /* Adds a gap between button and the menu */
        }

        .glass-button:hover {
            background-color: #ffd400;
            color: #0d1b2a;
            transform: translateY(0px);
        }

        .glass-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.2);
            transform: skewX(-15deg);
            transition: all 0.5s ease;
        }

        .glass-button:hover::before {
            left: 100%;
        }

        /* Mobile Styles */
        .menu-icon {
            display: none;
            font-size: 30px;
            color: #fff;
            cursor: pointer;
        }

        @media (max-width: 768px) {
            header {
                padding: 1rem 2rem; /* Adjust padding for mobile */
            }

            nav ul {
                display: none;
                flex-direction: column; /* Stack vertically on mobile */
                width: 100%; /* Full width */
                left: 0; /* Align to the left */
                background: rgba(255, 255, 255, 0.1); /* Semi-transparent white background */
                backdrop-filter: blur(10px); /* Blur effect for premium feel */
                border-radius: 10px; /* Rounded corners */
                box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); /* Shadow for depth */
                padding: 1rem; /* Padding for the dropdown */
                transition: all 0.3s ease; /* Smooth transition */
            }

            nav ul.show {
                display: flex; /* Show the menu when toggled */
            }

            nav ul li {
                margin: 5px 0px;
                padding-bottom: 5px;
                text-align: left; /* Align text to the left */
                border-bottom: 1px solid rgba(255, 255, 255, 0.3); /* Divider between items */
                padding-left: 20px; /* Add padding for left alignment */
            }

            nav ul li:last-child {
                border-bottom: none; /* Remove border from the last item */
            }

            nav ul li a {
                font-size: 14px; /* Larger font for readability */
                padding: 10px 15px; /* Padding for touch devices */
                color: #ffff; /* Primary color for text */
                /* Removed hover transition effects for mobile */
            }

            nav ul li a:hover {
                /* Removed hover effects for mobile */
				background: transparent; /* No background change */
				color: #ffd400; /* No color change */
				
            }
			
			
			
			nav ul li a::before {
				content: '';
				position: absolute;
				bottom: 0px;
				left: 0;
				width: 0%;
				height: 0px;
				background-color: transparent;
				transform: scaleX(0);
				transform-origin: bottom left;
				transition: transform 0.3s ease;
			}

			nav ul li a:hover::before {
				transform: scaleX(0);
				transform-origin: bottom right;
			}

            .menu-icon {
                display: block;
                margin-top: -4%;
                margin-right: -10px;
            }

            /* Adjust Contact Button for Mobile */
            .glass-button {
                display: inline-block;
                font-size: 12px; /* Larger font for readability */
                padding: 10px 20px; /* Adjusted padding */
                margin-right: 20px;
            }
        }


		
		
		
		

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            position: relative;
            padding: 50px;
            text-align: left;
            flex-wrap: wrap; /* Allow wrapping on smaller screens */
			margin-top: 100px;
        }

        .bg-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('your-photo1.jpg') no-repeat center center;
            background-size: cover;
            filter: blur(5px);
            z-index: 1;
        }

        .content {
            position: relative;
            z-index: 2;
            display: flex;
            width: 100%;
            max-width: 1200px;
            background-color: rgba(13, 27, 42, 0.85); /* Slightly transparent Dark Blue */
            border-radius: 8px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.5);
            padding: 40px;
			
        }

        .contact-info {
            flex: 1;
            padding-right: 20px; /* Space between columns */
        }

        .contact-info h2 {
            font-size: 25px;
            color: #f4d160; /* Gold */
            margin-bottom: 10px;
        }

        .contact-info p {
			font-size: 13px;
            margin-bottom: 15px;
            color: #aad1e6; /* Light Blue */
        }

        .social-media {
            margin-top: 230px;
        }
		.social-media h3{
		margin-bottom: 10px;
		}

        .social-media a {
            color: #f4d160; /* Gold */
            margin-right: 15px;
            font-size: 22px;
            transition: color 0.3s;
        }

        .social-media a:hover {
            color: #e1c15c; /* Darker Gold */
        }

        .form-container {
            flex: 1;
            padding-left: 20px; /* Space between columns */
        }
		.form-container h2{
		font-size: px;
		margin-bottom: 5px;
		}
        .form-group {
            margin-bottom: 20px;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 5px;
            background-color: #151D27; /* Darker Background for inputs */
            color: #ffffff;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border: 2px solid #f4d160; /* Gold */
        }

        .submit-btn {
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 5px;
            background-color: #f4d160; /* Gold */
            color: #0d1b2a; /* Dark Blue for text */
            font-size: 18px;
            font-weight: 700;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }

        .submit-btn:hover {
            background-color: #e1c15c; /* Darker Gold */
            transform: translateY(-2px); /* Slight lift effect */
        }
		
		
		
/* Footer */
        footer {
            background-color: #0d1b2a;
            padding: 2rem;
            text-align: center;
            color: #f4d160;
	    font-size: 14px;
        }

        footer p {
            margin-bottom: 0;
        }
		

        @media (max-width: 768px) {
            .content {
                flex-direction: column; /* Stack columns on smaller screens */
				
				padding: 1.5rem;
				width: 130%; /* Adjusted width, takes up 90% of the available space */
				max-width: 500px; /* Increased max-width of the cards */
            }
            .contact-info,
            .form-container {
                padding: 0; /* Remove padding for smaller screens */
                margin-bottom: 20px; /* Space between stacked items */
            }
            h2 {
                font-size: 24px; /* Adjust heading size */
            }
			.social-media {
            margin-top: 60px;
			}
			.form-container h2{
			visibility: hidden;
			}
			.container {
			padding: 20px;
			}
        }
    </style>
</head>
<body>


    <!-- Navigation Section -->
    <header>
        <div class="logo">
            <h1> <a href="index.html" style="text-decoration: none; color: #ffd400;"><span style="font-family:Blippo, fantasy;">𝔄ℌ𝔄𝔇'𝔰.</span><span style="font-size: 8px;"> &nbspTERRITORY.</span> </a></h1>
        </div>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="education.html">Education</a></li>
                <li><a href="experience.html">Work</a></li>
                <li><a href="life-events.html">Life Events</a></li>
                <li><a href="explores.html">Explores</a></li>
            </ul>
            
            <a href="contact.html" class="glass-button">Contact</a>
            <span class="menu-icon" onclick="toggleMenu()">&#9776;</span>
        </nav>
    </header>

    <script>
        function toggleMenu() {
            const navUl = document.querySelector('nav ul');
            navUl.classList.toggle('show');
        }
    </script>

	
<!-- Contact -->

	<div class="container">
		<div class="bg-image"></div>
		<div class="content">
			<div class="contact-info">
				<h2>Contact Information</h2>
				<p><strong>Phone:</strong><span style="color:#ffffff;"> +8801540111693 </span></p>
				<p><strong>Email:</strong><span style="color:#ffffff;"> ahad000555ex@gmail.com</span></p>
				<p><strong>Address:</strong><span style="color:#ffffff;"> Dhanmoni, Dhaka, BD</span></p>
				<p><strong>Hometown:</strong><span style="color:#ffffff;"> Chandpur, Bangladesh</span></p>
				<div class="social-media">
					<h3>Follow Me</h3>
					<a href="https://www.facebook.com/abd.ahad.001" target="_blank" title="Facebook"><i class="fab fa-facebook"></i></a>
					<a href="https://wa.me/+8801540111693" target="_blank" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
					
					<a href="https://www.threads.net/@cal.ahad" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
					<a href="#" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
				</div>
			</div>
			<div class="form-container">
				<h2>Get in Touch</h2>
				<form id="contact-form">
					<div class="form-group">
						<input type="text" name="name" placeholder="Your Name" required aria-label="Your Name">
					</div>
					<div class="form-group">
						<input type="email" name="email" placeholder="Your Email" required aria-label="Your Email">
					</div>
					<div class="form-group">
						<textarea name="message" rows="5" placeholder="Your Message" required aria-label="Your Message"></textarea>
					</div>
					<button type="submit" class="submit-btn">Send Message</button>
				</form>


			</div>
		</div>
	</div>

<!-- Footer -->
    <footer>
        <p>&copy; 2024 Abdul Ahad. All rights reserved.</p>
    </footer>
	
		<script>
		// Initialize EmailJS
emailjs.init("FYPLlSj9sj-5pVIB-"); // Replace with your EmailJS User ID

// Handle Form Submission
document.getElementById("contact-form").addEventListener("submit", function (e) {
    e.preventDefault(); // Prevent default form submission

    const formData = {
        name: this.name.value, // Get the value of the "name" input
        email: this.email.value, // Get the value of the "email" input
        message: this.message.value, // Get the value of the "message" textarea
    };

    // Send email via EmailJS
    emailjs.send("service_489umxq", "template_wt3rb5s", formData)
        .then(function (response) {
            alert("Message sent successfully!");
            console.log("SUCCESS!", response.status, response.text);
        })
        .catch(function (error) {
            alert("Failed to send message. Please try again.");
            console.error("FAILED...", error);
        });
});

		</script>

</body>
</html>

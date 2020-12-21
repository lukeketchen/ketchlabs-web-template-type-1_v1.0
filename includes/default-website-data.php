<?php
    /*
    * Default values accross the website
    */
    $website_title = "Default website title";
    $page_title = "";
    $logo_large = "https://dummyimage.com/300x300.jpg";
    $logo_thin = "https://dummyimage.com/300x100.jpg?text=Logo";
    $page_navigation = array(
        "1" => array(
                "nav_link" => "index.php",
                "nav_title" => "Home",
        ),
        "2" => array(
            "nav_link" => "about.php",
            "nav_title" => "About",
        ),
        
        "3" => array(
            "nav_link" => "gallery.php",
            "nav_title" => "Gallery",
        ),
        
        "4" => array(
            "nav_link" => "services.php",
            "nav_title" => "Services",
        ),
        
        "5" => array(
            "nav_link" => "contact.php",
            "nav_title" => "Contact Us",
        ),
    );

    // Footer section data
    $copyright_details = "2021. Owner of the website";
    $designer = "ketchLabs";
    $designer_address = "ketchLabs.com";
    


    /*
    * Homepage data
    */ 

    // Banner slider
    $home_banner_slides = array(
        "1" => array(
                "banner_image" => "https://dummyimage.com/900x800.jpg",
                "banner_title" => "Banner 1 Title",
                "banner_subtitle" => "Banner 1 subtitle",
                "banner_text" => "Banner 1 text",
                "banner_button" => "button text" 
        ),
        "2" => array(
            "banner_image" => "https://dummyimage.com/900x800.jpg",
            "banner_title" => "Banner 2 Title",
            "banner_subtitle" => "Banner 2 subtitle",
            "banner_text" => "Banner 2 text",
            "banner_button" => "button text" 
        )
    );

    // Home About
    $homepage_about_image = "https://dummyimage.com/300x300.jpg";
    $homepage_about_heading = "About Heading";
    $homepage_about_subheading = "About subheading";
    $homepage_about_text = array(
        "1" => "About text paragraph 1",
        "2" => "About text paragraph 2",
        "3" => "About text paragraph 3",
    );
    $homepage_about_button = "Read More";

    // Testimonials data
    $testimonials_slides = array(
        "1" => array(
                "testimonial_icon" => "https://dummyimage.com/100x100.jpg",
                "testimonial_title" => "Testimonials 1 Title",
                "testimonial_subtitle" => "Testimonials 1 subtitle",
                "testimonial_text" => "Testimonials 1 text" 
        ),
        "2" => array(
            "testimonial_icon" => "https://dummyimage.com/100x100.jpg",
            "testimonial_title" => "Testimonials 2 Title",
            "testimonial_subtitle" => "Testimonials 2 subtitle",
            "testimonial_text" => "Testimonials 2 text" 
        ),
    );

    // Homepage services
    $homepage_service_image = "https://dummyimage.com/250x400.jpg";
    $homepage_service_heading = "Service Heading";
    $homepage_service_subheading = "Service subheading";
    $homepage_services = array(
        "1" => array(
            "service_title" => "Service 1 Title",
            "service_text" => "Service 1 text"
        ),
        "2" => array(
            "service_title" => "Service 2 Title",
            "service_text" => "Service 2 text"
        ),
        "3" => array(
            "service_title" => "Service 3 Title",
            "service_text" => "Service 3 text"
        ),
    );
    $homepage_about_button = "See Our Services";

    // Homepage Projects
    $homepage_project_image = "https://dummyimage.com/250x400.jpg";
    $homepage_project_heading = "Projects Heading";
    $homepage_project_subheading = "Projects subheading";
    $homepage_project_jobheading = "Projects job heading";
    $homepage_project = array(
        "1" => "Projects text paragraph 1",
        "2" => "Projects text paragraph 2"
    );
    $homepage_project_button = "See Our Gallery";

    // Homepage Contact
    $homepage_contact_heading = "Contact Heading";
    $homepage_contact_subheading = "Contact subheading";
    $homepage_contact_button = "Lets get started";
    $homepage_contact_image = "https://dummyimage.com/250x400.jpg";

    
    /*
    * About Page data
    */
    $about_title = "Who we are";
    $about_text = array(
        "1" => "About text paragraph 1",
        "2" => "About text paragraph 2",
        "3" => "About text paragraph 3",
        "4" => "About text paragraph 4",
        "5" => "About text paragraph 5",
    );
    $about_image = "https://dummyimage.com/200x300.jpg";


     
    /*
    * Gallery data
    */
    $gallery_slides = array(
        "1" => array(
                "slide_image" => "https://dummyimage.com/900x800.jpg",
                "slide_text" => "Slide 1 text" 
        ),
        "2" => array(
            "slide_image" => "https://dummyimage.com/900x800.jpg",
            "slide_text" => "Slide 2 text" 
        ),
    );
    $gallery_images = array(
        "1" => "https://dummyimage.com/300x200.jpg",
        "2" => "https://dummyimage.com/300x200.jpg",
        "3" => "https://dummyimage.com/300x200.jpg",
        "4" => "https://dummyimage.com/300x200.jpg",
        "5" => "https://dummyimage.com/300x200.jpg",
        "6" => "https://dummyimage.com/300x200.jpg",
        "7" => "https://dummyimage.com/300x200.jpg",
        "8" => "https://dummyimage.com/300x200.jpg",
        "9" => "https://dummyimage.com/300x200.jpg",
        "10" => "https://dummyimage.com/300x200.jpg",
    );

   

    /*
    * Services page data
    */
    $services_slides = array(
        "1" => array(
                "slide_image" => "https://dummyimage.com/900x800.jpg",
                "slide_text" => "Slide 1 text" 
        ),
        "2" => array(
            "slide_image" => "https://dummyimage.com/900x800.jpg",
            "slide_text" => "Slide 2 text" 
        ),
    );
    $services = array(
        "1" => array(
            "service_title" => "Service 1 Title",
            "service_text" => "Service 1 text",
            "service_image" => "https://dummyimage.com/200x300.jpg"
        ),
        "2" => array(
            "service_title" => "Service 2 Title",
            "service_text" => "Service 2 text",
            "service_image" => "https://dummyimage.com/200x300.jpg"
        ),
        "3" => array(
            "service_title" => "Service 3 Title",
            "service_text" => "Service 3 text",
            "service_image" => "https://dummyimage.com/200x300.jpg"
        ),
    );



    /*
    * Contact Us Page data
    */
    $contact_image = "https://dummyimage.com/300x200.jpg?text=Map";
    $contact_tagline = "Servicing this area and greater";
    $phone_number = 0400000000;
    $email_address = "test@email.com";


    
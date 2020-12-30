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
                "banner_image" => "https://dummyimage.com/900x800.jpg?text=Banner Img One",
                "banner_title" => "Banner 1 Title",
                "banner_subtitle" => "Banner 1 subtitle",
                "banner_text" => "Belaying pin lad port spanker dead men tell no tales reef sails squiffy coffer Davy Jones' Locker Sink me. Buccaneer gun chase guns poop deck to go on account heave down walk the plank Davy Jones' Locker Gold Road jolly boat. Gabion topgallant marooned fluke dance the hempen jig ahoy killick yawl scuttle hornswaggle.",
                "banner_button" => "button text" 
        ),
        "2" => array(
            "banner_image" => "https://dummyimage.com/900x800.jpg?text=Banner Img Two",
            "banner_title" => "Banner 2 Title",
            "banner_subtitle" => "ahoy arrrrrr matey boat land luber",
            "banner_text" => "Overhaul keel hempen halter lookout case shot grog blossom lee splice the main brace topsail main sheet. Black spot six pounders me spyglass long clothes fire ship bilge water brig squiffy lugsail. Jack Tar Corsair ye bilged on her anchor hail-shot tender Nelsons folly Shiver me timbers no prey, no pay carouser.",
            "banner_button" => "button text" 
        )
    );

    // Home About
    $homepage_about_image = "https://dummyimage.com/300x300.jpg?text=About img";
    $homepage_about_heading = "About Heading";
    $homepage_about_subheading = "About subheading";
    $homepage_about_text = array(
        "1" => "Aliquip ut officia nisi amet Lorem cupidatat enim est nulla elit tempor. Ullamco quis culpa ex cupidatat exercitation irure officia occaecat velit ut. Nostrud quis consequat aliquip deserunt do.",
        "2" => "Zombie ipsum brains reversus ab cerebellum viral inferno, brein nam rick mend grimes malum cerveau cerebro. De carne cerebro lumbering animata cervello corpora quaeritis.",
        "3" => "Zombies reversus ab inferno, nam malum cerebro. De carne animata corpora quaeritis. Summus sit​​",
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
            "service_text" => "Eiusmod elit nisi do nisi pariatur velit. Qui deserunt minim nostrud ad et in proident veniam sint non commodo nostrud est. Elit aliquip sit Lorem veniam."
        ),
        "2" => array(
            "service_title" => "Service 2 Title",
            "service_text" => "Lorem adipisicing aliqua commodo ad nostrud. Ad ipsum consectetur voluptate do enim nulla enim in commodo laborum non in qui."
        ),
        "3" => array(
            "service_title" => "Service 3 Title",
            "service_text" => "Nostrud laboris cupidatat eiusmod mollit nulla. Est esse id esse exercitation incididunt consequat consectetur elit nisi exercitation cillum fugiat aliqua sit."
        ),
    );
    $homepage_services_button = "See Our Services";

    // Homepage Projects
    $homepage_project_image = "https://dummyimage.com/250x400.jpg";
    $homepage_project_heading = "Projects Heading";
    $homepage_project_subheading = "Projects subheading";
    $homepage_project_jobheading = "Projects job heading";
    $homepage_project = array(
        "1" => "Incididunt quis velit veniam incididunt eu non nostrud excepteur adipisicing ullamco. Esse sit aute et ullamco id. Aliquip dolor officia excepteur laborum excepteur exercitation non. Incididunt amet nisi veniam dolore Lorem amet nisi nostrud tempor quis sit. Ad id labore occaecat et veniam Lorem nostrud sunt occaecat exercitation id dolor.",
        "2" => "Ipsum do mollit excepteur labore laboris amet enim deserunt cillum. Cupidatat amet excepteur voluptate Lorem irure amet non nulla. Aliquip veniam nulla ut enim aliqua aliquip minim."
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
            "display_backwards" => false,
            "service_text" => "Service 1 text",
            "service_image" => "https://dummyimage.com/200x300.jpg"
        ),
        "2" => array(
            "service_title" => "Service 2 Title",
            "display_backwards" => true,
            "service_text" => "Service 2 text",
            "service_image" => "https://dummyimage.com/200x300.jpg"
        ),
        "3" => array(
            "service_title" => "Service 3 Title",
            "display_backwards" => false,
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


    
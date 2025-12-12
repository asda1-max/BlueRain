<?php
// Example projects array
$projects = [
    [
        'title' => 'Project One',
        'image' => './assets/img/proj-1.png',
        'description' => 'This is the first featured project.',
        'featured' => true
    ],
    [
        'title' => 'Project Two',
        'image' => './assets/img/proj-2.png',
        'description' => 'Another cool project.',
        'featured' => false
    ],
    [
        'title' => 'Project Three',
        'image' => './assets/img/proj-3.png',
        'description' => 'Yet another project.',
        'featured' => false
    ]
];
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects Hub</title>
    <link rel="stylesheet" href="./css/basic-component.css">
    <link rel="stylesheet" href="./css/decoration.css">
    <link rel="stylesheet" href="./css/fonts.css">
    <link rel="stylesheet" href="./css/basic-animation.css">
    <link rel="stylesheet" href="./css/custom-animation.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
    @keyframes spin {
        0% { transform: rotate(0deg);}
        100% { transform: rotate(360deg);}
    }
    </style>
</head>
<body class="primaryBackgroundColor">

    <!-- Navbar -->
    <nav class="v-navbar inter-Font" id="navbar">
        <svg width="30" height="30" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
            style="position:absolute; top : 40px; right :-1px; cursor:pointer" id="navbarActivator" class="nav-button">
            <rect x="10" y="6" width="16" height="2" rx="1.5" />
            <rect x="10" y="12.5" width="16" height="2" rx="1.5" />
            <rect x="10" y="19" width="16" height="2" rx="1.5" />
        </svg>
        <img src="./assets/logo/azerothsitelogo.png" alt="logo" width="100" height="45" style="margin-left: 8px;">
        <ul>
            <li><a href="index.html" style="all: unset;"><p>Home</p></a></li>
            <li><p>Profile</p></li>
            <div class="li-cur"><p>Projects</p></div>
            <li><p>Track Record</p></li>
            <li><p>Blog</p></li>
        </ul>
    </nav>
    <!-- Navbar End -->

    <!-- Main Section -->
    <div class="main-content mainBackground roundedBackground animate__slideInDown">
        <div class="container">
            <h1 class="inter-Font-Bold fontColorMain" style="scale: 1.2;">
                <center>PROJECTS HUB</center>
            </h1>
        </div>
    </div>

    <!-- Featured Projects -->
    <div class="main-content">
        <div class="container">
            <div class="g-container">
                <div class="g-box-fullsize mainBackground roundedBackground inter-Font fontColorMain animate__slideInLeft" style="display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center;">
                    <h1>FEATURED PROJECTS</h1>
                    <?php foreach ($projects as $project): ?>
                        <?php if ($project['featured']): ?>
                            <div class="container roundedBackground2" style="padding: 4px; margin-bottom: 20px;">
                                <img src="<?php echo htmlspecialchars($project['image']); ?>" style="border-radius: 10px; height: 380px; width: 600px;" alt="">
                                <h2><?php echo htmlspecialchars($project['title']); ?></h2>
                                <p><?php echo htmlspecialchars($project['description']); ?></p>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Other Projects -->
    <div class="main-content">
        <div class="container">
            <div class="g-container">
                <div class="g-box-fullsize mainBackground roundedBackground inter-Font fontColorMain animate__slideInRight" style="display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center;">
                    <h1>ALL PROJECTS</h1>
                    <?php foreach ($projects as $project): ?>
                        <?php if (!$project['featured']): ?>
                            <div class="container roundedBackground2" style="padding: 4px; margin-bottom: 20px;">
                                <img src="<?php echo htmlspecialchars($project['image']); ?>" style="border-radius: 10px; height: 200px; width: 320px;" alt="">
                                <h2><?php echo htmlspecialchars($project['title']); ?></h2>
                                <p><?php echo htmlspecialchars($project['description']); ?></p>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Section End-->

    <script>
    const toggleB = document.getElementById("navbarActivator")
    const navbar = document.getElementById("navbar")
    toggleB.addEventListener("click", () => {
        navbar.classList.toggle("showNavbar")
    });
    </script>
</body>
</html>
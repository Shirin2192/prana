<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Coming Soon</title>
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&amp;family=Sora:wght@100..800&amp;display=swap"
    rel="stylesheet"> 
    <link rel="shortcut icon" type="image/x-icon" href="images/logo/favicon.png">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/slicknav.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link href="css/all.css" rel="stylesheet" media="screen">
    <link href="css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/mousecursor.css">
    <link href="css/custom.css" rel="stylesheet" media="screen">
    <link href="css/style.css" rel="stylesheet" media="screen">   
    <style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        font-family: "playfair-display-semi-bold", serif;
        background: #3d5641;
        color: #ffffff;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding: 1rem;
    }

  
   

    h1 {
        font-size: 3rem;
        margin-bottom: 1rem;
        color: #fff;
    }

    p {
        font-size: 1.2rem;
        margin-bottom: 2rem;
        color: #cccccc;
    }

    .notify-input {
        display: flex;
        justify-content: center;
        margin-top: 1rem;
        flex-wrap: wrap;
    }

    input[type="email"] {
        padding: 0.75rem 1rem;
        border: none;
        border-radius: 8px 0 0 8px;
        font-size: 1rem;
        outline: none;
        width: 250px;
    }

    button {
        padding: 0.75rem 1.2rem;
        border: none;
        background-color: #22170D;
        color: white;
        font-size: 1rem;
        border-radius: 0 8px 8px 0;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    button:hover {
        background-color:#B99178;
    }

    @media (max-width: 500px) {
        h1 {
            font-size: 2.2rem;
        }

        .notify-input {
            flex-direction: column;
        }

        input[type="email"],
        button {
            border-radius: 8px;
            width: 100%;
            margin: 0.5rem 0;
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: scale(0.95);
        }

        to {
            opacity: 1;
            transform: scale(1);
        }
    }
    </style>
</head>

<body>
    <div class="container">
        <img src="images/logo/landing-logo.png" alt="Logo" class="logo mb-5 w-25">
        <h1>Coming Soon...</h1>
        <p>We’re working hard to bring you something amazing. Stay tuned!</p>
    </div>
</body>

</html>
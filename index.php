<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Kailey Chew">
    <title>Kailey Chew</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&family=Roboto+Mono&family=Rajdhani&family=Oswald:wght@200&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
</head>

<body>

    <a class="anchor" id="top"></a>
    <header>
        <div id="nav">
            <ul>
                <li><a href="#top"><button>home</button></a></li>
                <li><a href="#experience"><button>experience</button></a></li>
                <li><a href="#projects"><button>projects</button></a></li>
                <li><a href="#contact"><button>contact</button></a></li>
            </ul>
        </div>
    </header>
    

    <section id = "intro">
        <img id="profile" src="images/pic.jpeg"/>
        <div class="container" id="blurb">
            <h1 id="name">Kailey Chew</h1>
            <p>Welcome to my website! I'm happy to have you here. If you'd like to read my resume: </p>
            <a href="includes/Kailey Chew Resume.pdf" download="Kailey Chew Resume" target="_blank"><img style="width: 80px; height: 52px;" src=https://img.icons8.com/carbon-copy/2x/resume.png/></a>
        </div>
    </section>
    

    <section id="main">
        <div class="container fade-in">
            <a class="anchor" id="experience"></a>
            <h2>Experience</h2>
            <?php
            if(array_key_exists('button1', $_POST)) { 
                button1(); 
            }
            function button1() { 
                $ch = curl_init();
                curl_setopt($ch,CURLOPT_URL,"https://www.reddit.com/r/Thritis/.json");
                curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
                curl_setopt($ch,CURLOPT_HEADER, true);
                $response = curl_exec($ch);
                echo $response;
            }
            ?> 
            <form method="post"> 
                <input type="submit" name="button1"
                        class="button" value="Button1" />
            </form> 
            <table>
                <tr>
                    <td>Python</td>
                    <td>Java</td>
                    <td>HTML/CSS</td>
                    <td>Linux</td>
                </tr>
            </table>
        </div>
        <div class="container fade-in">
            <a class="anchor" id="projects"></a>
            <h2>Current Projects</h2>
            <table>
                <tr>
                    <td><a href="https://www.student.math.uwaterloo.ca/~k2chew/CheckPoint/" target="_blank">CheckPoint</a><br>HTML/CSS, PHP, SQL</td>
                    <td>Algorithmic War Game: Python</td>
                    <td>Ingredient Simplifier: Typescript</td>
                </tr>
            </table>
        </div>
        <div class="container fade-in">
            <a class="anchor" id="contact"></a>
            <h2>Contact Me</h2>
            <p>+1 (778) 858 9728</p>
            <a href=mailto:kailey.chew@uwaterloo.ca><p>kailey.chew@uwaterloo.ca</p></a>
            <a href=https://github.com/k-chew target="_blank"><img src="https://img.icons8.com/material-rounded/96/000000/github.png"/></a>
            <a href=https://www.linkedin.com/in/kailey-chew-30753719b/ target="_blank"><img src="https://img.icons8.com/ios-filled/100/000000/linkedin.png"/></a>
        </div>
    </section>
</body>
<footer>
    <text id="copyright">&copy;Kailey Chew May 2020</text>
    <text id="coded-with">coded with HTML & CSS</text>
</footer>
</html>
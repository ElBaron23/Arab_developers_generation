<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{name}} CV</title>
    <style>
    body{
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        line-height: 1.6;
        color: #333;
    }

header {
    background-color: #000;
    color: white;
    padding: 20px 10%;
    text-align: center;
}

header h1 {
    margin: 0;
    font-size: 2.5em;
    }

header p {
    margin: 5px 0;
    }

.container {
    padding: 20px 10%;
}

.section {
    margin-bottom: 30px;
}

.section h2 {
    border-bottom: 2px solid #000;
    padding-bottom: 5px;
    margin-bottom: 15px;
    color: #000;
    }

.profile, .education, .skills, .experience {
    list-style: none;
    padding: 0;
}

.profile li, .education li, .skills li, .experience li {
    margin-bottom: 10px;
}

.skills {
    display: flex;
    flex-wrap: wrap;
    }

.skills li {
    margin-right: 15px;
    background-color: #f0f0f0;
    padding: 5px 10px;
    border-radius: 5px;
}


    </style>
</head>
<body>
    <header>
        <h1>{{name}}</h1>
        <p>Front-End Developer</p>
    </header>

    <div class="container">
        <section class="section">
            <h2>Profile</h2>
            <ul class="profile">
                <li>Passionate about web development and data analysis.</li>
                <li>Experience in HTML, CSS, JavaScript, and Python.</li>
                <li>Member of the EMJE club at ENSA Marrakech.</li>
            </ul>
        </section>

        <section class="section">
            <h2>Education</h2>
            <ul class="education">
                <li><strong>{{country}}</strong> - {{desc}}</li>
            </ul>
        </section>

        <section class="section">
            <h2>Skills</h2>
            <ul class="skills">
                {{skills}}
            </ul>
        </section>

        <section class="section">
            <h2>Experience</h2>
            <ul class="experience">
                <li>Intern at Codesoft - Worked on landing page projects using HTML and CSS.</li>
                <li>Hackathon Participant - Built creative solutions in coding competitions.</li>
                <li>Developed a cybersecurity quiz for beginners during a competition.</li>
            </ul>
        </section>

        <section class="section">   
            <h2>Contact</h2>
            <ul class="profile">
                <li>Email: {{email}}</li>
                <li>Phone: {{number}}</li>
                <li>LinkedIn: <a href="{{linkedin}}" target="_blank">{{name}}</a></li>
                <li>Instagram: <a href="{{$instagram}}" target="_blank">{{name}}</a></li>
            </ul>
        </section>
    </div>
</body>
</html>

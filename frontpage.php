<?php
include_once("info.php");
?>

<main id="main">
    <article id="Home">
        <p>Copenhagen School of Design and Technology (KEA) offers practice-oriented, higher education developed in close cooperation with the business community and educational institutions in Denmark and abroad.</p>
        <section id="pictures">
            <img src="img/education.jpg" id="education" alt="Education at KEA">
            <img src="img/håndværkergården.jpg" id="building" alt="Guldbergsgade 29, Copenhagen">
        </section>
    </article>
    <article id="About">
        <section>
            <form method="POST" action="">
                <select name="language" onchange="this.form.submit()">
                    <option value="english">English</option>
                    <option value="danish">Danish</option>
                </select>
            </form>
            <p>
                <?php
                if ($_COOKIE["language"] == "danish") {
                    echo $danishInfo->content;
                } else {
                    echo $englishInfo->content;
                }
                ?>
            </p>
        </section>
    </article>
    <article id="CS">
        <section>
            <p>The AP in Computer Science programme teaches you about databases and their structure. You will gain a foundation in information technology, and learn to develop, refine and maintain IT systems. On the programme, you will learn to design and develop programs and apps in collaboration with others, and you will also learn about programming, needs analysis and business understanding.</p>
        </section>
        <section class="semester">
            <header>Semesters 1 to 3</header>
            <article class="subject">
                <header>Programming</header>
                <main>General programming is taught based on syntax, programming method and program design, from a beginner’s level. You will learn to program in the following languages: Java and Javascript. You can choose other coding languages as electives.</main>
            </article>
            <article class="subject">
                <header>Systems Development</header>
                <main>Teaching in this area focuses on systems development theory and method, from pre-analysis to testing systems. Iterative methods, such as Scrum, are primarily taught.</main>
            </article>
            <article class="subject">
                <header>Businesses</header>
                <main>Drawing on organisational theory, you will learn to analyse organisational contexts you can use in systems development and in relation to implementing new systems in organisations.</main>
            </article>
            <article class="subject">
                <header>Technology</header>
                <main>You will learn about computers down to component level, and up into the cloud, so that you understand the processes running on computers that can affect your systems development process and programming.</main>
            </article>
        </section>
        <section class="semester">
            <header>Semester 4</header>
            <article class="subject">
                <header>Electives</header>
                <main>Examples of elective subjects include programming mobile devices, web programming, Security and Artificial Intelligence.</main>
            </article>
        </section>
        <section class="semester">
            <header>Semester 5</header>
            <article class="subject">
                <header>Internship</header>
                <main>A 10-week internship takes place in a relevant business in which you can try out what you have learned in the course of study.</main>
            </article>
            <article class="subject">
                <header>Final Project</header>
                <main>The study programme concludes with a project where you specialise within a given topic. The project follows on from the internship, which often provides the basis for the final project.</main>
            </article>
        </section>
    </article>
    <article id="SD">
        <section>
            <p>On the software development top-up programme you will learn how to develop and manage large distributed data-intensive systems. You will work with all the various aspects of software development, such as databases, contracts, testing, systems integration, project management and systems development.</p>
        </section>
        <section class="semester">
            <header>Semester 1</header>
            <article class="subject">
                <header>Databases for Developers</header>
                <main>Database types, database optimisation, administrative tools, transactions, security. In the module you will learn to choose and use the correct database solutions for various tasks. In addition, you will also analyse and work with large databases and tasks, such as redesign and operations optimization.</main>
            </article>
            <article class="subject">
                <header>Testing</header>
                <main>Test strategies, types, models, verification, validation, contracts. In the module you will learn to plan, carry out tests, and integrate tests in strategies, development processes and quality assurance.</main>
            </article>
            <article class="subject">
                <header>Development of Large Systems</header>
                <main>Management techniques, quality systems, distributed development, patterns and frameworks. In the module you will learn how to plan and manage development processes with many project participants. You will also learn how to design and implement large systems that consist of small parts from independent development groups.</main>
            </article>
        </section>
        <section class="semester">
            <header>Semester 2</header>
            <article class="subject">
                <header>System Integration</header>
                <main>Data conversion, migration, standards, SOA - service-oriented architecture. In the module you will learn to integrate existing systems and integrate existing systems in connection with the development of new systems. You also learn to develop new systems that support integration in the future.</main>
            </article>
            <article class="subject">
                <header>Electives</header>
                <main>In addition to the obligatory part of the programme, there are two elective subjects in which you can specialise in, for example, Project Management.</main>
            </article>
        </section>
        <section class="semester">
            <header>Semester 3</header>
            <article class="subject">
                <header>Internship</header>
                <main>You enter into a 2 months internship in a business either in Denmark or abroad. Your internship advisor at KEA will help you with any practical questions concerning your internship with a host company which you must find yourself.</main>
            </article>
            <article class="subject">
                <header>Final Exam Project</header>
                <main>For the final examination project you write a report within one of the subjects in the programme.</main>
            </article>
        </section>
    </article>
    <article id="WD">
        <section>
            <p>wd_description</p>
        </section>
        <section class="semester">
            <header>Semester 1</header>
            <article class="subject">
                <header>header_temp</header>
                <main>main_temp</main>
            </article>
            <article class="subject">
                <header>header_temp</header>
                <main>main_temp</main>
            </article>
            <article class="subject">
                <header>header_temp</header>
                <main>main_temp</main>
            </article>
        </section>
        <section class="semester">
            <header>Semester 2</header>
            <article class="subject">
                <header>header_temp</header>
                <main>main_temp</main>
            </article>
            <article class="subject">
                <header>header_temp</header>
                <main>main_temp</main>
            </article>
        </section>
        <section class="semester">
            <header>Semester 3</header>
            <article class="subject">
                <header>header_temp</header>
                <main>main_temp</main>
            </article>
            <article class="subject">
                <header>header_temp</header>
                <main>main_temp</main>
            </article>
        </section>
    </article>
    <article id="ITS">
        <section>
            <p>Test</p>
        </section>
        <section class="semester">
            <header>Semester 1</header>
            <article class="subject">
                <header>placholder_header</header>
                <main>placeholder_main</main>
            </article>
            <article class="subject">
                <header>placholder_header</header>
                <main>placeholder_main</main>
            </article>
            <article class="subject">
                <header>placholder_header</header>
                <main>placeholder_main</main>
            </article>
            <article class="subject">
                <header>placholder_header</header>
                <main>placeholder_main</main>
            </article>
        </section>
        <section class="semester">
            <header>Semester 2</header>
            <article class="subject">
                <header>placholder_header</header>
                <main>placeholder_main</main>
            </article>
            <article class="subject">
                <header>placeholder_header</header>
                <main>placeholder_main</main>
            </article>
            <article class="subject">
                <header>placeholder_header</header>
                <main>placeholder_main</main>
            </article>
        </section>
        <section class="semester">
            <header>Semester 3</header>
            <article class="subject">
                <header>placeholder_header</header>
                <main>placeholder_main</main>
            </article>
            <article class="subject">
                <header>placeholder_header</header>
                <main>placeholder_main</main>
            </article>
        </section>
    </article>
</main>
@extends('Layout.main')
@push('title')
    <title> About </title>
@endpush
@section('main-section')
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="\css\about.css">
    </head>

    <body>
        <section id="about-section">
            <!-- about left  -->
            <div class="about-left">
                <img src="\img\tashi.jpg" width="350px" />
            </div>

            <!-- about right  -->
            <div class="about-right">
                <h1>About Me</h1>
                <p>
                    I'm a driven individual with a passion for continuous learning and growth. With several years of
                    experience
                    in [insert field or profession], I have developed strong skills in [insert relevant skills]. I believe
                    in
                    the power of hard work and determination to achieve goals and I am always looking for new challenges and
                    opportunities to expand my knowledge and experience. In my free time, I enjoy [insert
                    hobbies/interests].
                    I look forward to connecting and making a positive impact in any role or project I am a part of."
                </p>
                <div class="address">
                    <ul>
                        <li>
                            <span class="address-logo">
                                <i class="fas fa-paper-plane"></i>
                            </span>
                            <p>Address</p>
                            <span class="saprater">:</span>
                            <p>CST, Rinchending, bhutan</p>
                        </li>
                        <li>
                            <span class="address-logo">
                                <i class="fas fa-phone-alt"></i>
                            </span>
                            <p>Phone No</p>
                            <span class="saprater">:</span>
                            <p>+975 77334451</p>
                        </li>
                        <li>
                            <span class="address-logo">
                                <i class="far fa-envelope"></i>
                            </span>
                            <p>Email ID</p>
                            <span class="saprater">:</span>
                            <p>Tashi@gmail.com</p>
                        </li>
                    </ul>
                </div>
                <div class="expertise">
                    <h3>My Expertise</h3>
                    <ul>
                        <li>
                            <span class="expertise-logo">
                                <i class="fab fa-html5"></i>
                            </span>
                            <p>HTML and CSS</p>
                        </li>
                        <li>
                            <span class="expertise-logo">
                                <i class="fab fa-css3-alt"></i>
                            </span>
                            <p>Laravel</p>
                        </li>
                        <li>
                            <span class="expertise-logo">
                                <i class="fab fa-node-js"></i>
                            </span>
                            <p>Java Script</p>
                        </li>
                        <li>
                            <span class="expertise-logo">
                                <i class="fab fa-react"></i>
                            </span>
                            <p>React Js</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

    </body>

    </html>
@endsection

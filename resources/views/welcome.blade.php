<!doctype html>
<html lang="{{ app()->getLocale() }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hotel Managemnt System</title>

        <!-- Fonts -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >


    </head>
    <body>
    <div id="page">
        <div id="header">
            <a href="index.html" id="logo"><img src="images/logo.png" alt="Logo"></a>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a href="about.html">About</a>
                </li>
                <li>
                    <a href="plants.html">Menu</a>
                </li>
                <li class="current">
                    <a href="gardens.html">Gardens</a>
                </li>
                <li>
                    <a href="news.html">Promotions</a>
                    <ul>
                        <li>
                            <a href="article.html">Feedback</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="contact.html">Contact</a>
                </li>
            </ul>
        </div>
        <div id="body">
            <div id="content">
                <h1>Gardens</h1>
                <h3><strong>This is just a place holder, so you can see what the site would look like.</strong></h3>
                <p>
                    Proin vel velit vitae nisl mattis aliquam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla scelerisque diam sit amet odio vestibulum porta. Ut aliquam accumsan augue, quis mollis purus pretium sit amet. Nullam dolor mi, tempus ullamcorper lobortis a, feugiat quis leo.
                </p>
                <ul class="section">
                    <li>
                        <img src="images/garden5.jpg" alt="Image">
                        <div>
                            <h2>This is just a place holder</h2>
                            <p>
                                Phasellus eleifend fringilla gravida. Etiam ultrices convallis sodales. Proin id quam ante, sed dignissim mi. Sed cursus nulla vel turpis convallis ultricies. Cras nec velit nec turpis aliquet aliquet id imperdiet libero.
                            </p>
                            <p>
                                Integer dolor turpis, fringilla a porttitor quis, congue non eros. Integer lobortis auctor dolor sed convallis. Nullam egestas semper leo id adipiscing. Nulla neque lectus, viverra sit amet pulvinar ut, tempus rutrum felis. Ut eget condimentum quam.
                            </p>
                        </div>
                    </li>
                    <li>
                        <img src="images/garden6.jpg" alt="Image">
                        <div>
                            <h2>This is just a place holder</h2>
                            <p>
                                Maecenas nec enim at leo ullamcorper volutpat. Sed ac dui odio. Quisque quis interdum nisl. Mauris vitae ipsum risus. Fusce elit justo, condimentum eu vulputate eu, consequat vitae massa. Nullam et metus risus
                            </p>
                            <p>
                                Nec aliquet arcu. Proin vel faucibus nibh. Duis a magna ut risus bibendum eleifend non eu quam. Nulla neque lectus, viverra sit amet pulvinar ut, tempus rutrum felis.
                            </p>
                        </div>
                    </li>
                    <li>
                        <img src="images/garden7.jpg" alt="Image">
                        <div>
                            <h2>This is just a place holder</h2>
                            <p>
                                Nullam dolor mi, tempus ullamcorper lobortis a, feugiat quis leo. Cras blandit gravida nibh, et aliquam libero interdum non. Praesent eget nibh quam. Sed vulputate viverra augue eget sagittis.
                            </p>
                            <p>
                                In quis justo eu dui adipiscing ultrices tristique a elit. Aliquam sem nisi, vehicula et semper in, ultricies sed eros. Ut tincidunt, dui et scelerisque aliquet, ipsum velit fringilla sem, sed pharetra felis leo ut nisi.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div id="footer">
            <div>
                <div>
                    <h1>Place Holder</h1>
                    <ul>
                        <li>
                            <a href="index.html">This is just a place holder</a>
                        </li>
                        <li>
                            <a href="index.html">This is just a place holder</a>
                        </li>
                        <li>
                            <a href="index.html">This is just a place holder</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h1>Place Holder</h1>
                    <ul>
                        <li>
                            <a href="index.html">This is just a place holder</a>
                        </li>
                        <li>
                            <a href="index.html">This is just a place holder</a>
                        </li>
                        <li>
                            <a href="index.html">This is just a place holder</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h1>Place Holder</h1>
                    <ul>
                        <li>
                            <a href="index.html">This is just a place holder</a>
                        </li>
                        <li>
                            <a href="index.html">This is just a place holder</a>
                        </li>
                        <li>
                            <a href="index.html">This is just a place holder</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h1>Connect</h1>
                    <a href="http://www.freewebsitetemplates.com/misc/contact" target="_blank" id="mail">Email us</a>
                    <a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" id="facebook">Facebook</a>
                    <a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" id="twitter">Twitter</a>
                    <a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank" id="googleplus">Google&#43;</a>
                </div>
            </div>
            <p>
                PMS Production 2018 | All Rights Reserved
            </p>
        </div>
    </div>

    <script src="https://www.gstatic.com/firebasejs/5.5.6/firebase.js"></script>
    <script>
        // Initialize Firebase
        var config = {
            apiKey: "AIzaSyAJMR2Vq5Ya7D-wTpKluUSCIMF2MD7Tfic",
            authDomain: "learnthis-d58eb.firebaseapp.com",
            databaseURL: "https://learnthis-d58eb.firebaseio.com",
            projectId: "learnthis-d58eb",
            storageBucket: "learnthis-d58eb.appspot.com",
            messagingSenderId: "469113679294"
        };
        firebase.initializeApp(config);
    </script>
    </body>
</html>

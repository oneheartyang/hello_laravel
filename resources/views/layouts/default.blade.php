<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'Sample App') - Laravel 入门教程</title>
    <link rel="stylesheet" href="/css/app.css">
    <style type="text/css">
    	body {
    padding-top: 60px;
}

section {
    overflow: auto;
}

textarea {
    resize: vertical;
}

.jumbotron {
    text-align: center;
}

h1, h2, h3, h4, h5, h6 {
    line-height: 1;
}

h1 {
    font-size: 3em;
    letter-spacing: -2px;
    margin-bottom: 30px;
    text-align: center;
}

h2 {
    font-size: 1.2em;
    letter-spacing: -1px;
    margin-bottom: 30px;
    text-align: center;
    font-weight: normal;
    color: #777;
}

p {
    font-size: 1.1em;
    line-height: 1.7em;
}


.navbar-inverse {
    background-color: #3C3E42;
}

#logo {
    float: left;
    margin-right: 10px;
    font-size: 1.7em;
    color: #fff;
    text-decoration: none;
    letter-spacing: -1px;
    padding-top: 9px;
    font-weight: bold;
}

body {
    padding-top: 60px;
}

section {
    overflow: auto;
}

textarea {
    resize: vertical;
}

.jumbotron {
    text-align: center;
}

/* typography */

h1, h2, h3, h4, h5, h6 {
    line-height: 1;
}

h1 {
    font-size: 3em;
    letter-spacing: -2px;
    margin-bottom: 30px;
    text-align: center;
}

h2 {
    font-size: 1.2em;
    letter-spacing: -1px;
    margin-bottom: 30px;
    text-align: center;
    font-weight: normal;
    color: #777;
}

p {
    font-size: 1.1em;
    line-height: 1.7em;
}

/* header */

.navbar-inverse {
    background-color: #3C3E42;
}

#logo {
    float: left;
    margin-right: 10px;
    font-size: 1.7em;
    color: #fff;
    text-decoration: none;
    letter-spacing: -1px;
    padding-top: 9px;
    font-weight: bold;
}

#logo:hover {
     color: #fff;
}
/* footer */

footer {
    margin-top: 45px;
    padding-top: 5px;
    border-top: 1px solid #eaeaea;
    color: #777;
}

footer a {
    color: #555;
}

footer a:hover {
    color: #222;
}

footer small {
    float: left;
}

footer ul {
    float: right;
    list-style: none;
}

footer li {
    float: left;
    margin-left: 15px;
}

img.brand-icon {
    width: 17px;
    height: 17px;
}

.slogon {
    font-size: 13px;
    font-weight: bold;
}

/* forms */

input, textarea, select, .uneditable-input {
  border: 1px solid #bbb;
  margin-bottom: 15px;
}

input {
  height: auto !important;
}

.panel {
  margin-top: 50px;
}
    </style>
  </head>
  <body>
    @include('layouts.header')

    <div class="container">
        <div class="col-md-offset-1 col-md-10">
            @yield('content')

            @include('layouts.footer')
        </div>
    </div>    
  </body>
</html>
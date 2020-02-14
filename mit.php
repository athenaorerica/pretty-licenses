<!DOCTYPE html>
<html id="home" lang="en">
<!--
mit.php
this file is part of pretty-licenses

The MIT License, prettified.

written by and copyright © 2019 Erica Garcia [athenaorerica] <me@athenas.space>>
licensed under the MIT license [https://license.athenas.space/mit] | SPDX-License-Identifier: MIT

this code says: trans rights

don't like that? suck it up, or write your own code ^-^
-->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>MIT License</title>

  <meta name="viewport" content="width=device-width, initial-scale=0.7">
  <script>
    document.createElement('article');
    document.createElement('footer');
  </script>
  <link rel="stylesheet" href="./content/css/material-indigo.css">
</head>

<body>
  <article>
    <img id="gravatar" src="https://gravatar.com/avatar/<?php echo $_ENV['PRETTYLICENSE_AVATAR'];?>?s=512">
    <h1>The MIT License (MIT)</h1>
    <p>Software (not License!) is &sdot; <br>Copyright © <?php echo date("Y"); ?> <a href="<?php echo $_ENV['PRETTYLICENSE_URL'];?>"><?php echo $_ENV['PRETTYLICENSE_AUTHOR'];?></a>
      &lt;<a href="mailto:<?php echo $_ENV['PRETTYLICENSE_EMAIL'];?>"><?php echo $_ENV['PRETTYLICENSE_EMAIL'];?></a>&gt;</p>

    <p>Permission is hereby granted, free of charge, to any person obtaining a copy
      of this software and associated documentation files (the “Software”), to deal
      in the Software without restriction, including without limitation the rights
      to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
      copies of the Software, and to permit persons to whom the Software is
      furnished to do so, subject to the following conditions:</p>

    <p>The above copyright notice and this permission notice shall be included in
      all copies or substantial portions of the Software.</p>

    <p class=emph>THE SOFTWARE IS PROVIDED “AS IS”, WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
      IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
      FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
      AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
      LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
      OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
      THE SOFTWARE.</p>
  </article>
  <footer>
    <p>part of the <a href="https://github.com/athenaorerica/pretty-licenses">pretty-licenses</a> project by <a
        href="https://athenas.space">athenaorerica</a> &sdot; based on <a
        href="https://github.com/remy/mit-license">mit-license</a> by <a href="https://github.com/remy">Remy Sharp</a>
    </p>
    <p><a href="https://github.com/ahaasler/mit-license-material-theme">material-indigo</a> theme by <a
        href="https://github.com/ahaasler">ahaasler</a></p>
  </footer>
</body>

</html>

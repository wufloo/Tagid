<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kõik tagid</title>
    <link rel="stylesheet" type="text/css" href="tagid.css">
</head>
<body>
<!--kommentaar-->
<a href="http://www.google.com">Google link</a>
<p>The <abbr title="World Health Organization">WHO</abbr> was founded in 1948.</p>
<address>
    Kirjutatud <a href="https://www.facebook.com/janre.press">Janre Pressi</a> poolt.<br>
    Külasta meid:<br>
    Näide<br>
    Metsatee<br>
    Eesti
</address>
<p>Vajuta päikesel või mõnel planeedil, et näha suuremalt:</p>

<img src="media/planets.gif" width="145" height="126" alt="Planets" usemap="#planetmap">

<map name="planetmap">
    <area shape="rect" coords="0,0,82,126" alt="Sun" href="media/sun.gif">
    <area shape="circle" coords="90,58,3" alt="Mercury" href="media/merglobe.gif">
    <area shape="circle" coords="124,58,8" alt="Venus" href="media/venglobe.gif">
</map>

<article>
    <h1>Google Chrome</h1>
    <p>Google Chrome is a free, open-source web browser developed by Google, released in 2008.</p>
</article>

<aside>
    <h4>Epcot Center</h4>
    <p>The Epcot Center is a theme park in Disney World, Florida.</p>
</aside>

<div id="audio"><audio controls="controls" >
        <source src="game.ogg" type="audio/ogg">
        <source src="game.mp3" type="audio/mpeg">

        Ei toeta
    </audio>
</div>
<p>Tere <b>hommikust</b>!</p>

<!-- <base> teema-->

<ul>
    <li>User <bdi>hrefs</bdi>: 60 points</li>
    <li>User <bdi>jdoe</bdi>: 80 points</li>
    <li>User <bdi>إيان</bdi>: 90 points</li>
</ul>

<p><bdo dir="rtl">This paragraph will go right-to-left.</bdo></p>

<blockquote cite="http://www.worldwildlife.org/who/index.html">
    For 50 years, WWF has been protecting the future of nature. The world's leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.
</blockquote>

<p>
    To break lines<br>in a text,<br>use the br element.
</p>

<button type="button" onclick="alert('Tere maailm!')">Vajuta siia!</button>

<canvas id="myCanvas">Your browser does not support the HTML5 canvas tag.</canvas>
<script>
    var c = document.getElementById("myCanvas");
    var ctx = c.getContext("2d");
    ctx.fillStyle = "#FF0000";
    ctx.fillRect(0, 0, 80, 100);
</script>

<table>
    <caption>Monthly savings</caption>
    <colgroup>
        <col span="2" style="background-color:red">
        <col style="background-color:blue">
    </colgroup>
    <thead>
    <tr>
        <th>Month<dialog open>This is an open dialog window</dialog></th>
        <th>Savings</th>
        <th>Price</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>January</td>
        <td>$100</td>
        <td>$500</td>
    </tr>
    </tbody>
    <tfoot>
    <tr>
        <td>February</td>
        <td>$50</td>
        <td>$50</td>
    </tr>
    </tfoot>

</table>
<br>
<img src="img_the_scream.jpg" width="220" height="277" alt="The Scream">
<p><cite>The Scream</cite> by Edward Munch. Painted in 1893.</p>

<em>Emphasized text</em><br>
<strong>Strong text</strong><br>
<code>A piece of computer code</code><br>
<samp>Sample output from a computer program</samp><br>
<kbd>Keyboard input</kbd><br>
<var>Variable</var>
<br>
<br>
<form action="demo_form.asp" method="get">
    <input list="browsers" name="browser">
    <datalist id="browsers">
        <option value="Internet Explorer">
        <option value="Firefox">
        <option value="Chrome">
        <option value="Opera">
        <option value="Safari">
    </datalist>
    <input type="submit">
</form>

<dl>
    <dt>Coffee</dt>
    <dd>Black hot drink</dd>
    <dt>Milk</dt>
    <dd>White cold drink</dd>
</dl>

<p>My <q>favorite</q> <mark>color</mark> is <del>blue</del> <ins>red</ins>!</p>

<details>
    <summary>Copyright 1999-2014.</summary>
    <p> - by JANRE Data. All Rights Reserved.</p>
    <p>All content and graphics on this web site are the property of the company PRESS.</p>
</details>



<p><dfn><abbr title="HyperText Markup Language">HTML</abbr></dfn> is the standard markup language for creating web pages.</p>

<div style="color:#0000FF">
    <h3>This is a heading in a div element</h3>
    <p>This is some text in a div element.</p>
</div>

<embed src="giphy.gif" width="200" height="200"  type="application/vnd.adobe.flash-movie">

    <iframe width="560" height="315" src="https://www.youtube.com/embed/8B2HZwmzfXM" frameborder="0" allowfullscreen></iframe>

    <form>
        <fieldset>
            <legend>Personalia:</legend>
            Name: <input type="text"><br>
            Email: <input type="text"><br>
            Date of birth: <input type="text">
        </fieldset>
    </form>

    <figure>
        <img src="http://static.thousandwonders.net/The.Pulpit.Rock.original.990.jpg" alt="The Pulpit Rock" width="304" height="228">
        <figcaption>Fig.1 - A view of the pulpit rock in Norway.</figcaption>
    </figure>

    <footer>
        <p>Posted by: Hege Refsnes</p>
        <p>Contact information: <a href="mailto:someone@example.com">someone@example.com</a>.</p>
    </footer>

    <form action="demo_form.asp">
        First name: <input type="text" name="FirstName" value=""><br>
        Last name: <input type="text" name="LastName" value=""><br>
        <input type="submit" value="Submit">
    </form>
    <header>
        <h1>This is heading 1</h1>
        <h2>This is heading 2</h2>
        <h3>This is heading 3</h3>
        <h4>This is heading 4</h4>
        <h5>This is heading 5</h5>
        <h6>This is heading 6</h6>
    </header>

    <hr>

    <p>He named his car <i>The lightning</i>, because it was very fast.</p>

    <iframe src="http://www.w3schools.com">
        <p>Your browser does not support iframes.</p>
    </iframe>

    <br>
    <img src="http://www.geckorecruitment.com/wp-content/uploads/2013/10/smiley_face.jpg" alt="Smiley face" width="42" height="42">
    <br>
    <form action="demo_keygen.asp" method="get">
        Username: <input type="text" name="usr_name">
        Encryption: <keygen name="security">
            <input type="submit">
    </form>
    <br>
    <form action="demo_form.asp">
        <label for="male">Male</label>
        <input type="radio" name="sex" id="male" value="male"><br>
        <label for="female">Female</label>
        <input type="radio" name="sex" id="female" value="female"><br><br>
        <input type="submit" value="Submit">
    </form>

    <ol>
        <li>Coffee</li>
        <li>Tea</li>
        <li>Milk</li>
    </ol>

    <ul>
        <li>Coffee</li>
        <li>Tea</li>
        <li><s>Milk</s></li>
    </ul>

    <main>
        <h1>Web Browsers</h1>
        <p>Google Chrome, Firefox, and Internet Explorer are the most used browsers today.</p>

        <article>
            <h1>Google Chrome</h1>
            <p>Google Chrome is a free, open-source web browser developed by Google, released in 2008.</p>
        </article>

        <article>
            <h1>Internet Explorer</h1>
            <p>Internet Explorer is a free web browser from Microsoft, released in 1995.</p>
        </article>

        <article>
            <h1>Mozilla Firefox</h1>
            <p>Firefox is a free, open-source <u>web browser from Mozilla</u>, released in 2004.</p>
        </article>
    </main>


    <br>

    <nav>
        <a href="https://en.wikipedia.org/wiki/HTML">HTML</a> |
        <a href="https://en.wikipedia.org/wiki/Cascading_Style_Sheets">CSS</a> |
        <a href="https://en.wikipedia.org/wiki/JavaScript">JavaScript</a> |
        <a href="https://en.wikipedia.org/wiki/JQuery">jQuery</a>
    </nav>

    <script>
        document.write("Tere maailm!")
    </script>
    <noscript>Sorry, your browser does not support JavaScript!</noscript>

    <object width="400" height="400" data="what.jpg">
    </object>

    <br>
    <select>
        <optgroup label="Swedish Cars">
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
        </optgroup>
        <optgroup label="German Cars">
            <option value="mercedes">Mercedes</option>
            <option value="audi">Audi</option>
        </optgroup>
    </select>
    <br>
    <p><small>Copyright 1999-2050 by Refsnes Data.</small></p>

    <p>My mother has <span style="color:blue;font-weight:bold">blue</span> eyes and
        my father has <span style="color:darkolivegreen;font-weight:bold">dark green</span> eyes.</p>

    <p>This text contains <sub>subscript</sub> text.</p>
    <p>This text contains <sup>superscript</sup> text.</p>

    <p>I have a date on <time datetime="2008-02-14 20:00">Valentines day</time>.</p>

<textarea rows="4" cols="50">
At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies.
</textarea>
    <br>
    <video width="320" height="240" controls="controls">
        <source src="auto.mp4" type="video/mp4">
        <source src="auto.ogg" type="video/ogg">
        <track src="subtitles_en.vtt" kind="subtitles" srclang="en" label="English">
        <track src="subtitles_no.vtt" kind="subtitles" srclang="no" label="Norwegian">
    </video>
    <p>This is a veryveryveryveryveryveryveryveryveryveryveryveryveryveryveryveryveryvery<wbr>longwordthatwillbreakatspecific<wbr>placeswhenthebrowserwindowisresized.</p>
    <object data="ahh.mp3">
        <param name="autoplay" value="true">
    </object>
    <br>
    <p>Display a gauge:</p>
    <meter value="2" min="0" max="10">2 out of 10</meter><br>
    <meter value="0.6">60%</meter>
    <br>
 <pre>
Text in a pre element
is displayed in a fixed-width
font, and it preserves
both      spaces and
line breaks
</pre>
    Downloading progress:
    <progress value="89" max="100">
    </progress>
    <br>
    <form oninput="x.value=parseInt(a.value)+parseInt(b.value)">0
        <input type="range" id="a" value="50">100
        +<input type="number" id="b" value="50">
        =<output name="x" for="a b"></output>
    </form>
    <br>
    <div id="example">

    </div>
    <br>
    <p id="example1">I get money</p>
    <br>
    <p id="four"> Run New York</p>
    <br><p id="borderimg1">Here, the middle sections of the image are repeated to create the border.</p>
    <br><p id="borderimg2">Here, the middle sections of the image are repeated to create the border.</p>
    <br><p id="borderimg3">Here, the middle sections of the image are repeated to create the border.</p>
    <br><p id="borderimg4">Here, the middle sections of the image are repeated to create the border.</p>
    <br><p id="borderimg5">Here, the middle sections of the image are repeated to create the border.</p>
    <br><p id="top">Here, the middle sections of the image are repeated to create the border.</p>
    <br>
    <div id="money">

    </div>
    <br>
    <p>sldslds</p>
    <div id="absolute">Mingi tekst siin positsiooniga .</div>
    <br>
    <img id="yo" src="style.jpg" width="100" height="140">
    <p>This is some text. This is some text. This is some text. This is some text. This is some text. This is some text.</p>
    <br>
    <p id="marg">Margins paragrahvis yei.</p>
    <p id="maxheight">Selle paragrahvi maksimum kõrgus on 50px. Selle paragrahvi maksimum kõrgus on 50px. Selle paragrahvi maksimum kõrgus on 50px. Selle paragrahvi maksimum kõrgus on 50px. Selle paragrahvi maksimum kõrgus on 50px. Selle paragrahvi maksimum kõrgus on 50px. Selle paragrahvi maksimum kõrgus on 50px.</p>
    <br>
    <p id="minheight">Selle paragrahvi miinimum kõrgus on 100px.</p>
    <br>
    <p id="not">
        In my younger and more vulnerable years my father gave me some advice that I've been turning over in my mind ever since.
        'Whenever you feel like criticizing anyone,' he told me, 'just remember that all the people in this world haven't had the advantages that you've had.'
    </p>
    <br>
    <p id="hot">Top and bottom padding of 0.5cm and a left and right padding of 3cm.</p>
    <br>
    <h1 id="visibility">Hello Henno</h1>
    <br>
    <div id="main">
        <div style="background-color:coral;">RED</div>
        <div style="background-color:lightblue;">BLUE</div>
        <div style="background-color:lightgreen;">Green div with more content.</div>
    </div>
    <br>
<pre id="t1">
I	use	tab-size	4
</pre>
    <br>
    <p id="getit">In my younger and more vulnerable years my father gave me some advice that I've been turning over in my mind ever since. 'Whenever you feel like criticizing anyone,' he told me, 'just remember that all the people in this world haven't had the advantages that you've had.'</p>
    <br>
    <p id="line">Võtke järjekorda, võitjad !</p>
    <br>
    <h1>Pealkiri 1</h1>
    <h2>Pealkiri 2</h2>
    <br>
    <ul id="soso">
        <li>Kohvi</li>
        <li>Tee</li>
        <li>Spordijook</li>
    </ul>
    <br>
    <div id="mil">yo</div>
    <br>
    <div id="div2">DIV 2</div>
    <br>
    <div id="cash"></div>
    <br>
    <div id="div3"></div><br>
    <p id="rid">crosshair</p>
    <br>
    <button id="b1">Nupp 1</button>
    <button id="b2">Nupp 2</button>
    <button id="b3">Nupp 3</button>
    <button id="b4">Nupp 4</button>
    <br>
    <br>
    <p id="ohh">Ohhhh Goddddddd</p>
    <br>
    <div id="yee">Ma isegi ei tea mis ma kirjutama peaksin siia.</div>
    <br>
    <div id="div4">Mingi pikk tekst, mis mitte kuidagi ei mahu ära</div>
    <br>
    <div class="newspaper">
        <h2 id="two">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</h2>, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.
    </div>
    <br>
    <p><q>Ta ütles, et <q>ta</q> ei tea.</q></p>
    <br>
    <img id="boob" src="boob.jpg">
    <br>
    <p id="oki">Miski</p>
    <br>
    <p id="uuu">Mõnel on kõveralt</p>
    <br>
    <p id="canbus">Nägemiseni !</p>
</body>
</html>

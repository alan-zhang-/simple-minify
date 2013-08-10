simple-minify
=============

A simple server side minifier for CSS and Javascript

<p>
   To continue, please make sure you installed <a href="https://github.com/yui/yuglify">ygulify</a>.
</p>

<h2>How to install</h2>
<p>
    I recommend you to use standalone, system-wide installation via Composer, create a composer.json file with following content within an arbitary directory,then run compser install.
</p>
<pre>
{
    "require": {
        "alanzhang/simple-minify": "dev-master"
    },
    "config": {
        "bin-dir": "/usr/local/bin/"
    }
}
</pre>

<h2>
    How to use
</h2>
<p>
    After you installed simple-minify, you simpliy get an global simple-minify command.
    Type following command by your cli, all your css and js files within public directory would get a compressed files named with origined-name.min.js or origined-name.min.css
    <br>
    <strong>simple-minify /var/www/your-project/public</strong>
</p>

<h1>
    Warning
</h1>
<p>
    Temporary, It would remove all your .min.css or .min.js files!
</p>

<h2>To Do</h2>
<ul>
    <li>
        Full Documents
    </li>
    <li>
        Keep .min.css or .min.js files if there are not corresponding .css or .js files
    </li>
    <li>
        Write tests files  (Sorry, I am not good at it)
    </li>
</ul>

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
    After you installed simple-minify, you will get a global <strong>simple-minify</strong> command.
    Type following command by your cli, all your css and js files within public directory would get a compressed files named with origined-name.min.js or origined-name.min.css
</p>
<pre>
simple-minify /var/www/your-project/public
simple-minify /var/www/your-project/public/ 
simple-minify 
simple-minify .
simple-minify ./
simple-minify css
simple-minify css/
</pre>
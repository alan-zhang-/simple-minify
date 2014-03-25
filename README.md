# simple-minify

A simple server side minifier for CSS and Javascript

To continue, please make sure you installed <a href="https://github.com/yui/yuglify">ygulify</a>.


## How to install

I recommend you to use standalone, system-wide installation via Composer, create a composer.json file with following content within an arbitary directory,then run compser install.

    {
        "require": {
            "alanzhang/simple-minify": "dev-master"
        },
        "config": {
            "bin-dir": "/usr/local/bin/"
        }
    }


## How to use

After you installed simple-minify, you will get a global *simple-minify* command.Type following command by your cli, all your css and js files within public directory would get a compressed files named with origined-name.min.js or origined-name.min.css

    simple-minify /var/www/your-project/public
    simple-minify /var/www/your-project/public/ 
    simple-minify 
    simple-minify .
    simple-minify ./
    simple-minify css
    simple-minify css/

The regex may help if you want to make a project search/replace

    (?<!\.min\.)(?<=\.)css(?='|")

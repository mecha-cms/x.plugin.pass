<!DOCTYPE html>
<html dir="<?php echo $site->direction; ?>">
  <head>
    <meta charset="<?php echo $site->charset; ?>">
    <title><?php echo $language->enter . ': ' . To::text($page->title . ' &#x00B7; ' . $site->title); ?></title>
    <style>html:after,html:before,input+div:before{content:""}*{margin:0;padding:0;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}body,form,html{max-width:100%;max-height:100%;width:100%;height:100%;overflow:hidden}html{padding:4em;background:#db4732;font:normal normal 15px/1.5 Helmet,FreeSans,sans-serif;color:#000}p+p{margin-top:1em}button,input{display:inline-block;vertical-align:middle;padding:.25em .5em;width:auto;height:auto;min-width:0;min-height:0;font:inherit;color:inherit;text-align:inherit;background:#fff;border:1px solid;border-radius:.125em}input{min-width:12em;box-shadow:inset 0 1px 2px rgba(0,0,0,.25)}button{background:#000;color:#fff;border-color:transparent;border-top-color:rgba(255,255,255,.25);padding-right:.75em;padding-left:.75em;cursor:pointer;box-shadow:0 1px 2px rgba(0,0,0,.25);text-align:center}button::-moz-focus-inner{margin:0;padding:0;border:0;outline:0}html:after,html:before{position:absolute;top:0;right:0;left:0;height:1em;background-image:-webkit-linear-gradient(45deg,rgba(0,0,0,.05)25%,transparent 25%,transparent 50%,rgba(0,0,0,.05)50%,rgba(0,0,0,.05)75%,transparent 75%,transparent);background-image:-moz-linear-gradient(45deg,rgba(0,0,0,.05)25%,transparent 25%,transparent 50%,rgba(0,0,0,.05)50%,rgba(0,0,0,.05)75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(0,0,0,.05)25%,transparent 25%,transparent 50%,rgba(0,0,0,.05)50%,rgba(0,0,0,.05)75%,transparent 75%,transparent);background-size:2em 2em}html:after{top:auto;bottom:0}input+div{font-size:80%;color:rgba(255,255,255,.6);margin:.5em 0 0}@media (max-width:370px){html{padding:2em}p button,p input{display:block;width:100%}p button{margin-top:.25em}}@media (min-width:369px){input+div{position:relative;background:#000;border-color:#000;float:left;padding:.5em 1em;box-shadow:0 1px 2px rgba(0,0,0,.4);border-radius:.4em}input+div:before{width:0;height:0;position:absolute;bottom:100%;left:1em;border:.4em solid transparent;border-bottom-color:inherit}}</style>
  </head>
  <body><?php include __DIR__ . DS . 'form.php'; ?></body>
</html>
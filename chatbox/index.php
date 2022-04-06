<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="css/style.css">
            <title>Connexion</title>
        </head>
        <!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = '6a2fcf89cf1ef42ef5265fcfb8b4bde0dff47d68';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>
        <body>
            <div class="center">
                <!-- Formulaire pour se connecter au chat -->
                <form action="backend/connect.php" method="POST">
                    <input type="text" name="pseudo" placeholder="Pseudo" autocomplete="off"><br />
                    <button type="submit">Connexion</button>
                </form>
            </div>
    </body>
</html>
<html>
    <head>
        <script type="text/javascript" src="{{ URL::assets('includes/js/test.js') }}"></script>
        <script>
            function voorbeeld(){
                alert ("In voorbeeld functie");
                proberen();
            }
        </script>
        
    </head>
    <body>
        voorbeeld van includes
        <input type="button" onclick="voorbeeld()" value="test">
        <input type="text" value="{{eenvar}}">
        <h1>{{eenvar}}</h1>
    </body>
</html>
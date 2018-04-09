<html>
    <head>
        <link rel="stylesheet" href="{{ URL::asset('includes/css/Library/normalize.css') }}" />
        <link rel="stylesheet" href="{{ URL::asset('includes/css/test.css') }}" />
        <script type="text/javascript" src="{{ URL::asset('includes/js/Library/jquery-3.3.1.js') }}"></script>     
        <script type="text/javascript" src="{{ URL::asset('includes/js/Library/underscore.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('includes/js/Library/backbone.js') }}"></script>   
        <script type="text/javascript" src="{{ URL::asset('includes/js/test.js') }}"></script>
        
        <script>
            function voorbeeld(){
                $('div').hide();
            }
        </script>
        
    </head>
    <body>
        voorbeeld van includes
        <input type="button" onclick="voorbeeld()" value="test">
        <div>voor de jquery test</div>
    </body>
</html>
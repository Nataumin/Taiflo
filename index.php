<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <script src="converter.js"></script> -->
</head>
<body>

<?php
  include("compiler.php");
?>

<script>
    $(document).ready(function() {

        let input = document.getElementById('input');
        let output = document.getElementById('output');
        
        $("#input").load("stream/1/01/compiled.md", function()
            {
                output.innerHTML = convert(input.innerText);
            });
    });
</script>

<div id="input" style="display: none;"></div>
<div id="output"></div>
</body>
</html>

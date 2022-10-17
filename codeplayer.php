<!DOCTYPE html>
<html lang="en">
<head>
    <script type="text/javascript" src="js/jquery-3.6.1.js"></script>
    <script type="text/javascript" src="jquery-ui/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="jquery-ui/jquery-ui.css">
    <link rel="stylesheet" href="css/CodePlayer.css">
    <title>CodePlayer</title>
</head>
<body>
    <div id="header">
        <div id="logo">
            CodePlayer
        </div>
        <div id="buttonContainer">
            <div class="toggleButton active" id="html">Html</div>
            <div class="toggleButton" id="css">Css</div>
            <div class="toggleButton" id="javascript">JavaScript</div>
            <div class="toggleButton active" id="output">Output</div>
        </div>
    </div>
    
    <div id="bodyContainer">
        <textarea id="htmlPanel" class="panel"><p>hello world</p></textarea>
        <textarea id="cssPanel" class="panel hidden">p {color: green;}</textarea>
        <textarea id="javascriptPanel" class="panel hidden">alert("Hi there")</textarea>
        <iframe id="outputPanel" class="panel"></iframe>
    </div>
    
    <script src="js/CodePlayer.js"></script>
</body>
</html>
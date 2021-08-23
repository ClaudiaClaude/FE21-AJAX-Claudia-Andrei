<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1>Working with XML</h1>
        <button type="button" onclick="loadData()">Get my album collection</button>
        <br>
        <br>
        <div id = "content"></div>
        <script>
            function loadData() {
                var xhttp = new XMLHttpRequest();
                xhttp.onload = function() {
                    if (this.status == 200) {
                        myFunction(this);
                    }
                };
                xhttp.open("GET" , "discography.xml", true);
                xhttp.send();
            }
            function myFunction(xml) {
                let  xmlDoc = xml.responseXML;
                let x = xmlDoc.getElementsByTagName( "album"); //this will create an array with all albums
                let content=document .getElementById( "content"); //we save the div#content in a variable
                for  (let i = 0; i < x.length; i++) {
                    content.innerHTML +=   //within the content div, we want to show the following:
                     "<h1>" +
                    x[i].getElementsByTagName("artist")[0].childNodes[0].nodeValue + "</h1>  " +
                    x[i].getElementsByTagName("title")[0].childNodes[0].nodeValue + " <br>" +
                    x[i].getElementsByTagName("description" )[0].childNodes[0].nodeValue + "<br>"
                    ; //targeting the array of the tag name artist, accessing their child node and the value within that node

//targeting the array of tag name title, accessing their child node and the value within that node

//targeting the array of tag name description, accessing their child node and the value within that node
                }
            }
        </script>
</body >
</html>
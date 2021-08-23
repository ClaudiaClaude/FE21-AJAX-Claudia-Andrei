<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
    
    <span class="d-flex justify-content-center align-items-end w-100 p-4">
        <h4 class="text-center pe-2">To load the message</h4>
        <button type="submit" onClick="loadDoc()" class="btn btn-dark mb-1">press me!</button>
    </span>

    <div><p id="content" class="text-center text-light h4 bg-danger rounded"></p></div>

    
</div>

<script>

    function loadDoc(){

        let xhttp = new XMLHttpRequest();
        // first fundamental function
        xhttp.onload = function(){
            if(this.status == 200){
                document.getElementById("content").innerHTML = this.responseText;
            }
        };

        // second fundamental function
        xhttp.open("GET", "basic.txt") // inside the open() you write open(method, URL, async)
        // the async here can be omitted because is true by default!
        
        //  third fundamental function
        xhttp.send(); //does what it says! :)



    }




</script>


    
</body>
</html>
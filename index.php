<?php require 'app/init.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat - Let's chat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<?php include 'partials/_menu.php'; ?>

<div class="container">
   <div class="row mt-4">
       <div class="col">
           <div class="card">
               <div class="card-header bg-dark text-light">Messages</div>
               <div class="card-body p-0" style="overflow-y: scroll; height:300px;" id="chat"></div>
           </div>
       </div>
   </div>
   <div class="row mt-4">
       <div class="col">
           <div class="card">
               <div class="card-header bg-dark text-light">Send a chat message</div>
               <div class="card-body">
                   <textarea cols="15" rows="5" placeholder="Type your message.." class="form-control" id="message"></textarea>
                   <button type="submit" class="btn btn-dark mt-2" id="send">Send</button>
               </div>
           </div>
       </div>
   </div>
</div>

<div class="bg-colors">
    <div class="wine"></div>
    <div class="blue"></div>
    <div class="green"></div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.js"></script>
<script src="libs/application.js"></script>
</body>
</html>
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="./include/css/navbar2.css" type="text/css">
   <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="nav">
     <div class="menu">
       <ul>
         <li><a href="index.php" class="menu-item">HOME</a></li>
         <li><a href="#" class="menu-item">COLLECTIONS</a></li>
         <li><a href="#" class="menu-item">SHOP</a></li>
         <li><a href="#" class="menu-item">CUSTOMISE</a></li>
        <li><a href="#" id="search"><i class="fas fa-search"></i></a></li> 
       </ul>
       <div class="search-form">
       <form action="index.php">
         <input type="text" name="" placeholder="Search...">
         </form>
       </div>
       <a class="close"><i class="fa fa-times"></i></a>
     </div>
    </nav> 
   <script
  src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
   <script type="text/javascript">
    $(document).ready(function(){
      $('#search').click(function(){
        $('.menu-item').addClass('hide-item')
        $('.search-form').addClass('active')
        $('.close').addClass('active')
        $('#search').hide()
      })
      $('.close').click(function(){
        $('.menu-item').removeClass('hide-item')
        $('.search-form').removeClass('active')
        $('.close').removeClass('active')
        $('#search').show()
      })
    })
  </script> 
</body>
</html>


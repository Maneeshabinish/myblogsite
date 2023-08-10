
<!DOCTYPE html>
<html lang= "en">
<head>
    <meta-charset="UTF-8">
    <title> Document</title>
   <link rel="stylesheet" type="text/css" href="/public/css/style.css">
        
</head>

<body>
    
<nav>
    <ul>
        <li><a href="/">Home</li></a>
        <li><a href="/About">About</li></a>
        <li><a href="/Contact">Contact Us</li></a>
        <!-- <li><a href="/users"></li></a> -->
        <!-- <li><a href="/dayplanner">Day Planner</li></a> -->
        
        <li><div class= "popover">
                <button id="popover-btn"></button>
        </li>
              <div id="popover-content" class="popover-content" style="display: none;">
                  <h4 id="notification-header">Notifications</h4>      
                  Your DayPlanner was updated an hour ago.<br>
                  Your DayPlanner has two views.
                </div>
        </div>
    </ul>

</nav>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const popoverBtn = document.getElementById("popover-btn");
    const popoverContent = document.getElementById("popover-content");

    popoverBtn.addEventListener("click", function () {
      const isVisible = getComputedStyle(popoverContent).display === "block";
      popoverContent.style.display = isVisible ? "none" : "block";
    });
  });
</script>


<h1>DAY PLANNER</h1>        


<div class="flex-container">

<div class="image">
<h3 class="image-heading">Plan your day with Panache</h3>
<h5 class="image-heading">-Organise and  Execute with Professionalism.</h5>
</div>


<div class="item">
<?php 
                
        echo "<h2>Hello $user[name]</h2>";

?>

<h4> Enter your Plans for the Day.</h4>

<form method="POST" action="/dayplanner">

        <input type="text" name="names" placeholder="Enter your plans here"/>

        <input type="hidden" name="id" value="<?php echo $user['id']; ?>"/>

        <button type="submit" >Add</button>
       
</form>
</div>

<div class="item">

<h2> Your Schedule for the Day</h2>

<ul>
<h4><?php foreach($dayplanner as $day):?>
        
        <li><?= $day->task; ?></li>
    
   <?php endforeach;?></h4>
</ul>

</div>

</div>

<?php require ('partials/footer.php'); ?> 
 <div class="box side">
            
    <h2>Search | <a class="side" href="show_all.php">Show All</a></h2>
          
    <i>Type Part of the Food / Restaurant and then Search</i>
            
    <hr />
            
    <!-- Start of Food Search -->
            
    <form method="post" action="food_search.php" enctype="multipart/form-data">
     
        <input class="search" type="text" name="title" size="40" value="" required placeholder="Food..."   />
            
        <input class="submit" type="submit" name="find_food" 
            value="&#xf002;" />
        
    </form>
     
    <!-- End of Title Search -->
     
     <br />
     
    <!-- Start of Author Search -->
            
    <form method="post" action="author_search.php" enctype="multipart/form-data">
     
        <input class="search" type="text" name="author" size="40" value="" required placeholder="Author..."   />
            
        <input class="submit" type="submit" name="find_author" 
            value="&#xf002;" />
        
    </form>
     
    <!-- End of Author Search -->
     
     <hr />
     
     <i>Use the Dropdown Menus to Search by Genre or Rating</i>
     
    <!-- Start of Genre Search -->
            
    <form method="post" action="genre_search.php" enctype="multipart/form-data">
        
        <select name="genre" required>
            <option value="" disabled selected>Genre...</option>
            <option value="Sci Fi">Science Fiction</option>
            <option value="Historical Fiction">Historical Fiction</option>
            <option value="Humour">Humour</option>
            <option value="Non Fiction">Non Fiction</option>
        </select>
        
         <input class="submit" type="submit" name="find_genre" 
                       value="&#xf002;" />
    </form>
     
    <!-- End of Genre Search -->
     
<hr />

<h3>Ratings Search</h3>

<!-- Start of Ratings Form -->

<form method="post" action="rating_search.php"
enctype="multipart/form-data">
    
    <select class="half_width" name="amount">
        <option value="exactly">Exactly...</option>
        <option value="more" selected>At Least...</option>
        <option value="less">At Most...</option>
        
    </select>
        
    <select class="half_width" name="stars">
        <option value=1>&#9733;</option>
        <option value=2>&#9733;&#9733;</option>
        <option value=3 selected>&#9733;&#9733;&#9733;</option>
        <option value=4>&#9733;&#9733;&#9733;&#9733;</option>
        <option value=5>&#9733;&#9733;&#9733;&#9733;&#9733;</option>
        
    </select>
    
         <input class="submit" type="submit" name="find_rating" 
                       value="&#xf002;" />
</form>
 
<!-- End of Ratings Form -->
        
</div>  <!-- / side bar -->

<div class="box footer">
    CC Trent Rust 2020
</div>    <!-- / footer -->

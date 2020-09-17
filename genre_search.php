<?php include "topbit.php"; 

// if  button pushed
if(isset($_POST['find_genre']))

{

// Retrieves genre and sanitises it
$genre=test_input(mysqli_real_escape_string($dbconnect, $_POST['genre']));
    
$find_sql="SELECT * FROM `L1_DB_Prac_TreRus` WHERE `genre` LIKE '%$genre%' ORDER BY `genre` ASC ";
$find_query=mysqli_query($dbconnect, $find_sql);
$find_rs=mysqli_fetch_assoc($find_query);
$count=mysqli_num_rows($find_query);

?>
        
<div class="box main">
            
    <h1>Genre Search</h1>
            
    <?php
    
    // check if there are any results
    
    if ($count<1)
    
    {
        
    ?>
    
    <div class="error">
         Sorry! There are no results that match your search.
         Please use the search box in the sidebar to try again.
        
    </div>
    
    <?php
        
    }   // end count 'if'
    
    // if there are not results, output an error
    
    else{
        
        do{
            
        ?>
    
     <!-- Results go here -->
    <div class="results">
    
        <p>Title: <span class="sub_heading"><?php echo $find_rs['Title']; ?></span></p>
        
        <p>Author: <span class="sub_heading"><?php echo $find_rs['Author']; ?></span></p>
        
        <p>Genre: <span class="sub_heading"><?php echo $find_rs['Genre']; ?></span></p>
        
        <p>Rating: <span class="sub_heading">
            <?php 
            for ($x=0; $x < $find_rs['Rating']; $x++)
               
            {
                echo "&#9733";
            }
                
            ?>
            
        </span></p>
        
        <p><span class="sub_heading">Review</span></p>
        
        <p><span class="sub_heading"><?php echo $find_rs['Review']; ?></span></p>
        
    </div> <!-- / end results div -->
    
    <br />
    
    <?php
        } // end of 'do'
        
        while($find_rs=mysqli_fetch_assoc($find_query));
        
    }   // end else
    
    // if there are results, display them
    
    } // end isset
    
    ?>
   
    
</div>  <!-- / main -->
        
<?php include "footer.php"; ?>
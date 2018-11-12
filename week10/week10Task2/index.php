<!DOCTYPE html>
<html>

  <head>
	<style>
	/* Styles go here */
        .car{
            margin-top: 10px;
		  display:flex;
		  border:1px solid black;
		  border-radius:5px;
		  width:250px;
		  padding:10px;
		}
		.title{
		  font-size:16px;
		  font-weight:bold;
		}
		.attributes .row{
		  display:flex;
		}
		.attributes .row div{
		  width:50%;
		}
		.attributes .row .name{
		  font-weight:bold;
		}
		.car img{
		  margin-right:10px;
		}
	</style>
  </head>

  <body>
   <select name="" id="filter">
       <option value="">Toyota</option>
       <option value="">Audi</option>
   </select>
   <button>Filter</button>
    <div class="cars">
      <div class="car">
        <img width="100" height="60" src="https://toyota.com.my/ToyotaOfficialWebsite/media/ToyotaMedia/model/Camry%202.0/2016/colors_camry_grey.jpg"/>
	      <div class="right">
		<div class="title">Toyota Camry 50</div>
		<div class="attributes">
		  <div class="row"><div class="name">Year:</div><div>2011</div></div>
		  <div class="row"><div class="name">Price:</div><div>30.000$</div></div>            
		  </div>
		</div>
      
	      </div>
	      <?php
            $connection = mysqli_connect('localhost','adminA','admin','web');
            if($connection == false){
                echo 'Не удалось подключиться к базе данных';
                echo mysqli_connect_error();
                die();
            }
            else{
            }
            $query1 = mysqli_query($connection,"SELECT * FROM `cars`");
            while ($row=mysqli_fetch_array($query1))
            {
                
                echo '<div class="car">
        <img width="100" height="60" src="'.$row['image'].'"/>
	      <div class="right">
		<div class="title">'.$row['maker'].' '.$row['model'].'</div>
		<div class="attributes">
		  <div class="row"><div class="name">Year:</div><div>'.$row['year'].'</div></div>
		  <div class="row"><div class="name">Price:</div><div>'.$row['price'].'$</div></div>         
		  </div>
		</div></div>';
            }
            mysqli_close($connection);
            ?>
    </div>
    <script>
        
      </script>
  </body>

</html>

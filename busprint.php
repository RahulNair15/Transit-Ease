     
           <h1 align="center">Ticket Details</h1>
           <br>


			<style >
$black: #343434;

.ticket {

    font-family: Montserrat, sans-serif;
}

.ticketdesign {
  background: linear-gradient(to bottom, #101828 0%, #283c63 19%, #d9d9d9 19%, #d9d9d9 100%);
  height: 29em;
  float: left;
  object-position: center;
  padding: 1em;
  margin-top: 100px;

}


.ticketstructure {
  align-content: center;
  border-top-left-radius: 8px;
  border-bottom-left-radius: 8px;
   border-top-right-radius: 8px;
   border-bottom-right-radius: 8px;



  width: 44em;
}

h1 {
  font-size: 40px;
  margin-top: 0;
      font-family: Montserrat, sans-serif;

 
}
h2 h3 {
  font-size: 20px;
  margin-top: 0;
      font-family: Montserrat, sans-serif;
      color:black;
}
span {
  color: black;
}
#options {
	align-content:center;
	align-items:center;
    text-align: center;
}
.printable {
   padding-left: 10px;
   text-align:left;
}
</style>

           <?php
          include 'connect.php';
		  $pid=$_GET['pid'];
			
			$sel="SELECT * FROM `bustransactions` WHERE `T_No.` =$pid";
			$rs=$connect->query($sel);
			while($row=$rs->fetch_assoc())
			{

				?>


				<div class="ticket " id="printable">
  <div class="ticketdesign ticketstructure" >

<h1 style="color: white;" align="left"><b>Transit-Ease</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Booking ID: <?php echo $row['T_No.'] ?> </h1></span>
    <div class="title">
    	<br>
   <h1 align="center"><span><?php echo $row['source'] ?> &nbsp&nbsp To &nbsp&nbsp <?php echo $row['dest'] ?>  </span></h1>
   <h2 align="left"><span>NAME : &nbsp <?php echo $row['Name'] ?></span></h2>
   <h2 align="left"><span>DATE & TIME  : &nbsp <?php echo $row['Date'] ?></span></h2>
   <h2 align="left"><span>BUS NO : &nbsp <?php echo $row['Bus_No'] ?></span></h2>
   <h2 align="left"><span>NO OF PASSENGERS :&nbsp <?php echo $row['NoOfpass'] ?> </span></h2>
   <h2 align="left"><span>AMOUNT : &nbsp ₹<?php echo $row['Amt'] ?> </span></h2>
   <h2 align="center"><span>WISH YOU A HAPPY & SAFE JOURNEY</span> </h2>
</div>
    </div>
</div>


			<?php
		}
		?>

</div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
    <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
    <br>
  <br>
  <br>
  <br>
  

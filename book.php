<?php
include 'connect.php' ;
session_start();
if ($_SESSION['log'] == '')
{
    header("location:sindex.php");
}
include 'header.php';
?>

<style>

    .container{
        border-spacing: 10px;

      font-family: Montserrat, sans-serif;
     font-size: 18px !important;
      border: 2px solid grey;
        margin-top: 30px;
        margin-bottom: 50px;
       padding-top: 50px;
      padding-right: 50px;
      padding-bottom: 50px;
      padding-left: 150px;
      align-content: center;
    }
    .button {
  padding: 15px 32px;
  align-content: left;
  color: white;
  background-color:black;
    }
#number {
  overflow: hidden;
  width: 600px;
}
input[type=number]{
    width: 250px;
} 
  </style>


  </script>
</head>
<body>
  <h1><center><b><img src="https://img.icons8.com/bubbles/80/000000/train.png"/>Train Ticket Booking &nbsp<img src="https://img.icons8.com/officel/56/000000/tracks-intersection.png"/></center></b></h1>
 <form method='post' action ='book_action.php' align='center'>






<div class="container">
<section id="form" class="formborder">
<div class="container2">
       <form>
        


       <div class="form-row row justify-content-around" name="source">
  &nbsp

       <div class="form-group col-md-5" name="source">
       <label for="inputEmail4">SOURCE STATION :</label>    
       <select id="inputState" class="form-control" name="source">
   
   <option> </option>   
   <option>Airoli</option>
   <option>Ambarnath</option>
   <option>Ambivli</option>
   <option>Andheri</option>
   <option>Asangaon</option>
   <option>Atgaon</option>
   <option>Badlapur</option>
   <option>Bandra</option>
   <option>Belapur CBD</option>
   <option>Bhandup</option>
   <option>Bhayandar</option>
   <option>Bhivpuri Road</option>
   <option>Boisar</option>
   <option>Borivli</option>
   <option>Byculla</option>
   <option>Charni Road</option>
   <option>Chembur</option>
   <option>Chinchpokli</option>
   <option>Chunabhatti</option>
   <option>Churchgate</option>
   <option>Cottongreen</option>
   <option>Currey Road</option>
   <option>Dadar</option>
   <option>Dahanu Road</option>
   <option>Dahisar</option>
   <option>Diva</option>
   <option>Dockyard Road</option>
   <option>Dolavli</option>
   <option>Dombivli</option>
   <option>Ghansoli</option>
   <option>Ghatkopar</option>
   <option>Goregaon</option>
   <option>Govandi</option>
   <option>Grant Road</option>
   <option>Guru Tegh Bahadur Nagar</option>
   <option>Jogeshwari</option>
   <option>Juinagar</option>
   <option>Kalwa</option>
   <option>Kalyan</option>
   <option>Kanjurmarg</option>
   <option>Karjat</option>
   <option>Kasara</option>
   <option>Kandivali</option>
   <option>Kelavli</option>
   <option>Kelve Road</option>
   <option>Khadavli</option>
   <option>Khandeshwar</option>
   <option>Khardi</option>
   <option>Kharghar</option>
   <option>Khar Road</option>
   <option>Khopoli</option>
   <option>King's Circle</option>
   <option>Kopar</option>
   <option>Koparkhairne</option>
   <option>Kurla</option>
   <option>Lower Parel</option>
   <option>Lowjee</option>
   <option>Mahalaxmi</option>
   <option>Mahim</option>
   <option>Malad</option>
   <option>Mankhurd</option>
   <option>Manasarovar</option>
   <option>Marine Lines</option>
   <option>Masjid</option>
   <option>Matunga</option>
   <option>Matunga Road</option>
   <option>Mira Road</option>
   <option>Mulund</option>
   <option>Mumbai Central</option>
   <option>Mumbai CSMT</option>
   <option>Mumbra</option>
   <option>Nahur</option>
   <option>Naigaon</option>
   <option>Nallasopara</option>
   <option>Neral</option>
   <option>Nerul</option>
   <option>Panvel</option>
   <option>Palasdari</option>
   <option>Palghar</option>
   <option>Parel</option>
   <option>Prabhadevi</option>
   <option>Rabale</option>
   <option>Ram Mandir</option>
   <option>Reay Road</option>
   <option>Sandhurst Road</option>
   <option>Sanpada</option>
   <option>Santacruz</option>
   <option>Saphale</option> 
   <option>Seawood Darave</option>
   <option>Sewri</option>
   <option>Sion</option>
   <option>Shahad</option>
   <option>Shelu</option>
   <option>Thakurli</option>
   <option>Thane</option>
   <option>Tilaknagar</option> 
   <option>Titwala</option>
   <option>Turbhe</option>
   <option>Ulhasnagar</option>
   <option>Umbermali</option>
   <option>Umroli</option>
   <option>Vadala Road</option>
   <option>Vaitarna</option>
   <option>Vangaon</option>
   <option>Vangni</option>
   <option>Vasai Road</option>
   <option>Vashi</option>
   <option>Vasind</option>
   <option>Vidyavihar</option>
   <option>Vikhroli</option>
   <option>Vile Parle</option>
   <option>Virar</option>
   <option>Vithalwadi</option>
   </select>

     <!-- <input type="email" class="form-control" id="inputEmail4" placeholder="FROM">-->
    </div>             


   



          <div class="form-group col-md-5" name="dest">
      <label for="inputPassword4"> 
FINAL DESTINATION :</label>
      <select id="inputState" class="form-control" name="dest">
   
   <option> </option>
   <option>Airoli</option>
   <option>Ambarnath</option>
   <option>Ambivli</option>
   <option>Andheri</option>
   <option>Asangaon</option>
   <option>Atgaon</option>
   <option>Badlapur</option>
   <option>Bandra</option>
   <option>Belapur CBD</option>
   <option>Bhandup</option>
   <option>Bhayandar</option>
   <option>Bhivpuri Road</option>
   <option>Boisar</option>
   <option>Borivli</option>
   <option>Byculla</option>
   <option>Charni Road</option>
   <option>Chembur</option>
   <option>Chinchpokli</option>
   <option>Chunabhatti</option>
   <option>Churchgate</option>
   <option>Cottongreen</option>
   <option>Currey Road</option>
   <option>Dadar</option>
   <option>Dahanu Road</option>
   <option>Dahisar</option>
   <option>Diva</option>
   <option>Dockyard Road</option>
   <option>Dolavli</option>
   <option>Dombivli</option>
   <option>Ghansoli</option>
   <option>Ghatkopar</option>
   <option>Goregaon</option>
   <option>Govandi</option>
   <option>Grant Road</option>
   <option>Guru Tegh Bahadur Nagar</option>
   <option>Jogeshwari</option>
   <option>Juinagar</option>
   <option>Kalwa</option>
   <option>Kalyan</option>
   <option>Kanjurmarg</option>
   <option>Karjat</option>
   <option>Kasara</option>
   <option>Kandivali</option>
   <option>Kelavli</option>
   <option>Kelve Road</option>
   <option>Khadavli</option>
   <option>Khandeshwar</option>
   <option>Khardi</option>
   <option>Kharghar</option>
   <option>Khar Road</option>
   <option>Khopoli</option>
   <option>King's Circle</option>
   <option>Kopar</option>
   <option>Koparkhairne</option>
   <option>Kurla</option>
   <option>Lower Parel</option>
   <option>Lowjee</option>
   <option>Mahalaxmi</option>
   <option>Mahim</option>
   <option>Malad</option>
   <option>Mankhurd</option>
   <option>Manasarovar</option>
   <option>Marine Lines</option>
   <option>Masjid</option>
   <option>Matunga</option>
   <option>Matunga Road</option>
   <option>Mira Road</option>
   <option>Mulund</option>
   <option>Mumbai Central</option>
   <option>Mumbai CSMT</option>
   <option>Mumbra</option>
   <option>Nahur</option>
   <option>Naigaon</option>
   <option>Nallasopara</option>
   <option>Neral</option>
   <option>Nerul</option>
   <option>Panvel</option>
   <option>Palasdari</option>
   <option>Palghar</option>
   <option>Parel</option>
   <option>Prabhadevi</option>
   <option>Rabale</option>
   <option>Ram Mandir</option>
   <option>Reay Road</option>
   <option>Sandhurst Road</option>
   <option>Sanpada</option>
   <option>Santacruz</option>
   <option>Saphale</option> 
   <option>Seawood Darave</option>
   <option>Sewri</option>
   <option>Sion</option>
   <option>Shahad</option>
   <option>Shelu</option>
   <option>Thakurli</option>
   <option>Thane</option>
   <option>Tilaknagar</option> 
   <option>Titwala</option>
   <option>Turbhe</option>
   <option>Ulhasnagar</option>
   <option>Umbermali</option>
   <option>Umroli</option>
   <option>Vadala Road</option>
   <option>Vaitarna</option>
   <option>Vangaon</option>
   <option>Vangni</option>
   <option>Vasai Road</option>
   <option>Vashi</option>
   <option>Vasind</option>
   <option>Vidyavihar</option>
   <option>Vikhroli</option>
   <option>Vile Parle</option>
   <option>Virar</option>
   <option>Vithalwadi</option>
   </select> 

      <!--<input type="password" class="form-control" id="inputPassword4" placeholder="TO">-->
  </div>
  
 <center>  
          <div class="form-group col-md-5" name="class">
      <label for="inputPassword4"> 
Train Class :</label>
      <select id="inputState" class="form-control" name="class">
   
  <option>Second</option>
  <option>First</option>
   <option>A.C</option>
   
   </select> 

  </div>
 
 <center><div class="form-group col-md-5" name="type">
    <label for="inputState">JOURNEY TYPE :</label>
    <select id="inputState" class="form-control" name="type">
    <option >Single</option>
    <option >Return</option>
    </select>
    </div>
   
    
      <br>
    <div class="form-row row justify-content-aroundd">
       <div class="form-group col-md-16" >
       <center><label for="inputState"  ><h8>NO OF PASSENGERS :</h8></label></center>
      <center> <input type="number" name="number" required  min="1" max="5"  ></center>
       </div>

    

    <div>   
    <button type="submit"    class="button" name="login_submit" >Proceed</button>
    
 </div>
</form>
</div>

</section>
</div>
  


<?php include 'footer.php';
?> 

</body>
</html>
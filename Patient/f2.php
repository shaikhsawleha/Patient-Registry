<?php
    include "config/dbconnect.php";
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="assets/css/style1.css">
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet" type="css/text">
 <link rel="stylesheet" href="assets/font-awesome/font-awesome.min.css">
</head>
<body>
  <form name="PatientForm" id="patientForm"  method="POST" action="insert.php" onsubmit="return inputValidate()">
  <fieldset>
    <legend><span class="section"><img src="assets/img/giphy2.gif" alt="medical"> PATIENT REGISTRY</span></legend>
      <label for="FIRST NAME">FIRST NAME: *</label>
      <input type="text" id="firstname" name="FIRSTNAME" value="" placeholder="Enter Firstname">

      <label for="name">LAST NAME: *</label>
      <input type="text" id="lastname" name="LASTNAME" value="" placeholder="Enter Lastname" autocomplete="off">

      <label for="Age">AGE: *</label><span id="1"></span>
      <input type="number" id="AGE" name="AGE" value="" placeholder="Enter Age" onblur='NumValidate("AGE","1")' onfocus='fnclear("AGE","1")'>

      <label for="DOB">DATE OF BIRTH: *</label>
      <input type="date" name="DOB" id="dob" value="" placeholder="DOB">

      <label class="" for="gender">GENDER: *</label>
      <select name="GENDER" id="gender">
      <option value="">--select--</option>
      <option value="M">Male</option>
      <option value="F">Female</option>
    </select>
      <br/><br/>

      <label for="mob">MOBILE NO: *</label>
      <input type="text" id="mob" name="PHONENUMBER" value="">

      <fieldset>
      <label for="comment">DESCRIPTION: *</label>
      <textarea name="DESCRIPTION" id="desc"></textarea>
      </fieldset>
      <input type="submit" value="SUBMIT" name="submit" id="sub">
      <!-- <input type="submit" value="Homepage" name="homepage" id="reset"> -->
    </fieldset>
<span>(*) mandatory field</span>
  </form>

<script type="text/javascript">

function inputValidate(){
  //console.log("fucntion working");
  //alert("function working");
  var regAlphaExp = /[a-zA-Z][a-zA-Z ]*$/;
  var regNumExp =  /\d/g;
  var regEmailExp = "";
  var Fname = document.getElementById('firstname').value;
  var Fname_trim=Fname.trim();
  var Lname = document.getElementById('lastname').value;
  var Lname_trim = Lname.trim();
  var age = document.getElementById('AGE').value;
  var age_trim = age.trim();
  var dob = document.getElementById('dob').value;
  var dob_trim = dob.trim();
  var gen = document.getElementById('gender').value;
  var gen_trim = gen.trim();
  var mob = document.getElementById('mob').value;
  var mob_trim = mob.trim();
  var desc = document.getElementById('desc').value;
  var desc_trim = desc.trim();
  if(Fname_trim.length == 0){
    alert("First Name is mandatory");
    return false;
  }
   else if(!(Fname_trim.match(regAlphaExp))){
    alert("First Name : Only Alphabets is Allowed");
    return false;
  }
  else if(Lname_trim.length == 0){
    alert("Last Name is mandatory");
    return false;
  }
  else if(!(Lname_trim.match(regAlphaExp))){
    alert("Last Name : Only Alphabets is Allowed");
    return false;
  }
  else if(age_trim.length == 0){
    alert("Age is mandatory");
    //Fname.focus();
    return false;
  }
  else if(!(age_trim.match(regNumExp))){
    alert("Age : Only Number is Allowed");
    return false;
  }
  else if(dob_trim.length == 0){
    alert("Date of Birth is mandatory");
    return false;
}
    else if(gen_trim.length == 0){
      alert("Gender is mandatory");
      return false;
    }
  else if((mob_trim.length == 0)){
    alert("Mobile Number is mandatory");
    return false;
  }
  else if((mob_trim.length > 10)){
    alert("Mobile No: only 10 digit Allowed");
    return false;
  }
  else if(!(mob_trim.match(regNumExp))){
    alert("Mobile number : Only Number is Allowed");
    return false;
  }
  else if((desc_trim.length == 0)){
    alert("Description is mandatory");
    return false;
  }else {
    return true;
  }

}

</script>
</body>
</html>

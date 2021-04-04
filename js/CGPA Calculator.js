//------------------nav bar actives -----------------------------------------------
//-------------------------------------- For Mobile-------------------------------
document.getElementById("cgpacal-mob-active").style.color = "#efeeee";
document.getElementById("gpacal-mob-active").style.color = "";
document.getElementById("gradepred-mob-active").style.color = "";
document.getElementById("cgpaest-mob-active").style.color = "";
document.getElementById("attendancecal-mob-active").style.color = "";

//--------------------- For PC--------------------------------------
document.getElementById("cgpacal-pc-active").style.color = "#383754";
document.getElementById("gpacal-pc-active").style.color = "";
document.getElementById("gradepred-pc-active").style.color = "";
document.getElementById("cgpaest-pc-active").style.color = "";
document.getElementById("attendancecal-pc-active").style.color = "";

// ----------------------------   POP UP Result------------------------------------------------------

function showPopup() {
  document.getElementById("pop-up-result").style.display = "flex";
  document.getElementById("pop-up-blur").style.filter = "blur(25px)";
}

function closePopup() {
  document.getElementById("pop-up-result").style.display = "none";
  document.getElementById("pop-up-blur").style.filter = "none";
}

//--------------------main content------------------------------------------------------------------

// null values
function semwisenull() {
  document.getElementById("alertcgpacal").innerHTML = "";
  document.getElementById("alertcgpacal1").innerHTML = "";
}

function semwiseresetnull() {
  document.getElementById("alertcgpacalr").innerHTML = "";
  document.getElementById("alertcgpacal1r").innerHTML = "";
}

function instantnull() {
  document.getElementById("iestcgpa").innerHTML = "";
  document.getElementById("iestcgpa1").innerHTML = "";
}

function instantresetnull() {
  document.getElementById("alerticgpacalr").innerHTML = "";
  document.getElementById("alerticgpacal1r").innerHTML = "";
}

function notenull() {
  document.getElementById("note-msg").style.display = "none";
}

function shownote() {
  document.getElementById("note-msg").style.display = "block";
}

//CGPA calculator

function cgpacalculationreset() {
  oFormObject = document.forms["cgpacalform"];

  for (i = 0; i < 24; i++) {
    oFormObject.elements[i].value = "";
  }

  //   document.getElementById("cgpacalform").reset();
  document.getElementById("alertcgpacalr").innerHTML =
    "Form is at it's default state.";
  document.getElementById("alertcgpacal1r").innerHTML = "You can proceed...";
}

function cgpacalculation() {
  var sem1c = parseInt(document.getElementById("sem1c").value);
  var sem1g = parseFloat(document.getElementById("sem1g").value);

  var sem2c = parseInt(document.getElementById("sem2c").value);
  var sem2g = parseFloat(document.getElementById("sem2g").value);

  var sem3c = parseInt(document.getElementById("sem3c").value);
  var sem3g = parseFloat(document.getElementById("sem3g").value);

  var sem4c = parseInt(document.getElementById("sem4c").value);
  var sem4g = parseFloat(document.getElementById("sem4g").value);

  var sem5c = parseInt(document.getElementById("sem5c").value);
  var sem5g = parseFloat(document.getElementById("sem5g").value);

  var sem6c = parseInt(document.getElementById("sem6c").value);
  var sem6g = parseFloat(document.getElementById("sem6g").value);

  var sem7c = parseInt(document.getElementById("sem7c").value);
  var sem7g = parseFloat(document.getElementById("sem7g").value);

  var sem8c = parseInt(document.getElementById("sem8c").value);
  var sem8g = parseFloat(document.getElementById("sem8g").value);

  var sem9c = parseInt(document.getElementById("sem9c").value);
  var sem9g = parseFloat(document.getElementById("sem9g").value);

  var sem10c = parseInt(document.getElementById("sem10c").value);
  var sem10g = parseFloat(document.getElementById("sem10g").value);

  var sem11c = parseInt(document.getElementById("sem11c").value);
  var sem11g = parseFloat(document.getElementById("sem11g").value);

  var sem12c = parseInt(document.getElementById("sem12c").value);
  var sem12g = parseFloat(document.getElementById("sem12g").value);

  sem1c = sem1c || 0;
  sem1g = sem1g || 0;

  sem2c = sem2c || 0;
  sem2g = sem2g || 0;

  sem3c = sem3c || 0;
  sem3g = sem3g || 0;

  sem4c = sem4c || 0;
  sem4g = sem4g || 0;

  sem5c = sem5c || 0;
  sem5g = sem5g || 0;

  sem6c = sem6c || 0;
  sem6g = sem6g || 0;

  sem7c = sem7c || 0;
  sem7g = sem7g || 0;

  sem8c = sem8c || 0;
  sem8g = sem8g || 0;

  sem9c = sem9c || 0;
  sem9g = sem9g || 0;

  sem10c = sem10c || 0;
  sem10g = sem10g || 0;

  sem11c = sem11c || 0;
  sem11g = sem11g || 0;

  sem12c = sem12c || 0;
  sem12g = sem12g || 0;

  if (
    sem1g < 0 ||
    sem2g < 0 ||
    sem3g < 0 ||
    sem4g < 0 ||
    sem5g < 0 ||
    sem6g < 0 ||
    sem7g < 0 ||
    sem8g < 0 ||
    sem9g < 0 ||
    sem10g < 0 ||
    sem11g < 0 ||
    sem12g < 0
  ) {
    document.getElementById("alertcgpacal").innerHTML =
      "Kindly check your respective GPA entries.";
    document.getElementById("alertcgpacal1").innerHTML =
      "It shouldn't be negative, special or text.";
  } else if (
    sem1g > 10 ||
    sem2g > 10 ||
    sem3g > 10 ||
    sem4g > 10 ||
    sem5g > 10 ||
    sem6g > 10 ||
    sem7g > 10 ||
    sem8g > 10 ||
    sem9g > 10 ||
    sem10g > 10 ||
    sem11g > 10 ||
    sem12g > 10 ||
    sem1c > 50 ||
    sem2c > 50 ||
    sem3c > 50 ||
    sem4c > 50 ||
    sem5c > 50 ||
    sem6c > 50 ||
    sem7c > 50 ||
    sem8c > 50 ||
    sem9c > 50 ||
    sem10c > 50 ||
    sem11c > 50 ||
    sem12c > 50
  ) {
    document.getElementById("alertcgpacal").innerHTML =
      "Kindly check the CREDITS and GPA limits.";
    document.getElementById("alertcgpacal1").innerHTML =
      "(0< CREDITS <=50) & (0< GPA <=10)";
  } else if (
    (sem1c > 0 && sem1g == 0) ||
    (sem2c > 0 && sem2g == 0) ||
    (sem3c > 0 && sem3g == 0) ||
    (sem4c > 0 && sem4g == 0) ||
    (sem5c > 0 && sem5g == 0) ||
    (sem6c > 0 && sem6g == 0) ||
    (sem7c > 0 && sem7g == 0) ||
    (sem8c > 0 && sem8g == 0) ||
    (sem9c > 0 && sem9g == 0) ||
    (sem10c > 0 && sem10g == 0) ||
    (sem11c > 0 && sem11g == 0) ||
    (sem12c > 0 && sem12g == 0)
  ) {
    document.getElementById("alertcgpacal").innerHTML =
      "GPA entries in the respective semesters aren't entered; where your credits are greater than zero (>0).";
    document.getElementById("alertcgpacal1").innerHTML = "";
  } else if (
    (sem1c == 0 && sem1g > 0) ||
    (sem2c == 0 && sem2g > 0) ||
    (sem3c == 0 && sem3g > 0) ||
    (sem4c == 0 && sem4g > 0) ||
    (sem5c == 0 && sem5g > 0) ||
    (sem6c == 0 && sem6g > 0) ||
    (sem7c == 0 && sem7g > 0) ||
    (sem8c == 0 && sem8g > 0) ||
    (sem9c == 0 && sem9g > 0) ||
    (sem10c == 0 && sem10g > 0) ||
    (sem11c == 0 && sem11g > 0) ||
    (sem12c == 0 && sem12g > 0)
  ) {
    document.getElementById("alertcgpacal").innerHTML =
      "Credit entries in the respective semesters aren't entered; where your GPA is greater than zero (>0).";
    document.getElementById("alertcgpacal1").innerHTML = "";
  } else {
    var cgpafinal =
      (sem1c * sem1g +
        sem2c * sem2g +
        sem3c * sem3g +
        sem4c * sem4g +
        sem5c * sem5g +
        sem6c * sem6g +
        sem7c * sem7g +
        sem8c * sem8g +
        sem9c * sem9g +
        sem10c * sem10g +
        sem11c * sem11g +
        sem12c * sem12g) /
      (sem1c +
        sem2c +
        sem3c +
        sem4c +
        sem5c +
        sem6c +
        sem7c +
        sem8c +
        sem9c +
        sem10c +
        sem11c +
        sem12c);

    cgpafinal = cgpafinal || 0;

    if (cgpafinal >= 9) {
      document.getElementById("alertcgpacal").innerHTML =
        "Your CGPA is " + cgpafinal.toFixed(4);
      document.getElementById("alertcgpacal1").innerHTML =
        "You are awesome! Keep it up and Happy Learning!";
    } else if (cgpafinal >= 8) {
      document.getElementById("alertcgpacal").innerHTML =
        "Your CGPA is " + cgpafinal.toFixed(4);
      document.getElementById("alertcgpacal1").innerHTML =
        "You are at it .Excel in upcomming semesters .I'm very eager to see you as 9 pointer .";
    } else if (cgpafinal == 0) {
      document.getElementById("alertcgpacal").innerHTML =
        "Kindly enter your semester wise credits and GPA.";
      document.getElementById("alertcgpacal1").innerHTML = "";
    } else {
      document.getElementById("alertcgpacal").innerHTML =
        "Your CGPA is " + cgpafinal.toFixed(4);
      document.getElementById("alertcgpacal1").innerHTML = "Happy Learning!";
    }
  }
}

//Instant CGPA

// function iccestadd(){
// 	if(document.getElementById("iccredits").value==""){
// 		document.getElementById("iccredits").value=1;
// 		icgpaestimation();
// 	}
// 	else if(document.getElementById("iccredits").value>=300){
// 		document.getElementById("iccredits").value=300;
// 		icgpaestimation();
// 	}
// 	else{
// 	document.getElementById("iccredits").value=parseInt(document.getElementById("iccredits").value)+1;
// 	icgpaestimation();
// }
// }

// function iccestsub(){
// 	if(document.getElementById("iccredits").value==1){
// 		document.getElementById("iccredits").value=1;
// 		icgpaestimation();
// 	}
// 	else if(document.getElementById("iccredits").value>=300){
// 		document.getElementById("iccredits").value=300;
// 		document.getElementById("iccredits").value=parseInt(document.getElementById("iccredits").value)-1;
// 	icgpaestimation();
// 	}
// 	else{
// 	document.getElementById("iccredits").value=parseInt(document.getElementById("iccredits").value)-1;
// 	icgpaestimation();
// }
// }

// function icnestadd(){
// 	if(document.getElementById("incredits").value==""){
// 		document.getElementById("incredits").value=1;
// 		icgpaestimation();
// 	}
// 	else if(document.getElementById("incredits").value>=50){
// 		document.getElementById("incredits").value=50;
// 		icgpaestimation();
// 	}
// 	else{
// 	document.getElementById("incredits").value=parseInt(document.getElementById("incredits").value)+1;
// 	icgpaestimation();
// }
// }

// function icnestsub(){
// 	if(document.getElementById("incredits").value==1){
// 		document.getElementById("incredits").value=1;
// 		icgpaestimation();
// 	}
// 	else if(document.getElementById("incredits").value>=50){
// 		document.getElementById("incredits").value=50;
// 		document.getElementById("incredits").value=parseInt(document.getElementById("incredits").value)-1;
// 	    icgpaestimation();
// 	}
// 	else{
// 	document.getElementById("incredits").value=parseInt(document.getElementById("incredits").value)-1;
// 	icgpaestimation();
// }
// }

function icgpacalculationreset() {
  oFormObject = document.forms["icgpacalform"];

  for (i = 0; i < 4; i++) {
    oFormObject.elements[i].value = "";
  }
  // document.getElementById('icgpacalform').reset();
  document.getElementById("alerticgpacalr").innerHTML =
    "Form is at it's default state.";
  document.getElementById("alerticgpacal1r").innerHTML = "You can proceed...";
}

function icgpacalculation() {
  var x = parseFloat(document.getElementById("iCGPAneed").value);
  var gpa = parseFloat(document.getElementById("iccgpa").value);
  var cc = parseInt(document.getElementById("iccredits").value);
  var nc = parseInt(document.getElementById("incredits").value);

  if (x <= 0 || gpa <= 0 || cc <= 0 || nc <= 0) {
    document.getElementById("iestcgpa").innerHTML =
      "Kindly check your entries.";
    document.getElementById("iestcgpa1").innerHTML =
      "It shouldn't be zero, negative, special, text or empty.";
  } else if (x > 10 || gpa > 10) {
    document.getElementById("iestcgpa").innerHTML =
      "Kindly check your entries.";
    document.getElementById("iestcgpa1").innerHTML =
      "Average limit(0< GPA or CGPA <=10).";
  } else if (cc > 300 || nc > 50) {
    document.getElementById("iestcgpa").innerHTML =
      "kindly check your entries.";
    document.getElementById("iestcgpa1").innerHTML =
      "Credits limitation (1<= Credits Completed <=300 & 1<= Credits this sem <=50 ).";
  } else {
    var estnum1 = (x * nc + gpa * cc) / (nc + cc);
    if (estnum1 <= 0) {
      document.getElementById("iestcgpa").innerHTML =
        "Oops! Your entries are incorrect.";
      document.getElementById("iestcgpa1").innerHTML = "";
    } else if (estnum1 > 10) {
      document.getElementById("iestcgpa").innerHTML =
        " Invalid input. Kindly check your entries.";
      document.getElementById("iestcgpa1").innerHTML = "You can proceed again.";
    } else if (estnum1 >= 9) {
      document.getElementById("iestcgpa").innerHTML =
        "Your CGPA is " + estnum1.toFixed(3);
      document.getElementById("iestcgpa1").innerHTML =
        "You are Terrific! and Happy Learning!";
    } else {
      document.getElementById("iestcgpa").innerHTML =
        "Your CGPA is " + estnum1.toFixed(3);
      document.getElementById("iestcgpa1").innerHTML = "Happy Learning!";
    }
  }
}

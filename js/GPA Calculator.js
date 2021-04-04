//------------------nav bar actives -----------------------------------------------
//-------------------------------------- For Mobile-------------------------------
document.getElementById("cgpacal-mob-active").style.color = "";
document.getElementById("gpacal-mob-active").style.color = "#efeeee";
document.getElementById("gradepred-mob-active").style.color = "";
document.getElementById("cgpaest-mob-active").style.color = "";
document.getElementById("attendancecal-mob-active").style.color = "";

//--------------------- For PC--------------------------------------
document.getElementById("cgpacal-pc-active").style.color = "";
document.getElementById("gpacal-pc-active").style.color = "#383754";
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

//  -----------------------------main content ----------------------------------------------------

//GPA calculator
function gpacalreset() {
  var x = document.getElementsByClassName("default-reset");
  var i;
  for (i = 0; i < 24; i++) {
    x[i].selected = "true";
  }

  // document.getElementById("gpacalform").reset();
  document.getElementById("alertgpacalr").innerHTML =
    "Form is at it's default state.";
  document.getElementById("alertgpacal1r").innerHTML = "You can proceed...";
  document.getElementById("alertgpacal").innerHTML = "";
  document.getElementById("alertgpacal1").innerHTML = "";
}

function gpacal() {
  // remove reset text
  document.getElementById("alertgpacalr").innerHTML = "";
  document.getElementById("alertgpacal1r").innerHTML = "";

  var ggrad1;
  var ggrad2;
  var ggrad3;
  var ggrad4;
  var ggrad5;
  var ggrad6;
  var ggrad7;
  var ggrad8;
  var ggrad9;
  var ggrad10;
  var ggrad11;
  var ggrad12;

  var gcred1 = parseInt(document.getElementById("gcred1").value);
  var gcred2 = parseInt(document.getElementById("gcred2").value);
  var gcred3 = parseInt(document.getElementById("gcred3").value);
  var gcred4 = parseInt(document.getElementById("gcred4").value);
  var gcred5 = parseInt(document.getElementById("gcred5").value);
  var gcred6 = parseInt(document.getElementById("gcred6").value);
  var gcred7 = parseInt(document.getElementById("gcred7").value);
  var gcred8 = parseInt(document.getElementById("gcred8").value);
  var gcred9 = parseInt(document.getElementById("gcred9").value);
  var gcred10 = parseInt(document.getElementById("gcred10").value);
  var gcred11 = parseInt(document.getElementById("gcred11").value);
  var gcred12 = parseInt(document.getElementById("gcred12").value);

  gcred1 = gcred1 || 0;
  gcred2 = gcred2 || 0;
  gcred3 = gcred3 || 0;
  gcred4 = gcred4 || 0;
  gcred5 = gcred5 || 0;
  gcred6 = gcred6 || 0;
  gcred7 = gcred7 || 0;
  gcred8 = gcred8 || 0;
  gcred9 = gcred9 || 0;
  gcred10 = gcred10 || 0;
  gcred11 = gcred11 || 0;
  gcred12 = gcred12 || 0;

  switch (document.getElementById("ggrad1").value) {
    case "S":
      ggrad1 = 10;
      break;
    case "A":
      ggrad1 = 9;
      break;
    case "B":
      ggrad1 = 8;
      break;
    case "C":
      ggrad1 = 7;
      break;
    case "D":
      ggrad1 = 6;
      break;
    case "E":
      ggrad1 = 5;
      break;
    case "F":
      ggrad1 = 0;
      break;
    case "N":
      ggrad1 = 0;
      break;
    default:
      ggrad1 = "x";
  }

  switch (document.getElementById("ggrad2").value) {
    case "S":
      ggrad2 = 10;
      break;
    case "A":
      ggrad2 = 9;
      break;
    case "B":
      ggrad2 = 8;
      break;
    case "C":
      ggrad2 = 7;
      break;
    case "D":
      ggrad2 = 6;
      break;
    case "E":
      ggrad2 = 5;
      break;
    case "F":
      ggrad2 = 0;
      break;
    case "N":
      ggrad2 = 0;
      break;
    default:
      ggrad2 = "x";
  }

  switch (document.getElementById("ggrad3").value) {
    case "S":
      ggrad3 = 10;
      break;
    case "A":
      ggrad3 = 9;
      break;
    case "B":
      ggrad3 = 8;
      break;
    case "C":
      ggrad3 = 7;
      break;
    case "D":
      ggrad3 = 6;
      break;
    case "E":
      ggrad3 = 5;
      break;
    case "F":
      ggrad3 = 0;
      break;
    case "N":
      ggrad3 = 0;
      break;
    default:
      ggrad3 = "x";
  }

  switch (document.getElementById("ggrad4").value) {
    case "S":
      ggrad4 = 10;
      break;
    case "A":
      ggrad4 = 9;
      break;
    case "B":
      ggrad4 = 8;
      break;
    case "C":
      ggrad4 = 7;
      break;
    case "D":
      ggrad4 = 6;
      break;
    case "E":
      ggrad4 = 5;
      break;
    case "F":
      ggrad4 = 0;
      break;
    case "N":
      ggrad4 = 0;
      break;
    default:
      ggrad4 = "x";
  }

  switch (document.getElementById("ggrad5").value) {
    case "S":
      ggrad5 = 10;
      break;
    case "A":
      ggrad5 = 9;
      break;
    case "B":
      ggrad5 = 8;
      break;
    case "C":
      ggrad5 = 7;
      break;
    case "D":
      ggrad5 = 6;
      break;
    case "E":
      ggrad5 = 5;
      break;
    case "F":
      ggrad5 = 0;
      break;
    case "N":
      ggrad5 = 0;
      break;
    default:
      ggrad5 = "x";
  }

  switch (document.getElementById("ggrad6").value) {
    case "S":
      ggrad6 = 10;
      break;
    case "A":
      ggrad6 = 9;
      break;
    case "B":
      ggrad6 = 8;
      break;
    case "C":
      ggrad6 = 7;
      break;
    case "D":
      ggrad6 = 6;
      break;
    case "E":
      ggrad6 = 5;
      break;
    case "F":
      ggrad6 = 0;
      break;
    case "N":
      ggrad6 = 0;
      break;
    default:
      ggrad6 = "x";
  }

  switch (document.getElementById("ggrad7").value) {
    case "S":
      ggrad7 = 10;
      break;
    case "A":
      ggrad7 = 9;
      break;
    case "B":
      ggrad7 = 8;
      break;
    case "C":
      ggrad7 = 7;
      break;
    case "D":
      ggrad7 = 6;
      break;
    case "E":
      ggrad7 = 5;
      break;
    case "F":
      ggrad7 = 0;
      break;
    case "N":
      ggrad7 = 0;
      break;
    default:
      ggrad7 = "x";
  }

  switch (document.getElementById("ggrad8").value) {
    case "S":
      ggrad8 = 10;
      break;
    case "A":
      ggrad8 = 9;
      break;
    case "B":
      ggrad8 = 8;
      break;
    case "C":
      ggrad8 = 7;
      break;
    case "D":
      ggrad8 = 6;
      break;
    case "E":
      ggrad8 = 5;
      break;
    case "F":
      ggrad8 = 0;
      break;
    case "N":
      ggrad8 = 0;
      break;
    default:
      ggrad8 = "x";
  }

  switch (document.getElementById("ggrad9").value) {
    case "S":
      ggrad9 = 10;
      break;
    case "A":
      ggrad9 = 9;
      break;
    case "B":
      ggrad9 = 8;
      break;
    case "C":
      ggrad9 = 7;
      break;
    case "D":
      ggrad9 = 6;
      break;
    case "E":
      ggrad9 = 5;
      break;
    case "F":
      ggrad9 = 0;
      break;
    case "N":
      ggrad9 = 0;
      break;
    default:
      ggrad9 = "x";
  }

  switch (document.getElementById("ggrad10").value) {
    case "S":
      ggrad10 = 10;
      break;
    case "A":
      ggrad10 = 9;
      break;
    case "B":
      ggrad10 = 8;
      break;
    case "C":
      ggrad10 = 7;
      break;
    case "D":
      ggrad10 = 6;
      break;
    case "E":
      ggrad10 = 5;
      break;
    case "F":
      ggrad10 = 0;
      break;
    case "N":
      ggrad10 = 0;
      break;
    default:
      ggrad10 = "x";
  }

  switch (document.getElementById("ggrad11").value) {
    case "S":
      ggrad11 = 10;
      break;
    case "A":
      ggrad11 = 9;
      break;
    case "B":
      ggrad11 = 8;
      break;
    case "C":
      ggrad11 = 7;
      break;
    case "D":
      ggrad11 = 6;
      break;
    case "E":
      ggrad11 = 5;
      break;
    case "F":
      ggrad11 = 0;
      break;
    case "N":
      ggrad11 = 0;
      break;
    default:
      ggrad11 = "x";
  }

  switch (document.getElementById("ggrad12").value) {
    case "S":
      ggrad12 = 10;
      break;
    case "A":
      ggrad12 = 9;
      break;
    case "B":
      ggrad12 = 8;
      break;
    case "C":
      ggrad12 = 7;
      break;
    case "D":
      ggrad12 = 6;
      break;
    case "E":
      ggrad12 = 5;
      break;
    case "F":
      ggrad12 = 0;
      break;
    case "N":
      ggrad12 = 0;
      break;
    default:
      ggrad12 = "x";
  }

  if (
    (ggrad1 == "x" && gcred1 >= 1) ||
    (ggrad2 == "x" && gcred2 >= 1) ||
    (ggrad3 == "x" && gcred3 >= 1) ||
    (ggrad4 == "x" && gcred4 >= 1) ||
    (ggrad5 == "x" && gcred5 >= 1) ||
    (ggrad6 == "x" && gcred6 >= 1) ||
    (ggrad7 == "x" && gcred7 >= 1) ||
    (ggrad8 == "x" && gcred8 >= 1) ||
    (ggrad9 == "x" && gcred9 >= 1) ||
    (ggrad10 == "x" && gcred10 >= 1) ||
    (ggrad11 == "x" && gcred11 >= 1) ||
    (ggrad12 == "x" && gcred12 >= 1)
  ) {
    document.getElementById("alertgpacal").innerHTML =
      "Please select the respective grade(s) for the course(s) of which credit(s) are already opted.";
    document.getElementById("alertgpacal1").innerHTML = "";
  } else if (
    (ggrad1 != "x" && gcred1 == 0) ||
    (ggrad2 != "x" && gcred2 == 0) ||
    (ggrad3 != "x" && gcred3 == 0) ||
    (ggrad4 != "x" && gcred4 == 0) ||
    (ggrad5 != "x" && gcred5 == 0) ||
    (ggrad6 != "x" && gcred6 == 0) ||
    (ggrad7 != "x" && gcred7 == 0) ||
    (ggrad8 != "x" && gcred8 == 0) ||
    (ggrad9 != "x" && gcred9 == 0) ||
    (ggrad10 != "x" && gcred10 == 0) ||
    (ggrad11 != "x" && gcred11 == 0) ||
    (ggrad12 != "x" && gcred12 == 0)
  ) {
    document.getElementById("alertgpacal").innerHTML =
      "Please select the respective credit(s) for the course(s) of which grades(s) are already opted.";
    document.getElementById("alertgpacal1").innerHTML = "";
  } else {
    if (ggrad1 == "x") ggrad1 = 0;
    if (ggrad2 == "x") ggrad2 = 0;
    if (ggrad3 == "x") ggrad3 = 0;
    if (ggrad4 == "x") ggrad4 = 0;
    if (ggrad5 == "x") ggrad5 = 0;
    if (ggrad6 == "x") ggrad6 = 0;
    if (ggrad7 == "x") ggrad7 = 0;
    if (ggrad8 == "x") ggrad8 = 0;
    if (ggrad9 == "x") ggrad9 = 0;
    if (ggrad10 == "x") ggrad10 = 0;
    if (ggrad11 == "x") ggrad11 = 0;
    if (ggrad12 == "x") ggrad12 = 0;

    var gpa1 = parseInt(ggrad1 * gcred1);
    var gpa2 = parseInt(ggrad2 * gcred2);
    var gpa3 = parseInt(ggrad3 * gcred3);
    var gpa4 = parseInt(ggrad4 * gcred4);
    var gpa5 = parseInt(ggrad5 * gcred5);
    var gpa6 = parseInt(ggrad6 * gcred6);
    var gpa7 = parseInt(ggrad7 * gcred7);
    var gpa8 = parseInt(ggrad8 * gcred8);
    var gpa9 = parseInt(ggrad9 * gcred9);
    var gpa10 = parseInt(ggrad10 * gcred10);
    var gpa11 = parseInt(ggrad11 * gcred11);
    var gpa12 = parseInt(ggrad12 * gcred12);

    var finalgpacal =
      (gpa1 +
        gpa2 +
        gpa3 +
        gpa4 +
        gpa5 +
        gpa6 +
        gpa7 +
        gpa8 +
        gpa9 +
        gpa10 +
        gpa11 +
        gpa12) /
      (gcred1 +
        gcred2 +
        gcred3 +
        gcred4 +
        gcred5 +
        gcred6 +
        gcred7 +
        gcred8 +
        gcred9 +
        gcred10 +
        gcred11 +
        gcred12);

    finalgpacal = finalgpacal || 0;

    if (finalgpacal >= 9) {
      document.getElementById("alertgpacal").innerHTML =
        "Your GPA is " + finalgpacal.toFixed(4);
      document.getElementById("alertgpacal1").innerHTML =
        "You are awesome! Keep it up and Happy Learning!";
    } else if (finalgpacal >= 8) {
      document.getElementById("alertgpacal").innerHTML =
        "Your GPA is " + finalgpacal.toFixed(4);
      document.getElementById("alertgpacal1").innerHTML =
        "You are at it. Excel in upcomming semesters. I'm very eager to see you as 9 pointer.";
    } else if (finalgpacal == 0) {
      document.getElementById("alertgpacal").innerHTML =
        "Your GPA is " + finalgpacal.toFixed(4);
      document.getElementById("alertgpacal1").innerHTML =
        "I didn't get any input from you (or) You got all N/F grades.";
    } else {
      document.getElementById("alertgpacal").innerHTML =
        "Your GPA is " + finalgpacal.toFixed(4);
      document.getElementById("alertgpacal1").innerHTML = "Happy Learning!";
    }
  }
}

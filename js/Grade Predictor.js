//------------------nav bar actives -----------------------------------------------
//-------------------------------------- For Mobile-------------------------------
document.getElementById("cgpacal-mob-active").style.color = "";
document.getElementById("gpacal-mob-active").style.color = "";
document.getElementById("gradepred-mob-active").style.color = "#efeeee";
document.getElementById("cgpaest-mob-active").style.color = "";
document.getElementById("attendancecal-mob-active").style.color = "";

//--------------------- For PC--------------------------------------
document.getElementById("cgpacal-pc-active").style.color = "";
document.getElementById("gpacal-pc-active").style.color = "";
document.getElementById("gradepred-pc-active").style.color = "#383754";
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

// ---------------------------------main content--------------------------------------------

function gradeprednull() {
  document.getElementById("gradepred").innerHTML = "";
  document.getElementById("gradepred1").innerHTML = "";
  document.getElementById("gradepred2").innerHTML = "";
  document.getElementById("gradepred3").innerHTML = "";
  document.getElementById("gradepred4").innerHTML = "";
}

function gradepredresetnull() {
  document.getElementById("gradepredr").innerHTML = "";
  document.getElementById("gradepred1r").innerHTML = "";
}

function weightageconvnull() {
  document.getElementById("weigh-conv-result").innerHTML = "";
}

function weightageconvresetnull() {
  document.getElementById("weigh-conv-reset").innerHTML = "";
}

//---------------------------------reset---------------------------------------------------
function gradepredreset() {
  var x = document.getElementsByClassName("default-reset");
  var i;
  for (i = 0; i < 4; i++) {
    x[i].selected = "true";
  }

  var y = document.getElementsByClassName("default-reset-input-field");
  var j;
  for (j = 0; j < 12; j++) {
    y[j].value = "";
  }

  // document.getElementById('gradepred-form').reset();

  document.getElementById("gradepredr").innerHTML =
    "Form is at it's default state.";
  document.getElementById("gradepred1r").innerHTML = "You can proceed...";
}

function weightageconvreset() {
  var x = document.getElementsByClassName("default-reset-weightage-conv");
  var i;
  for (i = 0; i < 3; i++) {
    x[i].value = "";
  }

  // document.getElementById("weightage-conv-form").reset();
  document.getElementById("weigh-conv-reset").innerHTML =
    "Form is at it's default state. You can proceed...";
}

//   ----------------------------------------normal function----------------------------

//---------------------------weightage converter----------------------
function weightageconv() {
  var maxorg = parseFloat(document.getElementById("max-org").value);
  var maxweightage = parseFloat(document.getElementById("max-weightage").value);
  var obtorg = parseFloat(document.getElementById("obtained-org").value);

  maxorg = maxorg || 0;
  maxweightage = maxweightage || 0;
  obtorg = obtorg || 0;

  if (maxorg == 0 || maxweightage == 0 || obtorg == 0) {
    document.getElementById("weigh-conv-result").innerHTML =
      "Kindly check all the entries filled are valid and non zero's.";
  } else if (obtorg > maxorg) {
    document.getElementById("weigh-conv-result").innerHTML =
      "Your (obtained original marks) shouldn't be greater than (maximum original marks)";
  } else {
    var obtweightage = (obtorg / maxorg) * maxweightage;

    document.getElementById("weigh-conv-result").innerHTML =
      "Your obtained weightage mark is " +
      obtweightage.toFixed(2) +
      "." +
      " You have secured " +
      obtweightage.toFixed(2) +
      " out of " +
      maxweightage +
      ".";
  }
}

//  -----------------------   grade predictor ---------------------------------------------

function gradepred() {
  var cc = document.getElementById("pcc").value;
  var tc = document.getElementById("ptc").value;
  var lc = document.getElementById("plc").value;
  var jc = document.getElementById("pjc").value;

  var cat1 = parseFloat(document.getElementById("pcat1").value);
  var cat2 = parseFloat(document.getElementById("pcat2").value);
  var da1 = parseFloat(document.getElementById("pdq1").value);
  var da2 = parseFloat(document.getElementById("pdq2").value);
  var da3 = parseFloat(document.getElementById("pdq3").value);
  var tfat = parseFloat(document.getElementById("ptf").value);
  var addlearn = parseFloat(document.getElementById("adl").value);

  var labint = parseFloat(document.getElementById("pli").value);
  var labfat = parseFloat(document.getElementById("plf").value);

  var r1 = parseFloat(document.getElementById("pj1").value);
  var r2 = parseFloat(document.getElementById("pj2").value);
  var r3 = parseFloat(document.getElementById("pj3").value);

  var tcmadd;
  var lcmadd;
  var jcmadd;

  if (cc == "Course credits") {
    document.getElementById("gradepred").innerHTML =
      "Please select Total Course Credits for the course.";
    document.getElementById("gradepred1").innerHTML = "";
    document.getElementById("gradepred2").innerHTML = "";
    document.getElementById("gradepred3").innerHTML = "";
    document.getElementById("gradepred4").innerHTML = "";
  } else {
    if (tc == "Theory credits") {
      tc = 0;
    } else {
    }

    if (lc == "Lab credits") {
      lc = 0;
    } else {
    }

    if (jc == "J-comp credits") {
      jc = 0;
    } else {
    }

    cc = parseInt(cc);
    tc = parseInt(tc);
    lc = parseInt(lc);
    jc = parseInt(jc);

    if (tc + lc + jc == 0) {
      document.getElementById("gradepred").innerHTML =
        "Please select the respective individual component credits (Theory, lab or J-comp)  for the course you have choosen.";
      document.getElementById("gradepred1").innerHTML = "";
      document.getElementById("gradepred2").innerHTML = "";
      document.getElementById("gradepred3").innerHTML = "";
      document.getElementById("gradepred4").innerHTML = "";
    } else {
      if (tc + lc + jc > 0 && tc + lc + jc != cc) {
        document.getElementById("gradepred").innerHTML =
          "Your Total Course Credits are not matched with the selected components credits. (Theory or Lab or J-comp)";
        document.getElementById("gradepred1").innerHTML = "";
        document.getElementById("gradepred2").innerHTML = "";
        document.getElementById("gradepred3").innerHTML = "";
        document.getElementById("gradepred4").innerHTML = "";
      } else {
        if (
          tc > 0 &&
          (Number.isNaN(cat1) ||
            Number.isNaN(cat2) ||
            Number.isNaN(da1) ||
            Number.isNaN(da2) ||
            Number.isNaN(da3) ||
            Number.isNaN(tfat))
        ) {
          document.getElementById("gradepred").innerHTML =
            "All entries are not filled in the Theory component.";
          document.getElementById("gradepred1").innerHTML = "";
          document.getElementById("gradepred2").innerHTML = "";
          document.getElementById("gradepred3").innerHTML = "";
          document.getElementById("gradepred4").innerHTML = "";
        } else if (lc > 0 && (Number.isNaN(labint) || Number.isNaN(labfat))) {
          document.getElementById("gradepred").innerHTML =
            "All entries are not filled in the Lab component.";
          document.getElementById("gradepred1").innerHTML = "";
          document.getElementById("gradepred2").innerHTML = "";
          document.getElementById("gradepred3").innerHTML = "";
          document.getElementById("gradepred4").innerHTML = "";
        } else if (
          jc > 0 &&
          (Number.isNaN(r1) || Number.isNaN(r2) || Number.isNaN(r3))
        ) {
          document.getElementById("gradepred").innerHTML =
            "All entries are not filled in the J-component.";
          document.getElementById("gradepred1").innerHTML = "";
          document.getElementById("gradepred2").innerHTML = "";
          document.getElementById("gradepred3").innerHTML = "";
          document.getElementById("gradepred4").innerHTML = "";
        } else {
          var cat1c = (cat1 / 50) * 15;
          var cat2c = (cat2 / 50) * 15;
          var da1c = da1;
          var da2c = da2;
          var da3c = da3;
          var tfatc = (tfat * 40) / 100;
          var tcm = tfatc + cat1c + cat2c + da1c + da2c + da3c;

          if (tc > 0) {
            if (tfat < 40) {
              document.getElementById("gradepred").innerHTML =
                "Oops! You got failed in this course.";
              document.getElementById("gradepred1").innerHTML =
                "You got less than 40 marks in Theory FAT.";
              document.getElementById("gradepred2").innerHTML =
                "If this course is graded under Absolute grading, your grade is 'F'.";
              document.getElementById("gradepred3").innerHTML = "";
              document.getElementById("gradepred4").innerHTML = "";
            } else {
              addlearn = addlearn || 0;
              if (tcm + addlearn - tfatc >= 60) {
                tcmadd = ((60 + tfatc) * (cc - lc - jc)) / cc;
              } else {
                tcmadd = ((tcm + addlearn) * (cc - lc - jc)) / cc;
              }
            }
          } else {
          }

          var labintc = labint;
          var labfatc = (labfat * 40) / 50;

          if (lc > 0) {
            if (labintc + labfatc < 50) {
              document.getElementById("gradepred").innerHTML =
                "Oops! You got failed in this course.";
              document.getElementById("gradepred1").innerHTML =
                "You got less than 50 marks in Lab Component. (Internals + Fat)";
              document.getElementById("gradepred2").innerHTML =
                "If this course is graded under Absolute grading, your grade is 'F'.";
              document.getElementById("gradepred3").innerHTML = "";
              document.getElementById("gradepred4").innerHTML = "";
            } else if (labintc + labfatc >= 50) {
              lcmadd = ((labintc + labfatc) * (cc - tc - jc)) / cc;
            }
          } else {
          }

          var r1c = r1;
          var r2c = r2;
          var r3c = r3;

          if (jc > 0) {
            if (r1c + r2c + r3c < 50) {
              document.getElementById("gradepred").innerHTML =
                "Oops! You got failed in this course.";
              document.getElementById("gradepred1").innerHTML =
                "You got less than 50 marks in J- Component. (Review-1 + Review-2 + Review-3)";
              document.getElementById("gradepred2").innerHTML =
                "If this course is graded under Absolute grading, your grade is 'F'.";
              document.getElementById("gradepred3").innerHTML = "";
              document.getElementById("gradepred4").innerHTML = "";
            } else if (r1c + r2c + r3c >= 50) {
              jcmadd = ((r1c + r2c + r3c) * (cc - tc - lc)) / cc;
            }
          } else {
          }

          tcmadd = tcmadd || 0;
          lcmadd = lcmadd || 0;
          jcmadd = jcmadd || 0;

          var totalmarks = tcmadd + lcmadd + jcmadd;

          if (tfat >= 40 && totalmarks < 50) {
            if (totalmarks < 50) {
              document.getElementById("gradepred").innerHTML =
                "Oops! You got failed in this course because your Total Final Marks (Theory + Lab+ J-comp) are less than 50% of total. (out of 100)";
              document.getElementById("gradepred1").innerHTML =
                "If this course is graded under Absolute grading, your grade is 'F'.";
              document.getElementById("gradepred2").innerHTML = "";
              document.getElementById("gradepred3").innerHTML = "";
              document.getElementById("gradepred4").innerHTML = "";
            }
          } else {
            if (totalmarks >= 90) {
              document.getElementById("gradepred").innerHTML =
                "Your Total Final Marks for this course is " +
                totalmarks.toFixed(4) +
                " ~ " +
                Math.ceil(totalmarks);
              document.getElementById("gradepred1").innerHTML =
                "If this course is graded under Absolute grading, your grade is 'S'.";
              document.getElementById("gradepred2").innerHTML = "";
              document.getElementById("gradepred3").innerHTML = "";
              document.getElementById("gradepred4").innerHTML = "";
            } else if (totalmarks >= 80) {
              document.getElementById("gradepred").innerHTML =
                "Your Total Final Marks for this course is " +
                totalmarks.toFixed(4) +
                " ~ " +
                Math.ceil(totalmarks);
              document.getElementById("gradepred1").innerHTML =
                "If this course is graded under Absolute grading, your grade is 'A'.";
              document.getElementById("gradepred2").innerHTML = "";
              document.getElementById("gradepred3").innerHTML = "";
              document.getElementById("gradepred4").innerHTML = "";
            } else if (totalmarks >= 70) {
              document.getElementById("gradepred").innerHTML =
                "Your Total Final Marks for this course is " +
                totalmarks.toFixed(4) +
                " ~ " +
                Math.ceil(totalmarks);
              document.getElementById("gradepred1").innerHTML =
                "If this course is graded under Absolute grading, your grade is 'B'.";
              document.getElementById("gradepred2").innerHTML = "";
              document.getElementById("gradepred3").innerHTML = "";
              document.getElementById("gradepred4").innerHTML = "";
            } else if (totalmarks >= 60) {
              document.getElementById("gradepred").innerHTML =
                "Your Total Final Marks for this course is " +
                totalmarks.toFixed(4) +
                " ~ " +
                Math.ceil(totalmarks);
              document.getElementById("gradepred1").innerHTML =
                "If this course is graded under Absolute grading, your grade is 'C'.";
              document.getElementById("gradepred2").innerHTML = "";
              document.getElementById("gradepred3").innerHTML = "";
              document.getElementById("gradepred4").innerHTML = "";
            } else if (totalmarks >= 55) {
              document.getElementById("gradepred").innerHTML =
                "Your Total Final Marks for this course is " +
                totalmarks.toFixed(4) +
                " ~ " +
                Math.ceil(totalmarks);
              document.getElementById("gradepred1").innerHTML =
                "If this course is graded under Absolute grading, your grade is 'D'.";
              document.getElementById("gradepred2").innerHTML = "";
              document.getElementById("gradepred3").innerHTML = "";
              document.getElementById("gradepred4").innerHTML = "";
            } else if (totalmarks >= 50) {
              document.getElementById("gradepred").innerHTML =
                "Your Total Final Marks for this course is " +
                totalmarks.toFixed(4) +
                " ~ " +
                Math.ceil(totalmarks);
              document.getElementById("gradepred1").innerHTML =
                "If this course is graded under Absolute grading, your grade is 'E'.";
              document.getElementById("gradepred2").innerHTML = "";
              document.getElementById("gradepred3").innerHTML = "";
              document.getElementById("gradepred4").innerHTML = "";
            }
          }
        }
      }
    }
  }
}

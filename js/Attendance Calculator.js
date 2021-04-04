//------------------nav bar actives -----------------------------------------------
//-------------------------------------- For Mobile-------------------------------
document.getElementById("cgpacal-mob-active").style.color = "";
document.getElementById("gpacal-mob-active").style.color = "";
document.getElementById("gradepred-mob-active").style.color = "";
document.getElementById("cgpaest-mob-active").style.color = "";
document.getElementById("attendancecal-mob-active").style.color = "#efeeee";

//--------------------- For PC--------------------------------------
document.getElementById("cgpacal-pc-active").style.color = "";
document.getElementById("gpacal-pc-active").style.color = "";
document.getElementById("gradepred-pc-active").style.color = "";
document.getElementById("cgpaest-pc-active").style.color = "";
document.getElementById("attendancecal-pc-active").style.color = "#383754";
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

//<!----Attendance Calculator    section-1 & section-2 RESET--->

function attendancecal1reset() {
  var x = document.getElementsByClassName("default-reset-1");
  var i;
  for (i = 0; i < 2; i++) {
    x[i].value = "";
  }

  // document.getElementById("attendancecal-1-form").reset();
  document.getElementById("cresult2").innerHTML =
    "Form is at it's default state. You can proceed...";
  document.getElementById("result2").innerHTML = "";
  document.getElementById("cbar-div").style.display = "none";
  document.getElementById("bar-div").style.display = "none";
  document.getElementById("note-msg").style.display = "none";
}

function attendancecal2reset() {
  var x = document.getElementsByClassName("default-reset-2");
  var i;
  for (i = 0; i < 3; i++) {
    x[i].value = "";
  }
  // document.getElementById("attendance-cal-2-form").reset();
  document.getElementById("result2").innerHTML =
    "Form is at it's default state. You can proceed...";
  document.getElementById("cresult2").innerHTML = "";
  document.getElementById("cbar-div").style.display = "none";
  document.getElementById("bar-div").style.display = "none";
  document.getElementById("note-msg").style.display = "block";
}

function attendcal1null() {
  document.getElementById("cresult2").innerHTML = "";
  document.getElementById("cbar-div").style.display = "none";
  document.getElementById("note-msg").style.display = "block";
}

function attendcal2null() {
  document.getElementById("result2").innerHTML = "";
  document.getElementById("bar-div").style.display = "none";
  document.getElementById("note-msg").style.display = "none";
}

//<!----Attendance Calculator    section-1--->

//  function cpclassesadd() {
//   if (document.getElementById("cone").value == "") {
//     document.getElementById("cone").value = 1;
//     cdivideBy();
//   }
//   else {
//     document.getElementById("cone").value = parseInt(document.getElementById("cone").value) + 1;
//     cdivideBy();
//   }
// }

// function cpclassessub() {
//   if (document.getElementById("cone").value == 1) {
//     document.getElementById("cone").value = 0;
//     cdivideBy();
//   }
//   else if (document.getElementById("cone").value == 0) {
//     document.getElementById("cone").value = 0;
//     cdivideBy();
//   }
//   else {
//     document.getElementById("cone").value = parseInt(document.getElementById("cone").value) - 1;
//     cdivideBy();
//   }
// }

// function caclassesadd() {
//   if (document.getElementById("ctwo").value == "") {
//     document.getElementById("ctwo").value = 1;
//     cdivideBy();
//   }
//   else {
//     document.getElementById("ctwo").value = parseInt(document.getElementById("ctwo").value) + 1;
//     cdivideBy();
//   }
// }

// function caclassessub() {
//   if (document.getElementById("ctwo").value <= 1) {
//     document.getElementById("ctwo").value = 0;
//     cdivideBy();
//   }
//   else {
//     document.getElementById("ctwo").value = parseInt(document.getElementById("ctwo").value) - 1;
//     cdivideBy();
//   }
// }

function cdivideBy() {
  document.getElementById("cbar-div").style.display = "block";
  document.getElementById("note-msg").style.display = "none";

  var num2 = parseInt(document.getElementById("cone").value);
  var num3 = parseInt(document.getElementById("ctwo").value);

  if (num2 < 0 || num3 < 0) {
    document.getElementById("cresult2").innerHTML =
      "Kindly check your entries, shouldn't be negative.";
    document.getElementById("cbar").style.width = "0%";
  } else if (num3 == 0 && num2 == 0) {
    document.getElementById("cresult2").innerHTML = "Your attendance is 0%";
    document.getElementById("cbar").style.width = 0 + "%";
  } else if (num3 > 0) {
    var num4 = ((num2 + num3 - num3) / (num2 + num3)) * 100;
    num4 = num4 || 0;

    if (num4 > 100) {
      document.getElementById("cresult2").innerHTML =
        "Kindly check your entries.";

      document.getElementById("cbar").style.width = "0%";
    } else if (num4 >= 75) {
      document.getElementById("cbar").classList.remove("bg-danger");
      document.getElementById("cbar").classList.remove("bg-warning");
      document.getElementById("cbar").classList.add("bg-success");
      document.getElementById("cbar").innerHTML = num4.toFixed(2) + "%";
      document.getElementById("cbar").style.width = num4.toFixed(2) + "%";
      document.getElementById("cresult2").innerHTML =
        "Your attendance is " + num4.toFixed(2) + "%";
    } else if (num4 >= 50) {
      document.getElementById("cbar").classList.remove("bg-danger");
      document.getElementById("cbar").classList.remove("bg-success");
      document.getElementById("cbar").classList.add("bg-warning");
      document.getElementById("cbar").innerHTML = num4.toFixed(2) + "%";
      document.getElementById("cbar").style.width = num4.toFixed(2) + "%";
      document.getElementById("cresult2").innerHTML =
        "Your attendance is " + num4.toFixed(2) + "%";
    } else if (num4 < 0) {
      document.getElementById("cresult2").innerHTML =
        "Kindly check your entries.";
      document.getElementById("cbar").style.width = "0%";
    } else {
      document.getElementById("cbar").classList.remove("bg-success");
      document.getElementById("cbar").classList.remove("bg-warning");
      document.getElementById("cbar").classList.add("bg-danger");
      document.getElementById("cbar").innerHTML = num4.toFixed(2) + "%";
      document.getElementById("cbar").style.width = num4.toFixed(2) + "%";
      document.getElementById("cresult2").innerHTML =
        "Your attendance is " + num4.toFixed(2) + "%";
    }
  } else {
    var num4 = (num2 / num2) * 100;
    num4 = num4 || 0;
    if (num4 > 100) {
      document.getElementById("cresult2").innerHTML =
        "Kindly check your entries.";
      document.getElementById("cbar").style.width = "0%";
    } else if (num4 >= 75) {
      document.getElementById("cbar").classList.remove("bg-danger");
      document.getElementById("cbar").classList.remove("bg-warning");
      document.getElementById("cbar").classList.add("bg-success");
      document.getElementById("cbar").innerHTML = num4.toFixed(2) + "%";
      document.getElementById("cbar").style.width = num4.toFixed(2) + "%";
      document.getElementById("cresult2").innerHTML =
        "Your attendance is " + num4.toFixed(2) + "%";
    } else if (num4 >= 50) {
      document.getElementById("cbar").classList.remove("bg-danger");
      document.getElementById("cbar").classList.remove("bg-success");
      document.getElementById("cbar").classList.add("bg-warning");
      document.getElementById("cbar").innerHTML = num4.toFixed(2) + "%";
      document.getElementById("cbar").style.width = num4.toFixed(2) + "%";
      document.getElementById("cresult2").innerHTML =
        "Your attendance is " + num4.toFixed(2) + "%";
    } else {
      document.getElementById("cbar").classList.remove("bg-success");
      document.getElementById("cbar").classList.remove("bg-warning");
      document.getElementById("cbar").classList.add("bg-danger");
      document.getElementById("cbar").innerHTML = num4.toFixed(2) + "%";
      document.getElementById("cbar").style.width = num4.toFixed(2) + "%";
      document.getElementById("cresult2").innerHTML =
        "Your attendance is " + num4.toFixed(2) + "%";
    }
  }
}

//======================== section -2 or format-2========================================

var one = document.getElementById("one");
var two = document.getElementById("two");
var oneaddon = document.getElementById("paddons");
var oneaddon1 = document.getElementById("paddons1");
var twoaddon = document.getElementById("aaddons");
var twoaddon1 = document.getElementById("aaddons1");

//checks instantly
// var checker = setInterval(function () {
//   if (two.value !== "") {
//     one.disabled = true;
//     oneaddon.disabled = true;
//     oneaddon1.disabled = true;
//   } else {
//     //when its clear, it enabled again
//     one.disabled = false;
//     oneaddon.disabled = false;
//     oneaddon1.disabled = false;
//   }
//   if (one.value !== "") {
//     two.disabled = true;
//     twoaddon.disabled = true;
//     twoaddon1.disabled = true;
//   } else {
//     two.disabled = false;
//     twoaddon.disabled = false;
//     twoaddon1.disabled = false;
//   }
// }, 30);

// function tclassesadd() {
//   if (document.getElementById("noc").value == "") {
//     document.getElementById("noc").value = 1;
//     divideBy();
//   }
//   else {
//     document.getElementById("noc").value = parseInt(document.getElementById("noc").value) + 1;
//     divideBy();
//   }
// }

// function tclassessub() {
//   if (document.getElementById("noc").value == 0) {
//     document.getElementById("noc").value = 1;
//     divideBy();
//   }
//   else if (document.getElementById("noc").value == 1) {
//     document.getElementById("noc").value = 1;
//     divideBy();
//   }
//   else {
//     document.getElementById("noc").value = parseInt(document.getElementById("noc").value) - 1;
//     divideBy();
//   }
// }

// function pclassesadd() {
//   if (document.getElementById("one").value == "") {
//     document.getElementById("one").value = 1;
//     divideBy();
//   }
//   else {
//     document.getElementById("one").value = parseInt(document.getElementById("one").value) + 1;
//     divideBy();
//   }
// }

// function pclassessub() {
//   if (document.getElementById("one").value == 1) {
//     document.getElementById("one").value = "";
//     divideBy();
//   }
//   else {
//     document.getElementById("one").value = parseInt(document.getElementById("one").value) - 1;
//     divideBy();
//   }
// }

// function aclassesadd() {
//   if (document.getElementById("two").value == "") {
//     document.getElementById("two").value = 1;
//     divideBy();
//   }
//   else {
//     document.getElementById("two").value = parseInt(document.getElementById("two").value) + 1;
//     divideBy();
//   }
// }

// function aclassessub() {
//   if (document.getElementById("two").value == 1) {
//     document.getElementById("two").value = "";
//     divideBy();
//   }
//   else {
//     document.getElementById("two").value = parseInt(document.getElementById("two").value) - 1;
//     divideBy();
//   }
// }

function divideBy() {
  document.getElementById("bar-div").style.display = "block";
  document.getElementById("note-msg").style.display = "block";

  var num1 = document.getElementById("noc").value;
  var num2 = document.getElementById("one").value;
  var num3 = document.getElementById("two").value;

  if (num1 < 1 || num2 < 0 || num3 < 0) {
    document.getElementById("result2").innerHTML =
      "Kindly check your entries, shouldn't be negative or empty.";
    document.getElementById("bar").style.width = "0%";
  } else if (num2 > 0 && num3 > 0) {
    document.getElementById("result2").innerHTML =
      "Kindly enter either no of classes present (or) no of classes absent, but not both.";
    document.getElementById("bar").style.width = "0%";
  } else if (num3 == 0 && num2 == 0 && num1 >= 1) {
    document.getElementById("result2").innerHTML = "Your attendance is 0%";
    document.getElementById("bar").style.width = 0 + "%";
  } else if (num3 > 0) {
    var num5 = num1 - num3;
    var num4 = (num5 / num1) * 100;
    num4 = num4 || 0;
    if (num4 > 100) {
      document.getElementById("result2").innerHTML =
        "Kindly check your entries.";

      document.getElementById("bar").style.width = "0%";
    } else if (num4 >= 75) {
      document.getElementById("bar").classList.remove("bg-danger");
      document.getElementById("bar").classList.remove("bg-warning");
      document.getElementById("bar").classList.add("bg-success");
      document.getElementById("bar").innerHTML = num4.toFixed(2) + "%";
      document.getElementById("bar").style.width = num4.toFixed(2) + "%";
      document.getElementById("result2").innerHTML =
        "Your attendance is " + num4.toFixed(2) + "%";
    } else if (num4 >= 50) {
      document.getElementById("bar").classList.remove("bg-danger");
      document.getElementById("bar").classList.remove("bg-success");
      document.getElementById("bar").classList.add("bg-warning");
      document.getElementById("bar").innerHTML = num4.toFixed(2) + "%";
      document.getElementById("bar").style.width = num4.toFixed(2) + "%";
      document.getElementById("result2").innerHTML =
        "Your attendance is " + num4.toFixed(2) + "%";
    } else if (num4 < 0) {
      document.getElementById("result2").innerHTML =
        "Kindly check your entries.";
      document.getElementById("bar").style.width = "0%";
    } else {
      document.getElementById("bar").classList.remove("bg-success");
      document.getElementById("bar").classList.remove("bg-warning");
      document.getElementById("bar").classList.add("bg-danger");
      document.getElementById("bar").innerHTML = num4.toFixed(2) + "%";
      document.getElementById("bar").style.width = num4.toFixed(2) + "%";
      document.getElementById("result2").innerHTML =
        "Your attendance is " + num4.toFixed(2) + "%";
    }
  } else {
    var num4 = (num2 / num1) * 100;
    num4 = num4 || 0;
    if (num4 > 100) {
      document.getElementById("result2").innerHTML =
        "Kindly check your entries.";
      document.getElementById("bar").style.width = "0%";
    } else if (num4 >= 75) {
      document.getElementById("bar").classList.remove("bg-danger");
      document.getElementById("bar").classList.remove("bg-warning");
      document.getElementById("bar").classList.add("bg-success");
      document.getElementById("bar").innerHTML = num4.toFixed(2) + "%";
      document.getElementById("bar").style.width = num4.toFixed(2) + "%";
      document.getElementById("result2").innerHTML =
        "Your attendance is " + num4.toFixed(2) + "%";
    } else if (num4 >= 50) {
      document.getElementById("bar").classList.remove("bg-danger");
      document.getElementById("bar").classList.remove("bg-success");
      document.getElementById("bar").classList.add("bg-warning");
      document.getElementById("bar").innerHTML = num4.toFixed(2) + "%";
      document.getElementById("bar").style.width = num4.toFixed(2) + "%";
      document.getElementById("result2").innerHTML =
        "Your attendance is " + num4.toFixed(2) + "%";
    } else {
      document.getElementById("bar").classList.remove("bg-success");
      document.getElementById("bar").classList.remove("bg-warning");
      document.getElementById("bar").classList.add("bg-danger");
      document.getElementById("bar").innerHTML = num4.toFixed(2) + "%";
      document.getElementById("bar").style.width = num4.toFixed(2) + "%";
      document.getElementById("result2").innerHTML =
        "Your attendance is " + num4.toFixed(2) + "%";
    }
  }
}

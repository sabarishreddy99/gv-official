//------------------------Sweet Alert CDN insertion ----------------------------------------------
var jQueryScript = document.createElement("script");
jQueryScript.setAttribute(
  "src",
  "https://unpkg.com/sweetalert/dist/sweetalert.min.js"
);
document.head.appendChild(jQueryScript);

//---------------------------loading ----------------------------------------

function loadfunc() {
  var h = document.getElementById("loading");
  h.style.display = "none";
}

//---------------------------new year----------------------------------------

function closenewyear() {
  var h = document.getElementById("new-year");
  h.style.display = "none";
}

// -----------------------navbar collapse mobile view  -----------------------------

function openNav() {
  document.getElementById("myNav").style.height = "108%";
}

function closeNav() {
  document.getElementById("myNav").style.height = "0%";
}

// -------------------------------  Type Writer-----------------------------------
var TxtType = function (el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = "";
  this.tick();
  this.isDeleting = false;
};

TxtType.prototype.tick = function () {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">' + this.txt + "</span>";

  var that = this;
  var delta = 200 - Math.random() * 100;

  if (this.isDeleting) {
    delta /= 2;
  }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === "") {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function () {
    that.tick();
  }, delta);
};

function introTEXTtypewriting() {
  var elements = document.getElementsByClassName("typewrite");
  for (var i = 0; i < elements.length; i++) {
    var toRotate = elements[i].getAttribute("data-type");
    var period = elements[i].getAttribute("data-period");
    if (toRotate) {
      new TxtType(elements[i], JSON.parse(toRotate), period);
    }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
  document.body.appendChild(css);
}

//--------------------------------------- fixed-tops----------------------------------------

//Get the button of back to top
//  var mybutton = document.getElementById("go-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 120 ||
    document.documentElement.scrollTop > 120
  ) {
    document.getElementById("go-to-top").style.display = "block";
  } else {
    document.getElementById("go-to-top").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  const topsy = document.querySelector("#section1");
  topsy.scrollIntoView({ behavior: "smooth" });
}

//qr code
function on() {
  document.getElementById("overlayqr").style.display = "block";
}

function off() {
  document.getElementById("overlayqr").style.display = "none";
}

//share button

function onshare() {
  document.getElementById("overlayshare").style.display = "block";
}
function offshare() {
  document.getElementById("overlayshare").style.display = "none";
}

//--------------------feed back----------------------------------------

function yes1() {
  document.getElementById("no").style.color = "";
  document.getElementById("yes").style.color = "green";
  document.getElementById("helpful").value = "Satisfied";
  document.getElementById("Message").placeholder =
    "We are glad that you are satisfied. Help us to improve further.";
}
function no1() {
  document.getElementById("no").style.color = "red";
  document.getElementById("yes").style.color = "";
  document.getElementById("helpful").value = "Unsatisfied";
  document.getElementById("Message").placeholder =
    "We are sorry to know that you are unsatisfied. Help us to improve by posting your difficulty.";
}
function sendfeedback() {
  var thumbs = document.getElementById("helpful").value;
  var name = document.getElementById("Name").value;
  var msg = document.getElementById("Message").value;
  if (thumbs.length != 0 && name.length != 0 && msg.length != 0) {
    swal({
      title: "Thank you!",
      text:
        "Your feedback has been submitted successfuly. We will be looking further to assist you. Happy Learning!",
      icon: "success",
    });
    //alert("Your feedback has been submitted successfuly. We will be looking further to assist you. Thank you & Happy Learning!");
  }
}

function validatedetails() {
  var thumbs = document.getElementById("helpful").value;
  var name = document.getElementById("Name").value;
  var msg = document.getElementById("Message").value;
  if (thumbs.length == 0 || name.length == 0 || msg.length == 0) {
    alert("Please fill all the entries and let us improve further.");
    return false;
  }
}

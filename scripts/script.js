// This is the main jscript

//variables
var overlay = document.getElementById('mainOverlay');
var tosLB = document.getElementById('tosMainWrapper');
var selfie = document.getElementById('selfie');
var banner = document.getElementById('banner');

window.onload = eventListeners();
// eventlisteners
function eventListeners(){
  if (document.getElementById('openFormArrow') != null) {
    document.getElementById('openFormArrow').addEventListener("click", function(){commisionFormOpen()}, true);
    document.getElementById('closeFormArrow').addEventListener("click", function(){commisionFormClose()}, true);
    document.getElementById('tosButton').addEventListener("click", function(){tosOpen()}, true);
    document.getElementById('tosButtonForm').addEventListener("click", function(){tosOpen()}, true);
    overlay.addEventListener("click", function(){tosClose()}, true);
  } else if (selfie != null) {
    selfie.addEventListener("click", function(){toggleAboutTxt()}, true);
    document.getElementById('adobeNote').addEventListener("mouseover", function(){showAdobeNote()}, true);
    document.getElementById('adobeNote').addEventListener("mouseout", function(){hideAdobeNote()}, true);

  } else if(banner != null) {
          //the whole dragging banner thing
          // Make the DIV element draggable:
          dragElement(document.getElementById("banner"));

          function dragElement(elmnt) {
            var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
            if (banner) {
              // if present, the header is where you move the DIV from:
              banner.onmousedown = dragMouseDown;
            } else {
              // otherwise, move the DIV from anywhere inside the DIV:
              elmnt.onmousedown = dragMouseDown;
            }

            function dragMouseDown(e) {
              e = e || window.event;
              e.preventDefault();
              // get the mouse cursor position at startup:
              pos3 = e.clientX;
              document.onmouseup = closeDragElement;
              // call a function whenever the cursor moves:
              document.onmousemove = elementDrag;
            }

            function elementDrag(e) {
              e = e || window.event;
              e.preventDefault();
              // calculate the new cursor position:
              pos1 = pos3 - e.clientX;
              pos3 = e.clientX;
              // set the element's new position:
              elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
              elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
            }

            function closeDragElement() {
              // stop moving when mouse button is released:
              document.onmouseup = null;
              document.onmousemove = null;
            }
          }



  }
}

function commisionFormOpen() {
  document.getElementById('commisionFormWrapper').style.height="1800px";
  document.getElementById('openFormArrow').style.opacity="0";
  document.getElementById('openFormArrow').style.marginTop="-80px";
}

function commisionFormClose() {
  console.log('you clicked');
  document.getElementById('commisionFormWrapper').style.height="50px";
  document.getElementById('openFormArrow').style.opacity="1";
  document.getElementById('openFormArrow').style.marginTop="0px";
}

function tosOpen(){
  overlay.style.top="0";
  overlay.style.opacity="1";

  tosLB.style.top="5vh";
}

function tosClose(){
  overlay.style.top="105vh";
  overlay.style.opacity="0";
  tosLB.style.top="105vh";
}


// the selfie thing!

function toggleAboutTxt() {
  var txt1 = document.getElementById('aboutSmallTxtArea');
  var txt2 = document.getElementById('aboutSmallTxtArea2');
  var cvBtn = document.getElementById('cvButton');
  var linkedInBtn = document.getElementById('linkedInBtn');

  if (selfie.style.marginRight!="20vw"){
    selfie.style.marginRight="20vw";
    txt1.style.opacity="1";
    txt2.style.opacity="0";
    txt1.style.transitionDelay="0.6s";
    txt2.style.transitionDelay="0s";

  } else {
    selfie.style.marginRight="57vw";
    txt1.style.opacity="0";
    txt2.style.opacity="1";
    txt1.style.transitionDelay="0s";
    txt2.style.transitionDelay="0.6s";
  }
}

function showAdobeNote(){
  document.getElementById('adobeNoteP').style.opacity="0.5";
}

function hideAdobeNote(){
  document.getElementById('adobeNoteP').style.opacity="0";
}

// eye move things
$("body").mousemove(function(event) {
  var eye = $(".eye");
  var x = (eye.offset().left) + (eye.width() / 2);
  var y = (eye.offset().top) + (eye.height() / 2);
  var rad = Math.atan2(event.pageX - x, event.pageY - y);
  var rot = (rad * (180 / Math.PI) * -1) + 90;
  eye.css({
    '-webkit-transform': 'rotate(' + rot + 'deg)',
    '-moz-transform': 'rotate(' + rot + 'deg)',
    '-ms-transform': 'rotate(' + rot + 'deg)',
    'transform': 'rotate(' + rot + 'deg)'
  });
});

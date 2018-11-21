var spins = 0;
var is_win = 0;
var cnt = 0;

var playing =  false;
var gobutton = document.getElementById("gobutton");
var wheel = document.getElementsByClassName("roue1")[0];
var wheel2 = document.getElementsByClassName("roue2")[0];
var wheel3 = document.getElementsByClassName("roue3") [0];
var roueFolle = document.getElementById("roueFolle");
var body = document.getElementById("body");
var audio = new Audio("http://s1download-universal-soundbank.com/mp3/sounds/6751.MP3");
audio.volume = 0.3;
audio.loop = true;

gobutton.addEventListener("click", play);
document.getElementById("gobutton2").addEventListener("click", button2);

function play() {
  if ( playing )
    return;
  if(is_win == 1) {
    return;
  }
  if (winner >= 3)
    return;
  if(cnt == 1) {
    return;
  }
  var play_count = getTodayCount();
  console.log('play_count', play_count);
  if ( play_count > 3 )
    return;
  playing = true;
  audio.play();
  body.style.background = "black";
  roueFolle.style.animation = "rotateRoueFolle 10s linear infinite";
    wheel.style.animation="rotating 0.5s linear infinite";
    wheel.style.webkitAnimationPlayState = "running";
    console.log(wheel2);
    wheel2.style.animation="rotating 0.5s linear infinite";
    wheel3.style.animation="rotating 0.5s linear infinite";
}

function button2() {
  if(playing) {
  playing = false;
  audio.pause();
  var audio2 = new Audio('http://s1download-universal-soundbank.com/mp3/sounds/5374.MP3');
  audio2.volume = 0.4;
  var audio3 = new Audio('http://s1download-universal-soundbank.com/mp3/sounds/8548.mp3');
  audio3.volume = 0.4;
    
  var results = [];
  var wheels = [wheel, wheel2, wheel3];
  wheels.forEach(function(entry) {
    var aleaNumber = parseInt(Math.random()*8);
    entry.style.transform = "translateZ(-2000px) rotateX("+(aleaNumber*45)+"deg)";
    entry.style.animationName= " ";
    entry.style.animationIterationCount="0";
    results.push(aleaNumber);
  });
  body.style.background = "#c1220d";
  roueFolle.style.animation = "";
  console.log( results[2] +' '+ results[0] +' '+ results[1] )
  if( results[0] == results[1] == results[2] ) {
    audio3.play();
    win();
    is_win++;
    // spins = 0;
    
  } else {
    audio2.play();
    spins++;
    if(spins == 3){
      lose();
      // spins = 0;
    }
    
  }
  }
}

function win(){
  swal({
    title: 'Congratulation! You Won',
    html:
      '<img src = "images/HL.png" style="width:100%">' + 
      '<p>Please enter your cell number and name</p>' +
      '<input id="cell" name="cell "class="swal2-input" placeholder="Cell Number">' +
      '<input id="name" name="name" class="swal2-input" placeholder="Your Name">',
  }).then((result) => {
    console.log(result);
    console.log(document.getElementById('name').value);

    $.ajax({
      type: 'post',
      url: 'dbconnect.php',
      data: {
        name: document.getElementById('name').value,
        cellnumber: document.getElementById('cell').value
      },
      success: function(result){
        console.log(result);
        if(result){
          swal({
            position: 'top-end',
            type: 'success',
            text: 'Your name and cell number have been saved',
            showConfirmButton: false,
            timer: 2500
          });
        }
      }
    });
    
  });
}

  
function lose(){
  swal({type: 'warning',title:'Sorry! Try again in tomorrow'});

}


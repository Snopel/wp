// textSwap: Swaps the text in the Booking container to the desired value
function textSwap(btn) {
  //Pass in the ID of the booking title
  var x = document.getElementById("bookingTitle");
  //Assign the text to the value of the button that called it
  x.innerHTML = btn.value;
}

// toggleSyn: Reveals the correct synopsis view while hiding all the others
function toggleSyn(choice) {
  //Assigning the Synopsis panels to variables
  var a = document.getElementById("midsommarSyn");
  var b = document.getElementById("ouatihSyn");
  var c = document.getElementById("lionkingSyn");
  var d = document.getElementById("endgameSyn");

  //Pass in the value of the switch case to perform the assigned action
  switch(choice) {
    case 'midsommar':
      //Set the assigned synopsis panel to 'block', its default, to reveal
      a.style.display = "block";
      //Set all others to 'none' to hide them
      b.style.display = "none";
      c.style.display = "none";
      d.style.display = "none";
      break;
    case 'ouatih':
      a.style.display = "none";
      b.style.display = "block";
      c.style.display = "none";
      d.style.display = "none";
      break;
    case 'lionking':
      a.style.display = "none";
      b.style.display = "none";
      c.style.display = "block";
      d.style.display = "none";
      break;
    case 'endgame':
      a.style.display = "none";
      b.style.display = "none";
      c.style.display = "none";
      d.style.display = "block";
      break;
    default:
      break;
  }

}

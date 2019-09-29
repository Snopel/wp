// textSwap: Swaps the text in the Booking container to the desired value
function textSwap(btn) {
  //Pass in the ID of the booking title
  var x = document.getElementById("bookingTitle");
  //Assign the data value for discount price (Used in 'addPrices' function)
  x.dataset.value = btn.dataset.value;
  //Reveal the Booking form and hide the image
  document.getElementById("placeholder").style.display = "none";
  document.getElementById("parent").style.display = "block";
  //Assign the text to the value of the button that called it
  x.innerHTML = btn.value;
}

function navEdit(btn) {
  
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

//addPrices: Collects ticket data and displays the total amount in the form.
function addPrices() {
  //Initialising the Total value
  var total = 0;

  //Prices for Standard Tickets
  var stPrice = [14.00, 19.80, // 0 - Adult Discount, 1 - Adult Standard
                 12.50, 17.50, // 2 - Concession Discount, 3 - Concession Standard
                 11.00, 15.30]; // 4 - Child Discount, 5 - Child Standard
  //Prices for First Class Tickets
  var fcPrice = [24.00, 30.00,
                 22.50, 27.00,
                 21.00, 24.00];

  //Discount value; Determines whether the booking time selected is a discount time
  var d = document.getElementById("bookingTitle").dataset.value;

  //Passing in number of tickets and multiplying by their respective Prices
  /*Using -d to select correct price.
   - If d = 0, then the array points to the number of the standard values
   - If d = 1, it'll subtract from the number to bring it down to the discount values
  */
  //STANDARD
  var stdAdult = parseFloat(document.getElementById("stdAdult").value) * stPrice[1 - d];
  var stdConcession = parseFloat(document.getElementById("stdConcession").value) * stPrice[3 - d];
  var stdChild = parseFloat(document.getElementById("stdChild").value) * stPrice[5 - d];
  //FIRST CLASS
  var fcAdult = parseFloat(document.getElementById("fcAdult").value) * fcPrice[1 - d];
  var fcConcession = parseFloat(document.getElementById("fcConcession").value) * fcPrice[3 - d];
  var fcChild = parseFloat(document.getElementById("fcChild").value) * fcPrice[5 - d];

  //Adding up all the tickets
  total = (stdAdult + stdConcession + stdChild + fcAdult + fcConcession + fcChild).toFixed(2);
  //Changing the Total displayed in the form to the correct number
  document.getElementById("ticketTotal").innerHTML = "Total: $" + total;


}

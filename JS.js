 //add tablebox
 $(document).ready(function () {
  $(".addmore").on('click', function () {
      var count = $('#form_table')[0].rows.length;
      var data = "<tr class='case'><td><span id='snum" + count + "'>" + count + ".</span></td>";
      data += " <td><div class='form-outline'><input class='form-control bg-white border-0' type='text' style='height: 55px;' name='medicineName[]' /></div></td><td><div class='form-outline'><input class='form-control bg-white border-0' type='text' style='height: 55px;' name='dosage[]' /></div></td></td><td><div><input type='text' name='comment[]' id='comment[]'class='form-control bg-white border-0' placeholder=''style='height: 55px;'></div></td><td><div class='row d-flex justify-content-center'><div class='col-md-6'><input type='checkbox' name='allowSubsistuation[]'id='allowSubsistuation[]' value='1' class='bg-white border-0'placeholder='' style='height: 55px;'></div></div></td></tr>";
      $('#form_table').append(data);
  });
  $('form#test').on('click', '.childtbl', function () {
      var $titlesTable = $(this).next('table')[0];
      var titlesCount = $titlesTable.rows.length + 1;
      var data1 = "<tr class='case1'><td><span id='snum1" + titlesCount + "'>" + titlesCount + ".</span></td>";
      data1 += "<td>Title:<input class='form-control' type='text' name='wr[]'/></td></tr>";
      $($titlesTable).append(data1);
  });
});

// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn1");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function () {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
  if (event.target == modal) {
      modal.style.display = "none";
  }
}

//status button

// document.getElementById("buttonID").innnerHTML=
//    "New Button Text using innerHTML";
// function replaceButtonText(buttonId, text)
// {
//   if (document.getElementById)
//   {
//     var button=document.getElementById(buttonId);
//     if (button)
//     {
//       if (button.childNodes[0])
//       {
//         button.childNodes[0].nodeValue=text;
//       }
//       else if (button.value)
//       {
//         button.value=text;
//       }
//       else //if (button.innerHTML)
//       {
//         button.innerHTML=text;
//       }
//     }
//   }


// $('.orange').hide();

// $('#myButton1').click(function(){
//  $('.gray,.orange').toggle();
// })
// $(".gray").click(function(){
// $("#myButton1").prop('value', $(this).text());

// })
// $(".orange").click(function(){
// $("#myButton1").prop('value', $(this).text());

// })

function change() // no ';' here
{
    var elembtn = document.getElementById("myButton1");
    var elemtxt = document.getElementById("status");
    if (elembtn.value=="Confirm") elembtn.value = "Waiting";
    else if(elembtn.value=="Waiting") elembtn.value = "In-consulatation";
    else if(elembtn.value=="In-consulatation") elembtn.value = "Done";
    else elembtn.value = "Done";

    if (elemtxt.value=="Draft"){
      document.getElementById('status').value="Confirm";

   }else if (elemtxt.value=="Confirm"){
      document.getElementById('status').value="Waiting";
      
    }else if (elemtxt.value=="Waiting"){
      document.getElementById('status').value="In-consulatation";

   }else {document.getElementById('status').value="Done";
   }
}
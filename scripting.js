//javascript code here

const themeOfParvatCoolWebsite = document.getElementsByTagName('html')[0];
const toggleTheme = (theme) => {
    themeOfParvatCoolWebsite.dataset.theme = theme;
}

function data_entry() {
    var fname = contact_form.txtfull_name.value;
    var fnumber = contact_form.txtphone.value;
    var femail = contact_form.txtemail.value;
    var faddress = contact_form.txtaddress.value;

    document.write("<body bgcolor='black' style='color:cyan; font-family:arial black; padding:50px'><h1 align='center' style='border:5px dashed white;padding:10px'>USER DATA INPUT</h1>");
    document.write("<div  style='border:5px dashed white;'><br><br><b align='center' style='padding:20px;font-size:15px' >NAME OF THE CUSTOMER</b> :  <span style='color:white'>&nbsp;&nbsp;&nbsp;" + fname + " </span><br><br>");
    document.write("<b align='center' style='padding:20px;font-size:15px'>CONTACT NO.</b> : <span style='color:white'>&nbsp;&nbsp;&nbsp;" + fnumber + " </span><br><br>");
    document.write("<b align='center' style='padding:20px;font-size:15px'>EMAIL ID</b> : <span style='color:white'>&nbsp;&nbsp;&nbsp;" + femail + " </span><br><br>");
    document.write("<b align='center' style='padding:20px;font-size:15px'>ADDRESS ENTERED</b> : <span style='color:white'>&nbsp;&nbsp;&nbsp;" + faddress + " </span><br><br></div></body>");
    document.write("<center><b style='padding:20px;font-size:15px;'><br><br><br>FORM SUBMITTED SUCCESSFULLY</b></center>");
};

function myFunction($value)
{       
    if($value=="PARVATCOOL ORIGINAL") {purchase_form.txtprice.value = "20";}
    else if($value=="PARVATCOOL LIME"){purchase_form.txtprice.value = "30";}
    else if($value=="PARVATCOOL COOL"){purchase_form.txtprice.value = "40";}
    else if($value=="PARVATCOOL HEALTH+"){purchase_form.txtprice.value = "50";}
    else if($value=="INTENSE Deostick"){purchase_form.txtprice.value = "70";}
    else if($value=="PARVATCOOL ENERGY"){purchase_form.txtprice.value = "90";}
    else if($value=="PARVATCOOL BODY FRAGNANCE"){purchase_form.txtprice.value = "120";}
    else if($value=="TALC ORIGINAL"){purchase_form.txtprice.value = "80";}
    else if($value=="TALC LIME"){purchase_form.txtprice.value = "110";}
    else if($value=="TALC COOL"){purchase_form.txtprice.value = "130";}
    else {purchase_form.txtprice.value = "0";}
}


function showDiv(element)
{
    document.getElementById('card').style.display = element.value == 1 ? 'block' : 'none';
}
/*
$(document).ready(function(){

    var $container = $(window).width();
    if ($container <= 818) {
    $("#list").hide();
    $(".baricon").on("click", function(){
        $("#list").toggle();
    });
 
    }
  });
*/
 

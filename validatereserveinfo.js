
function validateForm()
{

if(document.reserveinfo.checkIn.value==null||document.reserveinfo.checkIn.value=="")
{
alert("Check Out date cannot be blank")
return false;
}

if(document.reserveinfo.checkOut.value==null||document.reserveinfo.checkOut.value=="")
{
alert("Check Out date cannot be blank")
return false;
}


if(document.reserveinfo.noOfPerson.value==null||document.reserveinfo.noOfPerson.value=="")
{
alert("You must specify the number of person !!!")
return false;
}
}
function validform()
{
var a=document.forms["myform"]["name"].value;
if(a=="")
{
alert("Name must be filled!!");
return false;
}
if(!isNaN(a))
{
alert("Invalid Name Field!!");
return false;
}
var b=document.forms["myform"]["mobno"].value;
var c=b.length;
if(b=="")
{
alert("Mobile Number must be filled!!");
return false;
}
if(c!=10||isNaN(b))
{
alert("Invalid Mobile Number!!");
return false;
}
var f = document.forms["myform"]["email"].value;
var x=f.length;
if(f=="")
{
alert("Mail id must be filled");
return false;
}
if(!(f.includes("@")))
{
	alert("Invalid Mail id!!");
	return false;
}
else if (f[f.indexOf("@")+1]==".")
{
	alert("Invalid Mail id!!");
	return false;
}
else if(f[0]==""||f[0]==".")
{
	alert("Invalid Mail id!!");
	return false;
}
else if((((x-(f.lastIndexOf(".")))-1)!=3)&&(((x-(f.lastIndexOf(".")))-1)!=2))
{
	alert("Invalid Mail id!!");
	return false;
}
else
{
	for (var z = 0; z<x-1; z++)
	{
		if(f[z]=="."&&f[z+1]==".")
		{
			alert("Invalid Mail id!!");
			return false;
		}
	}
	for (var z = 0; i<z-1; z++)
	{
		if(f[z]=="/"||f[z]=="+"||f[z]=="-"||f[z]=="*"||f[z]=="{"||f[z]=="}"||f[z]=="["||f[z]=="]"||f[z]==")"||f[z]=="("||f[z]=="!"||f[z]=="#"||f[z]=="$"||f[z]=="%"||f[z]=="^"||f[z]=="&"||f[z]=="="||f[z]==";"||f[z]==":"||f[z]==","||f[z]=="<"||f[z]==">"||f[z]=="?")
		{
			alert("Invalid Mail id!!");
			return false;
		}
	}
}
var k=document.forms["myform"]["aadhar"].value;
var l=k.length;
if(l!=16)
{
alert("Invalid Aadhar Number");
return false;
}
var ps=document.forms["myform"]["psw"].value;
var ch=ps.length;
if(ps=="")
{
alert("Password must be filled!!");
return false;
}
if(!ch>=8)
{
alert("Invalid Password!!");
return false;
}
}
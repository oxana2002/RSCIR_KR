function validate()
{
	var fname=document.getElementById("fname");
	var lname=document.getElementById("lname");
	var age=document.getElementById("age");
	var mob=document.getElementById("mob");
	var EmailId=document.getElementById("email");
	var pw=document.getElementById("pw");
	var cpw=document.getElementById("cpw");
	var alphaExp = /^[a-zA-Z]+$/;
	var atpos = EmailId.value.indexOf("@");
    var dotpos = EmailId.value.lastIndexOf(".");
    if(fname.value==null || fname.value=="")
	{
		fname.focus();
		alert("Введите действительное имя");
		return false;
	}
	if(fname.value.match(alphaExp)){}
	else{
		alert("Имя может состоять только из букв");
		fname.focus();
		return false;
	}
	if(lname.value==null || lname.value=="")
	{
		lname.focus();
		alert("Введите действительную фамилию");
		return false;
	}
	if(lname.value.match(alphaExp)){}
	else{
		alert("Введите действительную фамилию");
		lname.focus();
		return false;
	}
	if(age.value==null || age.value=="")
	{
		alert("Пожалуйста, укажите возраст");
		age.focus();
		return false;
	}
	if (isNaN(age.value))
	{
		alert(" Ваш возраст должен быть целым числом");
		age.focus();
		return false;
	}
	if(mob.value==null || mob.value==" ")
	{
		alert("Пожалуйста, введите номер мобильного телефона");
		mob.focus();
		return false;
	}
	if (isNaN(mob.value))
	{
		alert(" Ваш номер мобильного телефона должен быть целым числом");
		mob.focus();
		return false;
	}
	if((mob.value.length!= 10))
	{
		alert("Введите действительный номер мобильного телефона (например: 9669666999)");
		mob.focus();
		return false;
	}
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=EmailId.value.length) 
	{
        alert("Введите действительный идентификатор электронной почты");
		EmailId.focus();
        return false;
   	}
 	if(pw.value.length< 8 || cpw.value.length< 8)
	{
		alert("Пожалуйста, введите пароль не менее чем из 8 символов");
		pw.focus();
		return false;
	}
	else if (pw.value.length != cpw.value.length) 
	{
		alert("Пароли не совпадают.");
		pw.focus();
        return false;
    }
	else if (pw.value != cpw.value) 
	{
		alert("Пароли не совпадают.");
		pw.focus();
        return false;
    }
	return true;
}
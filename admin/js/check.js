function checksignup()
{
	if ( document.form.username.value == '' )
	{
		window.alert('�������û���!');
		document.form.username.focus();
	}
	else if
	( document.form.password.value == '' ) {
		window.alert('�������½����!!');
		document.form.password.focus();
	}
	else if ( document.form.verifycode.value == '' )
	{
		window.alert('��������ҳ����ʾ����λ����֤��!!');
		document.form.verifycode.focus();
	}
   else
   {
	return true;
	}
	return false;
}
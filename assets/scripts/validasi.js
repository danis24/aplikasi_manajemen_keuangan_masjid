function validasi(form){
	if (form.username.value == ""){
		alert("Anda belum mengisikan Username");
		form.username.focus();
		return (false);
	}
	     
	if (form.password.value == ""){
		alert("Anda belum mengisikan Password");
		form.password.focus();
		return (false);
	}
	return (true);
}
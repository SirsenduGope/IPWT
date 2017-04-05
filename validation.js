function validate(){
	var flag_err = false;
	var regid = document.register.regno;
	var regiderr = document.getElementById("regiderr");
	if(regid.value === ""){
		regiderr.innerHTML = "This field is required.";
		flag_err = true;
	}

	var fname = document.register.fname;
	var mname = document.register.mname;
	var lname = document.register.lname;
	var nameerr = document.getElementById("nameerr");
	if(fname.value === "" && mname.value === "" && lname.value === "")
	{
		nameerr.innerHTML = "This field is required.";
		flag_err = true;
	}

	var ffname = document.register.ffname;
	var fmname = document.register.fmname;
	var flname = document.register.flname;
	var fnameerr = document.getElementById("fnameerr");
	if(ffname.value === "" && fmname.value === "" && flname.value === "")
	{
		fnameerr.innerHTML = "This field is required.";
		flag_err = true;
	}

	

	return !flag_err;
}
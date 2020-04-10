
$(document).ready(function(){

    $(".ceditbtn").click(function(e){

        let textvalues = displayCourseData(e);
        let cname =  $("input[name*='cname']");
        let ccode =  $("input[name*='ccode']");
        let cunit =  $("input[name*='cunit']");
        let clevel =  $("input[name*='clevel']");
        let ccordinator =  $("input[name*='ccordinator']");
        console.log(textvalues);

        cname.val(textvalues[1]);
        ccode.val(textvalues[2]);
        cunit.val(textvalues[3]);
        clevel.val(textvalues[4]);
        ccordinator.val(textvalues[5]);
        
    });


      $(".ueditbtn").click(function(e){

        let textvalues = displayUserData(e);
        let firstname =  $("input[name*='fname']");
        let lastname =  $("input[name*='lname']");
        let email =  $("input[name*='uemail']");
        let role =  $("input[name*='urole']");
        let password =  $("input[name*='upassword']");
        console.log(textvalues);

        firstname.val(textvalues[1]);
        lastname.val(textvalues[2]);
        email.val(textvalues[3]);
        role.val(textvalues[4]);
        password.val(textvalues[5]);

    });

});

function displayCourseData(e){
	let id = 0;
	const td = $("#ctbody tr td");

	let textvalue = [];

	for (const value of td){
		if (value.dataset.id == e.target.dataset.id){
			textvalue[id++] = value.textContent;
		}
	}
	return textvalue;
}

function displayUserData(e){
	let id = 0;
	const td = $("#utbody tr td");

	let textvalue = [];

	for (const value of td){
		if (value.dataset.id == e.target.dataset.id){
			textvalue[id++] = value.textContent;
		}
	}
	return textvalue;
}
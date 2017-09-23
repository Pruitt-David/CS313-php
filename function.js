function UserColorChanger(){
    var textbox_id = "TextID";
	var textbox = document.getElementById(textbox_id);

	var div_id = "div1";
	var div = document.getElementById(div_id);

	// We should verify values here before we use them...
	var color = textbox.value;
	div.style.backgroundColor = color;
    //var color = document.getElementById("TextID").value;
    //document.getElementById("div1").style.color = color.toString();

}

function AlertMeOnClick(){
    window.alert("I am the Alert Box, you Clicked on my Button!");
}
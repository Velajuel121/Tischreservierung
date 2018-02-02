function handleLoginButton()
{
	var username = document.querySelector("#uname").value;
	if(username == "admin"){
		window.location.href = "RestaurantView.html"
	}
	else
	{
		window.location.href = "UserView.html"
	}
}
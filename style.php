<style type="text/css">
	
html{
	scroll-behavior: smooth;

	}


	
*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Roboto', sans-serif;

}

.nav_style{
	background-color: #a29bfe;
}
.nav_style a{
	color: white;
}



/*///////main header////////////////////*/

.main_header{
	height: 450px;
	width: 100%;
}

.rightside h1{ 
	font-size: 3rem;
}


.leftside img { 
	animation : hb 5s linear infinite;

}

@keyframes hb
{
	0%
	{
		transform: :scale(.75);
	}
	20%
	{
		transform: :scale(1);
	}
	40%
	{
		transform: :scale(.75);
	}
	60%
	{
		transform: :scale(1);
	}
	80%
	{
		transform: :scale(.75);
	}
	100%
	{
		transform: :scale(.75);
	}
}

/********************corona update *******************/

.corona_update{
	margin: 0 0 30px 0;
}

.corona_update h3{
	color:black;
}
.corona_update h1{
	font-size: 2rem;
	text-align: center;
}

/*////////////about subsection//////////////////////////////////////*/

.sub_section{
	background-color: #fbfafd;


}



.footer_style
{
	background-color: #a29bfe;
}

.footer_style
{

	margin-bottom: 0!important
}


/*/////////////////////////responsive///////////////*/


@media(max-width: 768px){
	.main_header{height: 300px;text-align: center;}

	.main_header h1{
		text-align: center;
		padding: 0;
		width: 100%;
		
		font-size: 30px;
	}




}





































</style>
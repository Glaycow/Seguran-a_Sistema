<?php 

?>


<!DOCTYPE html>
<html lang="pt">
	<head>
		<meta charset="UTF-8">
		 <meta charset="windows-1252">
	   <meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>SG - G - 4</title>
   <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="https://cdn.rawgit.com/oliver-moran/jimp/v0.2.27/browser/lib/jimp.min.js"></script>   
	  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		<link rel="stylesheet" href="style.css">	

	</head>
	
<style>
	
	.site-footer {
    background: #191919;
    padding: 20% 0;
    text-align: center;
}
input[type="button"] {
    width: 20%;
    padding: 25px;
}
.menu-bar {
    background: #000;
    background: linear-gradient( rgba(40, 40, 40, 0.4), rgba(40, 40, 40, 0.4) );
    display: block;    
    position: absolute;
	text-align:center;
    width: 100%;
}

.b{
    background-color: #141414; 
    color: #848484; 
    font-family: "Source Sans Pro", "Open Sans", sans-serif; 
    font-size: 16px; 
    line-height: 24px; 
}


.img_d{

  
	margin-top:10%;
	

}


body{
    background-color: white; 
}



#Content{padding-top:140px}
body{padding:0 0 50px 0;margin:0 0 50px 0}
#Content{width:1000px;margin:10px auto;padding:20px 0;}


#PresetFilters 
  button{
  -webkit-border-radius:3px;
  -moz-border-radius:3px;
  border-radius:3px;-webkit-transition:background-color .3s ease-out;
  -moz-transition:background-color .3s ease-out;
  transition:background-color .3s ease-out;
  background-color:#368ad2;
  display:block;
  float:left;
  text-align:center;
  padding:12px 10px;
  color:#f8f8f2;
  margin:5px;
  border:none;
  font-size:13px;
  width:120px;cursor:pointer
  }
  
  #PresetFilters   
  button:focus{
  background-color:#e69751
  }
</style>
	
 
<script language = "javascript" type="text/javascript">
function validar() {

var formdata = new FormData($("form[name='myform']")[0]);

   $.ajax({
            type: 'POST',
            url: "hash.php",
            data: formdata ,
            processData: false,
            contentType: false

        }).done(function (data) {
            if(data === 'true'){
                $("#div-a").html('A assinatura do arquivo é integra');

            }
            else {
                $("#div-a").html('O arquivo sofreu modificações');
            }


        });

document.getElementById('c').style.display = 'none';
document.getElementById('d').style.display = 'none';
document.getElementById('VALORES').style.display = 'block';

}
</script>


<body class="header-collapse">

	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
			<a href =""><img src="logo.png" alt="Site Title" width = "50px" height ="50px"></a>
        </div>        
      </div>
    </nav>
	
    
	 <div class="b" id="d">	
		<div id="site-content" >
			<footer class="site-footer">
				<div class="container">								
				
					<form name = "myform" id ="myform" action="#" class="newsletter-form">
						<input type="file" name="arquivo1[]" id = "arquivo1" style="display:none;" onchange="validar()" multiple>
						<input id="valorHA" type="email" placeholder="Escreva o caminho do arquivo ..." >
						<input type="button" class="button cut-corner" value="upload do arquivo" onClick="arquivo1.click()">
					</form>					
				
			  </div>
            </footer>
		</div>			
	</div>

	 <div class="b" id="c" style = "display:none"></div>

    <div id="VALORES" class="img_d" style="display:none">
     <div class="container">
     <h1>PARTE 2: Resultado</h1>
      <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading"><b>Resultado Validações</b></div>
            <div  id= "div-a" class="panel-body"></div>
        </div>
      </div>
     </div>
    </div>
</body>
</html>
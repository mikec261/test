
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Balancing String</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
    <script src="js/validations.js"></script>
    <script src="js/functions.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
    <script>window.jQuery || document.write(unescape('%3Cscript src="/js_folder/jquery-1.6.1.min.js"%3E%3C/script%3E'))</script>




	</head>
	
	<body style="background-color: transparent">

    <div id="contenedor">
      <br>
      <center>
        <table border="0" width="95%">
          <tr>
            <td><h5><font color="#263872" face="Century Gothic" size="16">Balancing String</font></h5></td>
            <td align="right"></td>
          </tr>
        </table>
      </center><br><br>

        <center>
          <form class="form-horizontal" name='formBalancigString' id='formBalancigString' >

          	<div class="container" style="border:1px solid #2B2B2B;border-radius:10px;width:95%"><br/>
	            
              <div class="form-group">
	              <div class="row">

	                <!-- Cliente -->
	                <label for="text" class="col-sm-2 control-label">Unbalanced String</label>
	                <div class="col-sm-6">
  						      <input type="text" class="form-control" name="txtUnbalancedString" id="txtUnbalancedString" placeholder="WRITE A STRING ​​ONLY USING PARENTESES FOR EXAMPLE '((()) ()' " onkeypress="return onlyParenteses(event)" onchange="QuitErrorStatus($(this))" >
	                </div>

	                <!-- button -->
	                <div class="col-sm-4">
	                  	<button type="button" class="btn btn-success" onclick="BalancingString('formBalancigString')">Aceptar</button>
	                </div>

	              </div>
	            </div>
     
            </div>
            <br>
            <br>
        </form>
      </center>
    </div>
    <br>
     
	</body>
</html>
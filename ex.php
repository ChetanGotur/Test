<!DOCTYPE html>
<html>
<head>
    <title>Insert Image</title>
	<script> 
	$('#abc').on('submit', function(){
     if(VAR == 1){
        return true;  
     } 
   alert('Please check value of VAR');
   return false;
});
	</script>
</head>
<body>
<form action="http://targatesite.com" target="_blank" method="post" name="xyz" id="abc"> <input type="hidden" name="email" value="user_email" />    
    <input type="submit" name="sbmt" id="sbmt" value="user_value" class="user_class" onSubmit="return submit();"/> 
    </form>

</body>
</html>
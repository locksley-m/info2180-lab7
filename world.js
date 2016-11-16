$(document).ready(function(){
    
$('#lookup').on('click', function(){
    
    var checked = $('#all').is(":checked");
    var text="";
    text = $('#country').val();
    console.log(text);

    
    if(checked == true){
        $.get('world.php?all=true', function(data){
           $('#result').html(data); 
        });
        
    }else{
        $.get('world.php?country='+text,function(data){
           $('#result').html(data);
        });
        
    }
    
  });
});
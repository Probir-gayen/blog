$("document").ready(function(){
    $("#email").blur(function(e){
        var check="val="+$('#email').val()+"&opt=email";
        $.ajax({

                type :'post' ,
                url:"http://localhost/Blog/public/login/ajax",
                data : check,
                success : function(data)
                {
                	if(data == "Email Already Exist")
                	{
                		//alert(data);
                		$("#semail").html(data);
                	}
                	else
                	{
                		$("#semail").html(data);	
                	}
                }


            });
        });
    
    $("#fname").blur(function(e){
        var check1="val="+$('#fname').val()+"&opt=fname";
        $.ajax({

                type :'post' ,
                url:"http://localhost/Blog/public/login/ajax",
                data : check1,
                success : function(data)
                {
                	if(data == "Name Already Exist")
                	{
                		//alert(data);
                		$("#sname").html(data);
                	}
                	else
                	{
                		$("#sname").html(data);	
                	}                                                                                                  
                }


            });
        });

    $("#category").click(function(e){

        var cat=$('#category').val();
        var data;
        
        if(cat=="Technical"){
            data = '<option>Select Tag</option><option>Java</option><option>PHP</option><option>C and C++</option><option>dot Net</option><option>C Sharp</option><option>Others</option>';
            $("#tag").html(data);
        }

        if(cat=="Communication"){
            data = '<option>Select Tag</option><option>Facebook</option><option>Line</option><option>Hike</option><option>Blog</option><option>WhatsApp</option><option>Others</option>';
            $("#tag").html(data);
        
        }

        if(cat=="Food"){
            data = '<option>Select Tag</option><option>Non-veg</option><option>Veg</option><option>dot Net</option><option>C Sharp</option><option>Others</option>';
            $("#tag").html(data);
        
        }

        if(cat=="Entertainment"){
            data = '<option>Select Tag</option><option>Comedy</option><option>Hollywood</option><option>Bollywood</option><option>Circus</option><option>Zoo</option><option>Others</option>';
            $("#tag").html(data);
        
        }

        if(cat=="Ethical"){
            data = '<option>Select Tag</option><option>Religion</option><option>Others</option>';
            $("#tag").html(data);
        
        }

        if(cat=="Social Message"){
            data = '<option>Select Tag</option><option>Facebook</option><option>Twitter</option><option>Blog</option><option>Linkdine</option><option>Others</option>';
            $("#tag").html(data);
        
        }

        if(cat=="News"){
            data = '<option>Select Tag</option><option>National</option><option>International</option><option>Politics</option><option>Sports</option><option>Business</option><option>Others</option>';
            $("#tag").html(data);
        }
        

         if(cat=="Awareness"){
            data = '<option>Select Tag</option><option>Diseases</option><option>Soical Awar</option><option>New Act</option><option>Others</option>';
            $("#tag").html(data);
        }
        

         if(cat=="Others"){
            
            data ='<input type="text" name="categoryop" placeholder="Enter Category">';
            $("#catop").html(data);
            $('#tag').html('<option>Others</others>');
            $('#tagop').html('<input type="text" name="tagop" placeholder="Enter Tag">');
        }
        else{
            $("#catop").toggle();
            $("#tagop").toggle();
        }
    });
    
    $("#tag").click(function(e){

        var cat=$('#tag').val();
        if(cat=="Others")
        {
          $('#tagop').html('<input type="text" name="tagop" placeholder="Enter Tag">');  
        }

    });
});


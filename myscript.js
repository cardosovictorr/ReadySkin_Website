$(document).ready(function(){
    cat_list();
    products_list();
    display_cart();
    
  function cat_list(){
      
    $.ajax({
        url:"action.php",
        method : "POST",
        data : {category:1},
        success : function(result){
          $("#cat_div").html(result);
        
     }
    })
    
  } 
    
 function products_list(){
    
   $.ajax({
       url:"action.php",
       method : "POST",
       data : {products:1,search:1},
       success : function(result2){
          $("#products_info").html(result2);
        
     }
    })
    
  } 
        
 function display_cart(){
    
   $.ajax({
       url:"action.php",
       method : "POST",
       data : {displayCart:1},
       success : function(cart){
          $("#cart_display").html(cart);
        
     }
    })
    
  } 
    
///////////////////////  filter product //////////////////////
    
    
 $("body").on("click",".category",function(event){
    	event.preventDefault();
		var cid = $(this).attr('cid');
        $.ajax({url:"action.php", method : "POST", data : {categories:1,cat_id:cid}, success : function(result3){
          $("#products_info").html(result3);
        
     }
    })
	})	
    
    
    ///////////////////////  Display individual product //////////////////////
    
    
    $("body").on("click",".each_product",function(event){
         var pid = $(this).attr('product_id'); 
         $.ajax({url:"product_page.php", method : "POST", data : {prod_id:pid}, success : function(result4){
          $("#products_info").html(result4);
        
     }
    })
    
	})
    
    
    /////////////// Add to Cart //////////////
    
    $("body").on("click",".add_product",function(event){
    	event.preventDefault();
        var pro_id = $(this).attr('pid');
         $.ajax(
             {
                 url:"action.php",
                 method : "POST",
                 data : 
                 {
                     addproduct:1,
                     ProId:pro_id
                 }, 
                 success : function(data){
                   alert(data)
                 }, error : function(response) {
                     
                 }
    })
           
    });
    

        /////////////////////// search /////////////////////////
    
    
     $("#k_search").click(function(e){
         e.preventDefault();
    	var s_keyword= $('#search').val();
        //alert(s_keyword);
        if(search_keyword !=""){ 
            $.ajax({url:"action.php", method : "POST", data : {search_keyword:1,search_key:search_keyword}, success : function(result6){
              $("#products_info").html(result6);
               //alert(result6);
            
          }
        })
        }
	})
    
    

}) //final closing brackets
  
    
    
    
    
    
    
    
    
  
    

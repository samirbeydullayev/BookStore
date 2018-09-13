$(document).ready(function(){

		// PAYLAWMAQ UCUN BIR MELUMATI BU USULDAN ISDIFADE ETMEK DAHA YAXWIDI

		var share_btn = $(".share-button");

		share_btn.on("click",function(e) {

			e.stopPropagation();

			var url = this.href;

				  // olcu sohbetidi nece olcude pencere acilacaq deye
				  // ******************************************************

				//   var domain = url.split("/")[2];
				
				// switch(domain){

		  //          case "www.facebook.com"
		  //          window_size -> oz verdiyin olcu

				// }

				// **************************************

				window.open(url,"_blank","toolbar=yes,scrollbars=yes,resizable=yes,top=100,left=100,width=500,height=400");
				return false;		  

			})

				 // ***************************************************************************************************888
				 // 8******************************************************************************************************

     // MODALDA REMOVE IWLEMLERININ APARILMASI

     $("#modal_rmv_btn").on("click",function(){

     	var $url = $(this).data("url");
     	var $unique_id = $(this).data("unique-id");

     	var $data = {
     		unique:$unique_id
     	}


     	var $token = $(this).data("token");
     	var $hash = $(this).data("hash");

     	$data[$token] = $hash;
     	$.post($url,$data,

     		function(res){
     			

     		}

     		)


     })
 })
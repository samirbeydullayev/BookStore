/* Theme Name: The Project - Responsive Website Template
 * Author:HtmlCoder
 * Author URI:http://www.htmlcoder.me
 * Author e-mail:htmlcoder.me@gmail.com
 * Version: 2.0.0
 * Created:March 2015
 * License URI:http://support.wrapbootstrap.com/
 * File Description: Place here your custom scripts
 */

 (function($){
 	$(document).ready(function(){



		// Notify Plugin - The below code (until line 42) is used for demonstration purposes only
		//-----------------------------------------------
		if (($(".main-navigation.onclick").length>0) && !Modernizr.touch ){
			$.notify({
				// options
				message: 'The Dropdowns of the Main Menu, are now open with click on Parent Items. Click "Home" to checkout this behavior.'
			},{
				// settings
				type: 'info',
				delay: 10000,
				offset : {
					y: 150,
					x: 20
				}
			});
		};
		if (!($(".main-navigation.animated").length>0) && !Modernizr.touch && $(".main-navigation").length>0){
			$.notify({
				// options
				message: 'The animations of main menu are disabled.'
			},{
				// settings
				type: 'info',
				delay: 10000,
				offset : {
					y: 150,
					x: 20
				}
			}); // End Notify Plugin - The above code (from line 14) is used for demonstration purposes only

		};

         // FORGOT POST AJAXXXXX

         $(".forgot_pass").on("click",function() {



         	(async function getEmail () {
         		const {value: email} = await swal({
         			title: 'Input email address',
         			input: 'email',
         			inputPlaceholder: 'Enter your email address'
         		})

         		if (email) {

         			$.ajax({
         				type: "POST",
         				url: "http://localhost/bookstore/forgot_password",
         				dataType: 'json',
         				data: {value:email},
         				success: function(res) {

         					if(res=="false"){
         						swal({
         							type: 'error',
         							title: 'Oops...',
         							text: 'This email has been invalid',

         						})
         					}else if(res=="true"){

         						swal({
         							type: 'success',
         							title: 'Success',
         							text: 'Your email send to  random password',
         						})
         					}
         				}
         			});
         		}
         	})()
         	
         })


         // FORGO=PASSWORD END



 // **********************************************************

 var c = 0;
 $(".add_btn").on("click",function(){
 	if(c%2==0){
 		$(".book_list").css("display","block")

 	}else{
 		$(".book_list").css("display","none")
 	}
 	c++

 })


         // ADD TO BASKET AJAXXXXX

         $(".elements-list").on("click",".basket_btn",function(e){


         	e.preventDefault();
         	var $url = $(this).data("url");
         	var $bookid = $(this).data("bookid");

         	$.ajax({
         		type:"POST",
         		url:$url,
         		dataType:"json",
         		data:{bookid:$bookid},
         		success: function(data) {
         			if(data=="error"){
         				swal({
         					type: 'error',
         					title: 'Oops...',
         					text: 'Please,registered',

         				})
         			}else if(data=="dont_same"){
         				swal({
         					type: 'warning',
         					title: 'Oops...',
         					text: 'This product has been added',

         				})
         				// $(".book_list .table tbody").prepend("<tr><td>"+data.name+"</td> <td>"+data.price+"</td><td><button class = 'btn btn-sm btn-danger'>Remove</button></td></tr>"
         			}else{
         				$(".header-dropdown-buttons").html(data);

         				 $(".add_btn").on("click",function(){
 	if(c%2==0){
 		$(".book_list").css("display","block")

 	}else{
 		$(".book_list").css("display","none")
 	}
 	c++

 })


         			}
         		}

         	})




         })





         $(".header-dropdown-buttons").on("click",".book_remove",function(){
         	var $bookid = $(this).data("bookid");
         	var $url = $(this).data("url");
         	


         	$.ajax({
         		type:"POST",
         		url:$url,
         		dataType:"json",
         		data:{bookid:$bookid},
         		success: function(data) {
         			$(".tbody").html(data);

         		}
         	})


         })


    // END AJAXXXXX BASKET





	}); // End document ready

 })(this.jQuery);

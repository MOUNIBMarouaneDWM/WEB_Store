
addProduit();
liste_produit();
liste_category();
liste_category_produit();
prix_filter();
chercher();
login();


function liste_produit(){

    var Obj={
        action:'liste_produit'
    }


    $.ajax({
        method:'POST',
        url:'script.php',
        data:Obj,
        dataType:'json',
        async:true,
        success:function(data){

            $(data.produit).each(function(i,l){
                
                $('.produit_liste').append(`<div class="col-sm-4 col-lg-3 mb-4 col-produit">
                  
                <div class="card border_thick">
                    <img class="card-img-top produit_image"
                        src="${l.image}"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title title_produit">${l.name}</h5>
                        <input type="text" class="title_produit" id="titre_produit_${l.ref}" value="${l.name}" hidden >
                        <input type="text" class="id_produit" id="id_produit_${l.ref}" value="${l.ref}" hidden >
                    </div>
                  <div class="card-footer d-flex justify-content-between card_details">
                        <p value="">${l.prix}</p>
                        <input type="text" class="prix_produit" id="prix_produit_${l.ref}" value="${l.prix}" hidden>
                       
                        <div class="cart-button mt-3 px-3 d-flex justify-content-center align-items-center">
                <button class="btn btn-primary text-uppercase" onclick="addProduit(this,${l.ref})">Add to cart</button>
            </div>
                  </div>
                </div>
               
            </div>`);
        
        
        });

    

      

    }
    

});

}



function addProduit(e,id){


    var qte=1;
    var name="";
    var ref="";
    var prix="";


   name=$('#titre_produit_'+id).val();
    ref=$('#id_produit_'+id).val();
    prix=$('#prix_produit_'+id).val();


    var Obj={

            produit_ref:ref,
            produit_name:name,
            produit_prix:prix,
            produit_qte:qte

    }
    console.log(name);
    console.log(ref);
    console.log(prix);

    add_carte(Obj);
   

}


function add_carte(Obj){


    $.ajax({

        method:'POST',
        url:'script.php',
        data:Obj,
        dataType:'json',
        async:true,
        success:function(data){
            $('.carte tbody').empty();
          $.map(data,function(dt){
            $.each(dt,function(i,n){

                $('.carte tbody').append(`<tr id="id_${n.ref}" class="align-self-center" class="card_element">
                <th scope="row" class="w-50 p_name">${n['name']}</th> 
                <input class="p_ref" value="${n.ref}" hidden>
                <td class="p_prix" >${n.prix}</td>
                <input type="text" class="border rounded w-25 p_price" value="${n.prix}" hidden>
                <td><input type="number" name='qte' class="border rounded w-50 p_qte" name='quantity' value="${n.qte}" min="1"></td>
                <td><button type="button" class="btn btn-primary btn_remove" onclick="remove_el(this,${n.ref});">Remove</button></td>
                </tr>`);

            })
            
          })

     }
      
    });


}



function liste_category(){

    var Obj={
        action:'liste_category'
    } 

    $.ajax({
        method:'POST',
        url:'script.php',
        data:Obj,
        dataType:'json',
        async:true,
        success:function(data){
          $(data).each(function(i,l){

            $('.category_liste').append(`<a class="list-group-item list-group-item-action nom_category" id="list-profile-list" href="#list-profile" role="tab" aria-controls="profile">${l.name}<span class="badge badge-primary  ml-2 num_produit">${l.num_produit}</span><input class="id_category" value="${l.id_category}" hidden ></a>`);
           
          
          })

    }
    

    });

}

function liste_category_produit(){
   
        $(document).on("click",".nom_category", function(e){

            $('.produit_liste').empty();
                var Obj={
                    action:'liste_category_produit',
                    id_category:$(".id_category",this).val()
                } 
    
            $.ajax({
                url:'script.php',
                method:'POST',
                data:Obj,
                dataType:'json',
                async:true,
                success:function(data){
                    
                    $(data.produit).each(function(i,l){
                
                        $('.produit_liste').append(`<div class="col-sm-4 col-lg-3 mb-4 col-produit">
                  
                <div class="card border_thick">
                    <img class="card-img-top produit_image"
                        src="${l.image}"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title title_produit">${l.name}</h5>
                        <input type="text" class="title_produit" id="titre_produit_${l.ref}" value="${l.name}" hidden >
                        <input type="text" class="id_produit" id="id_produit_${l.ref}" value="${l.ref}" hidden >
                    </div>
                  <div class="card-footer d-flex justify-content-between card_details">
                        <p value="">${l.prix}</p>
                        <input type="text" class="prix_produit" id="prix_produit_${l.ref}" value="${l.prix}" hidden>
                       
                        <div class="cart-button mt-3 px-3 d-flex justify-content-center align-items-center">
                <button class="btn btn-primary text-uppercase" onclick="addProduit(this,${l.ref})">Add to cart</button>
            </div>
                  </div>
                </div>
               
            </div>`);
                
                
                });
                    
              }
        
            })
          
            
        });
    }



    function prix_filter(){

        $(".prix_down").on("click", function(e){

            $('.produit_liste').empty();

             var Obj={
                action:'prix_down'
                
            } 



        $.ajax({
        method:'POST',
        url:'script.php',
        data:Obj,
        dataType:'json',
        async:true,
        success:function(data){
            $(data).each(function(i,l){
                
                $('.produit_liste').append(`<div class="col-sm-4 col-lg-3 mb-4 col-produit">
                  
                <div class="card border_thick">
                    <img class="card-img-top produit_image"
                        src="${l.image}"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title title_produit">${l.name}</h5>
                        <input type="text" class="title_produit" id="titre_produit_${l.ref}" value="${l.name}" hidden >
                        <input type="text" class="id_produit" id="id_produit_${l.ref}" value="${l.ref}" hidden >
                    </div>
                  <div class="card-footer d-flex justify-content-between card_details">
                        <p value="">${l.prix}</p>
                        <input type="text" class="prix_produit" id="prix_produit_${l.ref}" value="${l.prix}" hidden>
                       
                        <div class="cart-button mt-3 px-3 d-flex justify-content-center align-items-center">
                <button class="btn btn-primary text-uppercase" onclick="addProduit(this,${l.ref})">Add to cart</button>
            </div>
                  </div>
                </div>
               
            </div>`);
        
        
        });

    }
    

});


        

    })


        $(".prix_up").on("click", function(e){

            $('.produit_liste').empty();

             var Obj={
                action:'prix_up'
                
            } 



        $.ajax({
        method:'POST',
        url:'script.php',
        data:Obj,
        dataType:'json',
        async:true,
        success:function(data){

            $(data).each(function(i,l){
                
                $('.produit_liste').append(`<div class="col-sm-4 col-lg-3 mb-4 col-produit">
                  
                <div class="card border_thick">
                    <img class="card-img-top produit_image"
                        src="${l.image}"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title title_produit">${l.name}</h5>
                        <input type="text" class="title_produit" id="titre_produit_${l.ref}" value="${l.name}" hidden >
                        <input type="text" class="id_produit" id="id_produit_${l.ref}" value="${l.ref}" hidden >
                    </div>
                  <div class="card-footer d-flex justify-content-between card_details">
                        <p value="">${l.prix}</p>
                        <input type="text" class="prix_produit" id="prix_produit_${l.ref}" value="${l.prix}" hidden>
                       
                        <div class="cart-button mt-3 px-3 d-flex justify-content-center align-items-center">
                <button class="btn btn-primary text-uppercase" onclick="addProduit(this,${l.ref})">Add to cart</button>
            </div>
                  </div>
                </div>
               
            </div>`);
        
        
        });

    }
    

});
        

    })

}
    
  function chercher(){

    $(document).on('click','.search-btn', function(){
        $('.produit_liste').empty();
        
        var Obj = {
            action:'chercher',
            nom:$('.search-txt').val()
        }
    
        $.ajax({
            type: 'POST',
            url: 'script.php',
            data: Obj,
            dataType: 'json',
            async: true,
            success: function (data) {

                $(data).each(function(i,l){
                
                    $('.produit_liste').append(`<div class="col-sm-4 col-lg-3 mb-4 col-produit">
                      
                    <div class="card border_thick">
                        <img class="card-img-top produit_image"
                            src="${l.image}"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title title_produit">${l.name}</h5>
                            <input type="text" class="title_produit" id="titre_produit_${l.ref}" value="${l.name}" hidden >
                            <input type="text" class="id_produit" id="id_produit_${l.ref}" value="${l.ref}" hidden >
                        </div>
                      <div class="card-footer d-flex justify-content-between card_details">
                            <p value="">${l.prix}</p>
                            <input type="text" class="prix_produit" id="prix_produit_${l.ref}" value="${l.prix}" hidden>
                           
                            <div class="cart-button mt-3 px-3 d-flex justify-content-center align-items-center">
                    <button class="btn btn-primary text-uppercase" onclick="addProduit(this,${l.ref})">Add to cart</button>
                </div>
                      </div>
                    </div>
                   
                </div>`)
                
    
            });

        }
        
    
    });
            
    
    })
    
    }  


    function login(){

            $('.login').on('click',function(e){
                var Obj={
            
                    action:'login',
                    email:$('#login-email').val(),
                    password:$('#password').val()
                
                }



                $.ajax({
                    method:'POST',
                    url:'script.php',
                    data:Obj,
                    dataType:'json',
                    async:true,
                    success:function(data){

                            
                            if(data.user_set=='true'){
                               $('.nom_login').removeAttr( "data-target" )
                                $('.nom_login').html(`${data.user}`)
                             
                            }
                            // else{
                                
                            //     $('.user_div').html('')
                            //     $('.login').show()
                            //     $('#loginModal .form_inputs').show()
                            //     $('.user_div').append(`<a class="dropdown-toggle account ml-n4 display-5 username" role="button" href="#" id="dropdownMenuLink"
                            //     data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            //     Account
                            // </a>
                            // <div class="dropdown-menu account_menu" aria-labelledby="dropdownMenuLink">
                            //     <a class="dropdown-item" data-toggle="modal" data-target="#loginModal"  href="#">Login</a>
                            //     <a class="dropdown-item" data-toggle="modal" data-target="#registerModal"  href="#">Register</a>
                            // </div>`)
                            // }
                        
                
                    }
                
                
                });
               
            
            });
        
        }
    
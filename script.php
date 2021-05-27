<?php
include 'phpScript/connection.php';

session_start();


// ! gestion de produit

if($_POST['action']=='liste_produit'){


  $stmt=$conn->query("select * from produit limit 12 ");

  $rows=$stmt->fetchAll(PDO::FETCH_ASSOC);
  $data['produit']=$rows;
  
  
}

if($_POST['action']=='liste_category'){

    
  $stmt=$conn->query("select c.name, c.id_category ,COUNT(pc.ref) num_produit 
  from category c,produit_category pc 
  WHERE c.id_category=pc.id_category 
  group by c.id_category 
  order by count(pc.ref) DESC 
  limit 8
  ");
  
  $rows=$stmt->fetchAll(PDO::FETCH_ASSOC);
  $data=$rows;
  
  
  }

  
if($_POST['action']=='liste_category_produit'){


  $cat_id=$_POST['id_category'];
  
  
  $stmt=$conn->query("select p.ref,p.name,p.prix,p.image from produit p ,produit_category pc 
                where p.ref=pc.ref and id_category='$cat_id' limit 12");
  
  $rows=$stmt->fetchAll(PDO::FETCH_ASSOC);
  $data['produit']=$rows;
  
      
      
  }

  // ! add to carte

  if (isset($_POST['produit_ref'])){

    $produit=array();
    $ref=$_POST['produit_ref'];

    $new_cmd=array(

        $ref=>array(

            'name'=>$_POST['produit_name'],
            'prix'=>floatval($_POST['produit_prix']),
            'qte'=>floatval($_POST['produit_qte'])
        )
    );
         array_push($produit,$new_cmd);
    
        $data=$produit;



}


// ! filter prix

if($_POST['action']=='prix_down'){

  $stmt=$conn->query("select * from produit order by prix asc limit 12 offset 15");
  
  $rows=$stmt->fetchAll(PDO::FETCH_ASSOC);
  $data=$rows;
  
  
}



if($_POST['action']=='prix_up'){

  $stmt=$conn->query("select * from produit order by prix desc limit 12 offset 32");
  
  $rows=$stmt->fetchAll(PDO::FETCH_ASSOC);
  $data=$rows;
  
  
}

if($_POST['action']=='chercher'){

  $nom=$_POST['nom'];
  $stmt=$conn->query("select * from produit where name like '%$nom%' limit 12");
  
  $rows=$stmt->fetchAll(PDO::FETCH_ASSOC);
  $data=$rows;
  
  
}

// ! Login

if($_POST['action']=='login'){
      

  if(!empty($_POST['email'] && !empty($_POST['password']))){
      
      $email=$_POST['email'];
      $pass=$_POST['password'];
      
      $stmt=$conn->query("select * from client where email='$email' and password='$pass'");
      $rows=$stmt->fetch(PDO::FETCH_ASSOC);

      
    
      if(!empty($rows['email']) && !empty($rows['password'])){

          $_SESSION['user']=$rows['firstname'];
         
         if(isset($_SESSION['user'])){
             
          $data['user_set']="true";
          $data['user']=$_SESSION['user'];

         }
                
      }   
  }

}




echo json_encode($data);

?>

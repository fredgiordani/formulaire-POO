<?php

    require_once('header.php');

    

?>

<form action="" method="POST">

<?php

   require_once('Form.php');
   require_once('Request.php');
   require_once('Check_input.php');

    $form = new Form( 
        [
            'nom' => '',
            'prenom' => '',
            'password'=> ''
        ]
    );

    if(isset($_POST) && !empty($_POST)){

        $post=$_POST;

        $request = new Request($post);
        $check_input = new Check_input($post);

        $check_input->check_input($post, 'nom',$check_input->error);
        $check_input->check_input($post, 'prenom',$check_input->error);
        $check_input->check_input($post, 'password',$check_input->error);
        var_dump($check_input->error);
        if(empty($check_input->error)){
        $request->db_insert($post);
        }    
    }

    
    echo $form->label('nom');
    echo $form->input('nom');
    if(isset($_POST) && !empty($_POST)){echo $check_input->display_warning('nom');}
    echo $form->label('prenom');
    echo $form->input('prenom');
    if(isset($_POST) && !empty($_POST)){echo $check_input->display_warning('prenom');}
    echo $form->label('password');
    echo $form->input('password');
    if(isset($_POST) && !empty($_POST)){echo $check_input->display_warning('password');}
    echo $form->button();
        
?>

</form>

<?php

    require_once('footer.php');
    
?>















    














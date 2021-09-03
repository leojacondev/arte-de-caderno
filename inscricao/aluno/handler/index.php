<?php
require_once '../../../components/dbConnection.php';
if($_SERVER['REQUEST_METHOD'] == "POST"){

    // Getting all person parameters:
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $sexo = $_POST['sexo'];
    $dNascimento = $_POST['dNascimento'];
    $instituicao = $_POST['instituicao'];
    $tipoInstituicao = $_POST['tipoInstituicao'];
    $cep = $_POST['cep'];
    $endereco = $_POST['endereco'];
    $num = $_POST['num'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];
    $celular = $_POST['celular'];

    // Getting all draw parameters:
    $categoria = $_POST['categoria'];
    $drawContent = $_POST['teste'];
    $content = json_encode($drawContent);

    $id = generateRandomString();
    $id2 = generateRandomString();
    $id3 = generateRandomString();
    $ownerid = generateRandomString();
    

    if(verificaUsuario($link, $cpf) == false) {
            
        if(uploadFile($_FILES['uploaded_file'], $id) == true) {

           $id_2 = "";
           $id_3 = "";
        if (cadastraUsuario($link, $ownerid, $nome, $email, $cpf, $sexo, $dNascimento, $instituicao, $tipoInstituicao, $cep, $endereco, $num, $bairro, $cidade, $uf, $celular, 1) == true) {
            cadastraObra($link, $nome, $id, $categoria, $content, $ownerid);
            

        if(isset($_FILES['upload_file_2'])) {
            uploadFile($_FILES['uploaded_file_2'], $id2);
            cadastraObra($link, $nome, $id2, $categoria, $content, $ownerid);
            $id_2= $id2;
        }

        if(isset($_FILES['upload_file_3'])) {
            uploadFile($_FILES['uploaded_file_3'], $id3); 
            cadastraObra($link, $nome, $id3, $categoria, $content, $ownerid);
            $id_3 = $id3;
        }

        header('location: /teste/inscricao/aluno/fim?success=true&user_id='. $ownerid .'&imgid='. $id .'&imgid2='. $id_2 .'&imgid3='. $id_3);
        
        } else {
            echo "erro no cad";
        }
    }

    } else {
        echo "aA";
        header('location: /teste/inscricao/aluno/fim?success=false&identifier=AEXST');
    }
}


function uploadFile($file, $filename) {
    $errors= array();
    $file_name = $file['name'];
    $ext = end((explode(".", $file_name)));
    $file_size =$file['size'];
    $file_tmp =$file['tmp_name'];
    $file_type= $file['type'];
    $file_ext= strtolower(end(explode('.',$file['name'])));
    $expensions= array("jpeg","jpg","png");

    $newname = $filename . "." . $ext;

        if(in_array($file_ext,$expensions)=== false){
            $errors[]="extension not allowed, please choose a JPEG or PNG file.";
        }

        if(empty($errors)==true){
            move_uploaded_file($file_tmp,"./uploads/".$newname);
            return true;
    }else{
            print_r($errors);
        }
}

function generateRandomString($length = 8) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


function verificaUsuario($link, $cpf) {

    $sql = "SELECT * FROM inscritos WHERE cpf = '" . $cpf ."'";
    $query = mysqli_query($link, $sql);

    if($query) {
        if(mysqli_num_rows($query) > 0) {
            return true;
        } else {
            return false;
        }
     }
     return true;
}

function cadastraUsuario($link, $ownerid, $nome, $email, $cpf, 
                        $sexo, $dNascimento, $instituicao, 
                        $tipoInstituicao, $cep, $endereco, 
                        $num, $bairro, $cidade, 
                        $uf, $celular, $enviados) 
{   
    $sql = "INSERT INTO inscritos(id, ownerid, 
    nome, email, cpf, sexo, dNascimento, instituicao, tipoInstituicao,
     cep, endereco, num, bairro, cidade, uf, celular, enviados) 
    VALUES('0', '". $ownerid ."', 
    '" . $nome ."', 
    '" . $email ."', 
    '" . $cpf ."', 
    '" . $sexo ."', 
    '" . $dNascimento ."', 
    '". $instituicao ."', 
    '" . $tipoInstituicao ."', 
    '" . $cep . "', 
    '" . $endereco . "', 
    '" . $num ."',
    '" . $bairro ."',
    '" . $cidade ."',
    '" . $uf ."',
    '" . $celular ."',
    '" . $enviados ."')";    

    $sql = mysqli_query($link, $sql);

    if($sql) {
        return true;
    }
}


function cadastraObra($link, $name, $id, $categoria, $content, $ownerid) {

    $sql = "INSERT INTO imagens(id, ownername, imageid, categoria, content, likes, ownerid) 
    VALUES('0', '". $name ."', 
    '" . $id ."',
    '" . $categoria ."', 
    '" . $content ."', '0', 
    '" . $ownerid ."')";    

    $sql = mysqli_query($link, $sql);

    if($sql) {
        return true;
    }

}



?>
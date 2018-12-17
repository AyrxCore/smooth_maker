"use strict";

$(document).ready(function(){

    $(".form").on('submit',verifMail);
    function verifMail(e){
        e.preventDefault();
        $(".alert").remove();
        var email = $("#email").val();
        var mdp = $("#password").val();

        if(email.length > 0 && mdp.length > 0){
            var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
            if(regex.test(email) == false){
                $('<div class="alert alert-danger" role="alert">Veuillez saisir un email correct</div>').insertAfter(".form");
            }else{
                $.ajax({
                    url: 'connexion.php',
                    method: 'post',
                    dataType: 'json',
                    data: {email: email, mdp: mdp},
                    success: function(data){
                        console.log(data);
                        if(data.result == true){
                            $(".test").html('<div class="alert alert-success" role="alert">'+ data.message +'<br><a href="liste.html">Afficher la liste des membres</a></div>');
                        }else{
                        $('<div class="alert alert-danger" role="alert">'+ data.message +'</div>').insertAfter(".form"); 
                        }
                    }
                });
            }
        }else{
            $('<div class="alert alert-danger" role="alert">Merci de remplir tous les champs</div>').insertAfter(".form"); 
        }
    }







});
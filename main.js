"use strict";

$(document).ready(function(){
    $(".menuMobile").on("click", function()
    {
        $(".navMobile").toggle()
        $(".menuMobile i").toggleClass("fas fa-times")
        $(".menuMobile i").toggleClass("fas fa-bars")
    })

    $(".form").on('submit',verifInfo);
    function verifInfo(e){
        e.preventDefault();
        
        $(".alert").remove();
        var email = $("#email").val();
        var mdp = $("#password").val();

        verifMail(email);

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

    $(".form1").on('submit', saveUser);
    function saveUser(e){
        var email = $("#mail").val();
        if(verifMail(email) == false){
            e.preventDefault();
            $('<div class="alert alert-danger" role="alert">Format du mail incorrect</div>').insertAfter(".form1"); 
        }
    }

    function verifMail(email){
        if(email.length > 0){
            var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
            if(regex.test(email) == false){
                return false;
            }
        }
    }

    $(".form2").on('submit', sendMessage);
    function sendMessage(){
        var email = $("#mail").val();
        if(verifMail(email) == false){
            e.preventDefault();
            $('<div class="alert alert-danger" role="alert">Format du mail incorrect</div>').insertAfter(".form1"); 
        }else{
            $(".test").html('<div class="alert alert-success" role="alert">Votre message a été envoyé<br><a href="liste.html">Afficher la liste des membres</a></div>');
        }
    }







});
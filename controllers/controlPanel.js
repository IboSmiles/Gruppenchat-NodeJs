$(".register_btn").click(function() {
    regName = $(".input_register_name").val();
    regEmail = $(".input_register_em").val();
    regUserid = $(".input_register_userid").val();
    regPw = $(".input_register_pw").val();

    regPw = md5(regPw);
    $.ajax({
        type: "POST",
        url: "index/registerAsMember/" + regName + "/" + regEmail + "/" + regUserid + "/" + regPw,
        success: function(data) {

        }
    })

})

$(".login_btn").click(function() {
    regUserid = $(".input_login_userid").val();
    regPw = $(".input_login_pw").val();
    console.log(regUserid + " /// " + regPw);
    $.ajax({
        type: "POST",
        url: "index/loginMember/" + regUserid + "/" + regPw,
        success: function(data) {
            alert(data);

            
        }
    })
})
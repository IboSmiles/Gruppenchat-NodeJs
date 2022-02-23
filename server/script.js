const socket = io("http://localhost:5500/");
socket.on("chat-message", data => {
    console.log(data);
})
var useridFull = $(".useridLoggedin").val();
console.log(useridFull);
if(useridFull == undefined){
    useridFull = "none";
}
    userid = useridFull.charAt(0).toUpperCase() +
    useridFull.slice(1);


selectedGroup = "";
socket.on("response-server-send-created-chat", data => {
    result = '<div class="chat" data-chat="' + data.params + '"><div class="messages">';
    youMe = "";
    for (let i = 0; i < data.result.length; i++) {

        const transmittor = data.result[i].transmittor;
        const message = data.result[i].message;
        const time = data.result[i].time;


        if (transmittor == userid) {
            youMe = "me";
            result = result + '<div class="transmittorChatMe"><b>You:</b></div><div class="bubble ' + youMe + '">' + message + ' <br> <span class="timeMessage">' + time + ' </span>  </div>';

        } else {
            youMe = "you";
            result = result + '<div class="transmittorChatYou"><b>' + transmittor + ': </b></div><div class="bubble ' + youMe + '">' + message + ' <br> <span class="timeMessage">' + time + ' </span>  </div>';

        }

    }
    result = "</div>" + result + "";
    $(".gorupchats").append(result);

})

$("li.person").click(function() {

    if ($(this).attr("data-gotclicked") != "true") {
        if ($(this).attr("data-chat") != "") {
            socket.emit("create-hole-chat", $(this).attr("data-chat"));
            socket.emit("join-room", $(this).attr("data-chat"));
            $(this).attr("data-gotclicked", "true");
        }

    } else {
        selectedGroup = $(this).attr("data-chat");
        //document.querySelector(".chat[data-chat=" + selectedGroup + "] .messages").scrollTo(0, document.querySelector(".chat[data-chat=" + selectedGroup + "] .messages").scrollHeight);
        $(this).removeClass("notActive");
        //socket.emit("send-to-room", { room: $(this).attr("data-chat"), send: userid });
    }



    let friends = {
            list: $('ul.people'),
            all: $('.left .person'),
            name: ''
        },
        chat = {
            container_chatroom: $('.container_chatroom .right .gorupchats'),
            current: null,
            person: null,
            name: $('.container_chatroom .right .gorupchats .top .name')
        }
    setAciveChat($(this));


    function setAciveChat(f) {
        $(friends.list).children(".active").removeClass('active');
        $(f).addClass('active');

        chat.current = $(chat.container_chatroom).children('.active-chat');
        chat.person = $(f).attr('data-chat');

        $(chat.current).removeClass('active-chat');
        $(chat.container_chatroom).children('.chat[data-chat="' + chat.person + '"]').addClass('active-chat');
        friends.name = $(f).children('.name').val();
        $('.top .name').html(selectedGroup);
    }

})

socket.on("sended", message => {
    console.log(message);
})

$("li.person").each(function(i) {
    $(this).click();
    $(".active").removeClass("active");
})


$(".send").click(function() {
    const sendInput = $(".send-information");
    const sendedUser = userid;
    timeObj = {
        01: 01,
        02: 02,
        03: 03,
        04: 04,
        05: 05,
        06: 06,
        07: 07,
        08: 08,
        09: 09,
        10: 10,
        11: 11,
        12: 12,
        13: 01,
        14: 02,
        15: 03,
        16: 04,
        17: 05,
        18: 06,
        19: 07,
        20: 08,
        21: 09,
        22: 10,
        23: 11,
        24: 12
    }
    date = new Date();

    if (date.getHours() <= 12) {
        time = timeObj[date.getHours()] + ":" + date.getMinutes() + "am";
    } else if (date.getHours() >= 13) {
        time = timeObj[date.getHours()] + ":" + date.getMinutes() + "pm";
    }

    //console.log(time);
    if (sendInput != "") {
        socket.emit("send-massage-in-rooms", { room: selectedGroup, name: sendedUser, message: sendInput.val(), time: time });
        $("li.person[data-chat=" + selectedGroup + "] > .time").html(time);
        $("li.person[data-chat=" + selectedGroup + "] > .preview").html("<b>You</b>: " + sendInput.val());
        result = '<div class="transmittorChatMe"><b>You: </b></div><div class="bubble me">' + sendInput.val() + ' <br> <span class="timeMessage">' + time + '   </span></div>';
        $(".chat[data-chat=" + selectedGroup + "] .messages").append(result);
        //scrollToBottom();
        document.querySelector(".chat[data-chat=" + selectedGroup + "] .messages").scrollTo(0, document.querySelector(".chat[data-chat=" + selectedGroup + "] .messages").scrollHeight);
        sendInput.val("");

    }
})

socket.on("send-massage-in-room", message => {
    //console.log(message.name + " / " + message.message + " / " + message.time + " / " + message.room);

    $("li.person[data-chat=" + message.room + "] > .time").html(message.time);
    $("li.person[data-chat=" + message.room + "] > .preview").html(message.name + ": " + message.message);
    if (selectedGroup != message.room) {
        $("li.person[data-chat=" + message.room + "]").addClass("notActive");
    }
    result = '<div class="transmittorChatYou"><b>' + message.name + ': </b></div><div class="bubble you">' + message.message + ' <br> <span class="timeMessage">' + message.time + '   </span></div>';
    $(".chat[data-chat=" + message.room + "]  .messages").append(result);
    document.querySelector(".chat[data-chat=" + selectedGroup + "] .messages").scrollTo(0, document.querySelector(".chat[data-chat=" + selectedGroup + "] .messages").scrollHeight);

})

$(".createGroup").click(function() {

    const goroupName = $(".createGorupName").val();
    $(".groupName").val(goroupName);
    $(".overlay_2").addClass("overlay_2Disable");
    socket.emit("get-all-members", "");
})
socket.on("send-all-members", message => {

    result = [];
    for (let i = 0; i < message.length; i++) {
        result[i] = message[i].userid;
    }
    restul = result.join(",");
    $(".membersToAdd").val(result);
})

$(".createGroupWithMembers").click(function() {
    goroupName = $(".groupName").val();
    members = $(".membersToAdd").val();  
    socket.emit("create-group", { name: goroupName, members: members });
    $(".overlay_2").removeClass("overlay_2Disable");
    window.location.replace("loggedin");
});

$(".join-groups-btn").click(function () {
    
})

socket.on("user-and-groups", message => {
    members = message.u.members.split(",");
    groups = message.uag;
    console.log(groups);
    // members.filter(function (value, index, self) { 
    //     return self.indexOf(value) === index;
    //   });
       console.log(members)
    members.forEach(mem => {
        sql = `UPDATE members SET groups = '${groups[mem]},${message.u.name}' WHERE userid = '${mem}'`;
        socket.emit("update-members-group", sql);
    });
})

$(".send-information").keydown(function() {
    var x = event.key;
    if (x == "Enter") {
        $(".send").click();
    }
});

$(".input_login_userid").keydown(function() {
    var x = event.key;
    if (x == "Enter") {
        $(".login_btn").click();
    }
});
$(".input_login_pw").keydown(function() {
    var x = event.key;
    if (x == "Enter") {
        $(".login_btn").click();
    }
});
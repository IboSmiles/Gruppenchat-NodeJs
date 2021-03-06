const express = require("express");
const port =  5500;
// process.env.PORT ||
var http = require("http");
const app = express();
var server = http.Server(app);
const mysql = require("mysql");
const io = require("socket.io")(port);
const database = "ibrahimoezkan-sitedb";
const db = mysql.createConnection({
    host: "159.203.74.148",
    user: "ibrahimoezkan-sitedbuser",
    password: "lE2bHJtBkb36wynYXe",
    database: "ibrahimoezkan-sitedb"
});

db.connect((err) => {
    if (err) {
        throw err;
    } else {
        console.log("Mysql connected");
    }

});


function createHoleChats(params) {
    tolower = params.toLowerCase();
    let sql = `SELECT transmittor,message,time FROM ${database}.${tolower}`;
    db.query(sql, (err, result) => {
        if (err) throw err;

        io.emit("response-server-send-created-chat", { result, params });
    })

}


function insertInDatabase(message) {
    data = { transmittor: message.name, message: message.message, time: message.time };
    const messageRoom = message.room.toLowerCase();
    let sql = `INSERT INTO ${messageRoom} SET ?`;
    let query = db.query(sql, data, (err, result) => {
        if (err) throw err;
    })
}



function getGroups(sql,message) {
    db.query(sql, (err, result) => {
        if (err) {
            throw err
        }
        groupsArr = {};
        result.forEach(group => {
            groupsArr[group.userid] = group.groups;
        });
        console.log(groupsArr)
        io.emit("user-and-groups",{uag:groupsArr,u:message});
    });
}

function addMember(message) { 
    console.log(message);
    members = message.members.split(",");
    console.log(message.name);
    count = 0;
   
    sql2 = "SELECT groups,userid FROM members";
    count = 1;
    members.forEach(mem => {
        if (count == 1) {
            sql2 = sql2 + " WHERE userid = '" + mem + "'";
        } else {
            sql2 = sql2 + " OR userid = '" + mem + "'";
        }
        count++;

    });
    groupsArr2 = getGroups(sql2,message);

    // result.forEach(group => {
    //     groupsArr[group.userid] = group.groups;
    // });      
    // console.log(result);
}

io.on('connection', socket => {
    socket.emit("chat-message", "Hellof World");
    socket.on("send-to-room", message => {
        socket.broadcast.to(message.room).emit("sended", message.send);
    });
    socket.on("create-hole-chat", message => {
        createHoleChats(message);
        //socket.broadcast.to("Ibo").emit("sended","It work");
        return true;
    });
    socket.on("join-room", message => {
        socket.join(message);
        return true;
    });
    socket.on("send-massage-in-rooms", message => {
        insertInDatabase(message);
        socket.broadcast.to(message.room).emit("send-massage-in-room", { room: message.room, name: message.name, message: message.message, time: message.time });
    })
    socket.on("get-all-members", message => {
        let sql = "SELECT userid FROM members";
        db.query(sql, (err, result) => {
            if (err) throw err;
            socket.emit("send-all-members", result);
        })
    })

    socket.on("create-group", message => {
        tableNameLowecase = message.name.toLowerCase();
        let sql = `CREATE TABLE if not exists ${database}.${tableNameLowecase} ( id INT(11) NOT NULL AUTO_INCREMENT , transmittor VARCHAR(60) NOT NULL , message TEXT NOT NULL , time VARCHAR(50) NOT NULL , PRIMARY KEY (id))`;

        db.query(sql, (err, result) => {
            if (err) throw err;
            console.log("Created....");
            addMember(message);
        })
    })

    socket.on("join-group-btn",message => {
        addMember(message);
    })

    socket.on("update-members-group",message => {
        db.query(message, (err, result) => {
            if (err) throw err;

            console.log("User added ...");
        });  
    })

})








// Create connection




// app.get("/", (req, res) => {
//     res.send("Hallo Welt");
// });


// app.listen(port);
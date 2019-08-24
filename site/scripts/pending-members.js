function getHash()
{
    let admin_password = window.prompt("You must enter admin password to continue (warning: cleartext)");
    if(!admin_password) {
        window.alert("Invalid Password");
        return "";
    }
    return md5(admin_password);
}

function loadPendingMembersTable()
{
        let hash = getHash();
        if(hash=="") return;
        var env = new nunjucks.Environment(new nunjucks.WebLoader('/site/components'));
        var template = env.getTemplate('pending-member-row.njk');
        let network = GraphJSConfig.host; // "https://accounts-dev.graphjs.com"; // GraphJSConfig.host;
        let graphjs_id = GraphJSConfig.id;
        var members = [];
        minAjax({
            url: network+"/getPendingMemberships",
            type: "GET",
            data: {
                "public_id": graphjs_id,
                "hash": hash
            },
            success: function(data){
                console.log("success");
                data = JSON.parse(data);
                if(data.success)
                {
                    let table = $("#members-list");
                    members = Object.values(data.members);
                    members.forEach(function (member) {
                        table.append(
                             nunjucks.render( template, { "member": member} )
                        );
                    }); 
                }
                else {
                    alert("Wrong Password or a temporary server issue. Please try again later.");
                }
            },
            errorCallback: function(){
                alert("Wrong Password or a temporary server issue. Please try again later.");
            }
        });
}

function acceptPendingMember(id)
{
    let hash = getHash();
    if(hash=="") return;
    let network = GraphJSConfig.host; // "https://accounts-dev.graphjs.com"; // GraphJSConfig.host;
    let graphjs_id = GraphJSConfig.id;
    minAjax({
        url: network+"/approveMembership",
        type: "GET",
        data: {
            "public_id": graphjs_id,
            "hash": hash,
            "member_id": id
        },
        success: function(data){
            console.log("success");
            data = JSON.parse(data);
            if(data.success)
            {
                $("#member-"+id).addClass("d-none");
                alert("Success");
                return;
            }
            alert("Failure");
        },
        errorCallback: function(){
            alert("Wrong Password or a temporary server issue. Please try again later.");
        }
    });
}


function rejectPendingMember(id)
{
    console.log("hello");
    let hash = getHash();
    if(hash=="") return;
    let network = GraphJSConfig.host; // "https://accounts-dev.graphjs.com"; // GraphJSConfig.host;
    let graphjs_id = GraphJSConfig.id;
    minAjax({
        url: network+"/deleteMember",
        type: "GET",
        data: {
            "public_id": graphjs_id,
            "hash": hash,
            "id": id
        },
        success: function(data){
            console.log("success");
            data = JSON.parse(data);
            if(data.success)
            {
                $("#member-"+id).addClass("d-none");
                alert("Success");
                return;
            }
            alert("Failure");
        },
        errorCallback: function(){
            alert("Wrong Password or a temporary server issue. Please try again later.");
        }
    });
}
function getHash()
{
    let admin_password = window.prompt("You must enter admin password to continue (warning: cleartext)");
    if(!admin_password) {
        window.alert("Invalid Password");
        return "";
    }
    return md5(admin_password);
}
function loadMemberAdministrationTable()
{
        //console.log("begin");
        var env = new nunjucks.Environment(new nunjucks.WebLoader('/site/components'));
        var template = env.getTemplate('member-table-row.njk');
        let network = GraphJSConfig.host; // "https://accounts-dev.graphjs.com"; 
        let graphjs_id = GraphJSConfig.id;
        var members = [];
        minAjax({
            url: network+"/getMembers",
            type: "GET",
            data: {
                "public_id": graphjs_id,
                "offset": 0,
                "limit": 10000 // CHANGE ME
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
            },
            errorCallback: function(){
                alert("Wrong Password or a temporary server issue. Please try again later.");
            }
        });
}

function kickMember(id)
{
    if(!confirm("Please note when you kick a member, they will not be notified. DM them beforehand if you'd like to let them know. Do you still want to continue?")) 
        return;
    let hash = getHash();
    if(hash=="") return;
    let network = GraphJSConfig.host; /// "https://accounts-dev.graphjs.com"; // GraphJSConfig.host;
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


function setEditor(id, mode)
{
    let hash = getHash();
    if(hash=="") return;
    let network = GraphJSConfig.host; ///"https://accounts-dev.graphjs.com"; // GraphJSConfig.host;
    let graphjs_id = GraphJSConfig.id;
    minAjax({
        url: network+"/setBlogEditor",
        type: "GET",
        data: {
            "public_id": graphjs_id,
            "hash": hash,
            "user_id": id,
            "is_editor": mode
        },
        success: function(data){
            console.log("success");
            data = JSON.parse(data);
            if(data.success)
            {
                switch(mode)
                {
                    case 1:
                            $("#grant-"+id).addClass('d-none');
                            $("#revoke-"+id).removeClass('d-none');
                        
                        break;
                    default:
                            $("#grant-"+id).removeClass('d-none');
                            $("#revoke-"+id).addClass('d-none');
                        break;
                }
                // do something in the UI
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
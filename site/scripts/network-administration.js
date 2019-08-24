/*
	 This script file contains functions that only work on Settings page.
*/

function loadNetworkSettings()
{
        let network = GraphJSConfig.host; // "https://accounts-dev.graphjs.com"; // GraphJSConfig.host;
        let graphjs_id = GraphJSConfig.id;
        minAjax({
            url: network+"/getAllModes",
            type: "GET",
            data: {
                "public_id": graphjs_id
            },
            //CALLBACK FUNCTION with RESPONSE as argument
            success: function(data){
                data = JSON.parse(data);
                if(data.success)
                {
                    $("#network_is_public")[0].checked = data.membership_moderated;
                    $("#network_let_anyone_post")[0].checked = !data.read_only;
                }
            }
        
        });
}

function saveNetworkAdministration()
{
    let admin_password = window.prompt("You must enter admin password to continue (warning: cleartext)");
    if(!admin_password) {
        window.alert("Invalid Password");
        return;
    }
    $("#save-button").addClass('d-none');
    $("#loading-button").removeClass('d-none');
    let hash = md5(admin_password);
    // let is_open = $("#network_is_open")[0].checked;
    let is_public = $("#network_is_public")[0].checked ? 1 : 0;
    let is_readonly = !$("#network_let_anyone_post")[0].checked ? 1 : 0;
    let network = GraphJSConfig.host; // "https://accounts-dev.graphjs.com"; // GraphJSConfig.host;
    let graphjs_id = GraphJSConfig.id;
    console.log("about to query");
    minAjax({
        url: network+"/setAllModes",
        type: "GET",
        data: {
            "public_id": graphjs_id,
            "read_only": is_readonly,
            "verification_required": false,
            "membership_moderated": is_public,
            "hash": hash
        },
        //CALLBACK FUNCTION with RESPONSE as argument
        success: function(data){
            data = JSON.parse(data);
            $("#save-button").removeClass('d-none');
            $("#loading-button").addClass('d-none');
            if(!data.success) {
                $(".alert-danger").removeClass('d-none');
                loadNetworkSettings();
                return;
            }
            $(".alert-success").removeClass('d-none');
        },
        
        errorCallback: function(){
            $("#save-button").removeClass('d-none');
            $("#loading-button").addClass('d-none');
            $(".alert-danger").removeClass('d-none');
            loadNetworkSettings();
        }
    
      });
}
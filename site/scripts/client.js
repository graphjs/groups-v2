/*
	 This script file contains functions that work product-wide.
*/

var showAdministrationOptions = function() {
    if (localStorage.getItem("username")=="admin") {
        document.body.classList.add("admin");
    }
    else {
        document.body.classList.remove("admin");
    }
};

var checkLogin = function() {
    window.GraphJS.getSession(function(response) {
        if(response.success) {
            document.body.classList.add('logged');
            showAdministrationOptions();
        }
        else {
            document.body.classList.remove('logged');
            document.body.classList.remove("admin");
        }
    });
}

var getParameters = function(parameter) {
    var vars = {};
    window.location.href.replace( location.hash, '' ).replace(
        /[?&]+([^=&]+)=?([^&]*)?/gi, // regexp
        function( m, key, value ) { // callback
            vars[key] = value !== undefined ? value : '';
        }
    );
    return parameter ? vars[parameter] : vars;
}

var addAttributes = function(reference, attributes) {
    var target = document.querySelector('[data-reference="' + reference + '"]');
    var parameters = getParameters();
    for(var i = 0; i < attributes.length; i++) {
        target.setAttribute(attributes[i], parameters[attributes[i]]);
    }
}
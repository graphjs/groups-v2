var checkLogin = function() {
    window.GraphJS.getSession(function(response) {
        if(response.success) {
            document.body.classList.add('logged');
        }
        else {
            document.body.classList.remove('logged');
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
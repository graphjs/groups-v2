/*
	 This script file contains functions that only work on Settings page.
*/

// ### DEFAULTS

var defaultTheme = 'light';
var defaultColors = {
    light: {
        primaryColor: '6f879f',
        textColor: '3f5f7f',
        backgroundColor: 'ffffff'
    },
    dark: {
        primaryColor: '6f879f',
        textColor: 'ffffff',
        backgroundColor: '474747'
    }
};

// ### INITIATE

var initiateSettings = function() {
    var theme = document.body.classList.contains('dark') ? 'dark' : 'light';
    var form = document.getElementById('general-settings');
    var primaryColorInput = document.querySelector('input.primary-color');
    primaryColorInput.value = window.GraphJSConfig.theme.primaryColor || defaultColors[theme].primaryColor;
    var textColorInput = document.querySelector('input.text-color');
    textColorInput.value = window.GraphJSConfig.theme.textColor || defaultColors[theme].textColor;
    var backgroundColorInput = document.querySelector('input.background-color');
    backgroundColorInput.value = window.GraphJSConfig.theme.backgroundColor || defaultColors[theme].backgroundColor;
    var themeInput = document.querySelector('input.theme');
    document.body.classList.contains('dark') && themeInput.setAttribute('checked', 'checked');
}

// ### EDIT TITLE

var changeTitle = function(event) {
    var title = document.querySelector('.groups-brand');
    title.innerHTML = event.target.value;
}

// ### EDIT THEME

var changeTheme = function(event) {
    var theme = event.target.checked ? 'dark' : 'light';
    updateGraphJSTheme(theme);
    updateGroupsTheme(theme);
}

var updateGraphJSTheme = function(theme) {
    var config = window.GraphJSConfig;
    config.textColor = defaultColors[theme].textColor;
    config.backgroundColor = defaultColors[theme].backgroundColor;
    window.GraphJS.init(config.id, config);
}

var updateGroupsTheme = function(theme) {
    document.body.classList.remove('dark');
    document.body.classList.remove('light');
    document.body.classList.add(theme);
}

// ### EDIT COLORS

var changeColor = function(event) {
    // Set color object
    var newColor = {
        [event.target.name]: event.target.value
    };
    // Update GraphJS colors
    updateGraphJSColors(newColor);
    // Update Grou.ps color
    updateGroupsColor(newColor);
}

var updateGraphJSColors = function(settings) {
    var config = window.GraphJSConfig;
    config.color = settings.primaryColor || config.color;
    var keys = Object.keys(settings);
    for(var i = 0; i < keys.length; i++) {
        config.theme[keys[i]] = settings[keys[i]];
    }
    window.GraphJS.init(config.id, config);
}

var updateGroupsColor = function(settings) {
    if(settings.primaryColor) {
        var navigation = document.querySelector('.groups-navigation');
        navigation.style.backgroundColor = settings.primaryColor;
    } else if(settings.textColor) {
        document.body.style.color = settings.textColor;
    }
}
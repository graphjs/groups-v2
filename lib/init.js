module.exports = function (
    id,
    primaryColor = 'rgb(111, 135, 159)',
    textColor = 'rgb(63, 95, 127)',
    backgroundColor = 'white',
    host = '',
    streamHost = ''
) {
    if (id === undefined) {
        throw Error('id is required');
    }

    let hostParam = '';
    let streamHostParam = '';
    if (host) {
        hostParam = `host: '${host}',`;
    }
    if (streamHost) {
        streamHostParam = `streamHost: '${streamHost}', streamId: '${id.toUpperCase()}',`;
    }
    initScript = `
        GraphJS.init('${id}', {
            ${hostParam}
            ${streamHostParam}
            theme: {
                primaryColor: '${primaryColor}',
                textColor: '${textColor}',
                backgroundColor: '${backgroundColor}',
            },
        });
    `;
    return initScript;
};

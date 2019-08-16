const nunjucks = require('nunjucks');

module.exports = async function (req, res) {
    if(process.env.REDIRECT!=undefined) {
        res.redirect(process.env.REDIRECT);
        return;
    }

    const query = req.query;

    if (query.cookies) {
        const cookies = JSON.parse(query.cookies);
        for (cookieName in cookies) {
            res.cookie(cookieName, cookies[cookieName], {});
        }
    }

    nunjucks.configure(__dirname + '/site/templates', { autoescape: true });

    const goal = 'show';
    const publicId = 'CAA40AD1-8DF1-4E26-8ECF-CC32A8EAA8C7'; // query.public_id || 'CAA40AD1-8DF1-4E26-8ECF-CC32A8EAA8C7'; // || '79982844-6a27-4b3b-b77f-419a79be0e10';
    const primaryColor = '#6f879f';
    const textColor = '#3f5f7f';
    const backgroundColor = '#ffffff';
    const host = "https://gjs-singlesignon.herokuapp.com";
    const streamHost = "";
    const theme = "light";
    const moduleForum = "off";
    const moduleGroups = "off";
    const extraHead = "";
    
    let page = query.page;
    if (! page) {
        return res.send('page parameter is missing');
    }
    page += '.njk';
    res.send(
        nunjucks.render(
            page,
            {
                name: 'uxlovers',
                goal,
                brand: 'Sample Page',
                about: 'Sample Page is a sample Grou.ps site.',
                public_id: publicId,
                primary_color: primaryColor,
                text_color: textColor,
                background_color: backgroundColor,
                host,
                theme,
                stream_host: streamHost,
                module_forum: moduleForum,
                module_groups: moduleGroups
            }
        )
    );
};


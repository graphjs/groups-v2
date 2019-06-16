const fs = require('fs');
const nunjucks = require('nunjucks');
const fn = require('./functions');
const git = require('simple-git/promise');

class FileGeneration {

    constructor(
        dir, name, title,
        theme = 'light',
        publicId = null,
        primaryColor = null,
        textColor = null,
        backgroundColor = null,
        host = null,
        streamHost = null,
        remoteUrl = '',
        description = '',
        extraHead = '',
        moduleForum = 'off',
        moduleGroups = 'off'
    ) {
        this.publicId = '79982844-6a27-4b3b-b77f-419a79be0e10';
        this.primaryColor = 'rgb(111, 135, 159)';
        this.textColor = 'rgb(63, 95, 127)';
        this.backgroundColor = 'white';
        this.host = '';
        this.streamHost = '';

        this.dir = dir;
        this.name = name;
        this.title = title;
        this.description = description;
        this.theme = theme;
        this.remoteUrl = remoteUrl;
        if (publicId !== null) this.publicId =  publicId;
        if (primaryColor !== null) this.primaryColor = primaryColor;
        if (textColor !== null) this.textColor = textColor;
        if (backgroundColor !== null) this.backgroundColor = backgroundColor;
        if (host !== null) this.host = host;
        if (streamHost !== null) this.streamHost = streamHost;
        
        this.moduleForum = (moduleForum === "on") ? "on" : "off"; // otherwise keep it off
        this.moduleGroups = (moduleGroups === "on") ? "on" : "off"; // otherwise keep it off
        this.extraHead = extraHead;
    }

    async generate(regen = false) {
        const dir = this.dir;
        const name = this.name;
        const title = this.title;
        const description = this.description;
        const theme = this.theme;
        const publicId = this.publicId;
        const primaryColor = this.primaryColor;
        const textColor = this.textColor;
        const backgroundColor = this.backgroundColor;
        const host = this.host;
        const streamHost = this.streamHost;
        const moduleForum = this.moduleForum; 
        const moduleGroups = this.moduleGroups; 
        const extraHead = this.extraHead;

        nunjucks.configure(dir, { autoescape: true });

        const goal = 'generate';

        const site = __dirname + '/../dist/' + name;
        if (! regen) {
            if (await fn.fs.exists(site)) {
                throw Error('There is an existing folder in: ' + site);
            }
        }
        else if (await fn.fs.exists(site + '/CUSTOM')) { // regen but CUSTOM
            throw Error("This is a custom folder, won't continue: " + site);
        }
        else if (await fn.fs.exists(site)) {
            await fn.fs.unlink(site + '.html');
            await this.cleanupDir(site);
        }
        if (! await fn.fs.exists(site)) {
            await fn.fs.mkdir(site);
        }
        const files = await fn.fs.readdir(dir);
        for (const file of files) {
            if (
                file != '.' && file != '..'
                && file != 'template.njk'
                && file.length > 4
                && file.slice(-4) == '.njk'
            ) {
                const page = file.slice(0, -4);
                const html = page + '.html';
                await fn.fs.writeFile(
                    site + '/' + html,
                    nunjucks.render(file, {
                        goal,
                        public_id: publicId,
                        brand: title,
                        about: description,
                        primary_color: primaryColor,
                        text_color: textColor,
                        background_color: backgroundColor,
                        host,
                        stream_host: streamHost,
                        theme,
                        name,
                        extra_head: extraHead,
                        module_forum: moduleForum,
                        module_groups: moduleGroups
                    }),
                );
            }
        };
        // homepage
        await fn.fs.copyFile(site + '/home.html', site + '.html');

        const init = require('../lib/init');
        const initOutput = init(publicId, primaryColor, textColor, backgroundColor, host, streamHost);
        const packed = initOutput;
        const jsFilePath = site + '/' + 'init.js';
        await fn.fs.writeFile(jsFilePath, packed);

        const remoteUrl = this.remoteUrl;
        const remoteName = 'origin';

        const repo = git(site);
        if (! regen) {
            // new generated site is always git repo
            await repo.init();
            await repo.addConfig('user.email', 'business@groups-inc.com');
            await repo.addConfig('user.name', 'system');
            await repo.add('--all');
            await repo.commit(Date.now() / 1000 | 0);
            if (remoteUrl) {
                await repo.addRemote(remoteName, remoteUrl);
                await repo.push(remoteName, 'master');
            }
        } else {
            // old generated site might not be git repo
            if (await fn.fs.exists(`${site}/.git`)) {
                await repo.commit(Date.now() / 1000 | 0, [], { '-a': null });
                if (remoteUrl) {
                    const remotes = await repo.getRemotes();
                    if (remotes.findIndex(remote => remote.name === remoteName) > -1) {
                        await repo.removeRemote(remoteName);
                    }
                    await repo.addRemote(remoteName, remoteUrl);
                    await repo.push(remoteName, 'master');
                }
            }
        }
    }

    async cleanupDir(path) {
        const files = await fn.fs.readdir(path);
        for (const fileName of files) {
            if (fileName === '.git') {
                continue;
            }
            const file = `${path}/${fileName}`;
            (await fn.fs.lstat(file)).isDirectory()
                ? await this.cleanupDir(file)
                : await fn.fs.unlink(file);
        };
    }
}

module.exports = FileGeneration;

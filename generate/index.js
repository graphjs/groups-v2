const path = require('path');
const crypto = require('crypto');
const fs = require('fs');
const executable = require('executable');
const child_process = require('child_process');
const FileGeneration = require('../lib/FileGeneration');
const fn = require('../lib/functions');

module.exports = async function (req, res) {

    const rootPath = path.dirname(__dirname);
    const dir = rootPath + '/site/templates';
    const body = req.body;
    const q = req.query;

    const name = q.name || body.name || null;
    const title = q.title || body.title || null;
    const description = q.description || body.description || '';
    const remoteUrl = q.git || body.git || '';
    const publicId = q.public_id || body.public_id || null;
    const theme = q.theme || body.theme || null;
    const textColor = q.text_color || body.text_color || null;
    const backgroundColor = q.background_color || body.background_color || null;
    const primaryColor = q.primary_color || body.primary_color || null;
    const host = q.host || body.host || null;
    const streamHost = q.stream_host || body.stream_host || null;
    const secret = q.secret || body.secret || null;
    const regen = q.regen || body.regen || false;
    const moduleForum = q.module_forum || body.module_forum || false;
    const moduleGroups = q.module_groups || body.module_groups || false;
    const extraHead = q.extra_head || body.extra_head || '';

    if (! name || ! title || ! publicId) {
        res.setHeader('Content-Type', 'application/json');
        return res.send(JSON.stringify({
            success: false,
            message: 'name, title, public_id are required',
        }));
    }

    if (crypto.createHash('md5').update(name + process.env.SALT).digest('hex') != secret) {
        res.setHeader('Content-Type', 'application/json');
        return res.send(JSON.stringify({
            success: false,
            message: 'not authorized',
        }));
    }

    const backupScript = process.env.BACKUP_SCRIPT;
    if (
        backupScript
        && await fn.fs.exists(backupScript)
        && await executable(backupScript)
    ) {
        await fn.child_process.execFile(backupScript);
    }

    // actual file generation takes place here.
    await (new FileGeneration(
        dir, name, title, theme, publicId, primaryColor,
        textColor, backgroundColor, host, streamHost,
        remoteUrl, description, extraHead, moduleForum, moduleGroups
    )).generate(regen);

    res.setHeader('Content-Type', 'application/json');
    res.send(JSON.stringify({
        success: true,
        message: 'Generated',
    }));
};

const util = require('util');
const child_process = require('child_process');
const fs = require('fs');

const execFile = util.promisify(child_process.execFile);
const unlink = util.promisify(fs.unlink);
const mkdir = util.promisify(fs.mkdir);
const readdir = util.promisify(fs.readdir);
const writeFile = util.promisify(fs.writeFile);
const copyFile = util.promisify(fs.copyFile);
const rmdir = util.promisify(fs.rmdir);
const lstat = util.promisify(fs.lstat);

const exists = function (path) {
    return new Promise(function (resolve, reject) {
        fs.access(path, fs.constants.F_OK, err => {
            if (err) {
                resolve(false);
            }
            else {
                resolve(true);
            }
        });
    });
};

module.exports = {
    fs: {
        unlink, mkdir, readdir, writeFile, copyFile, rmdir, lstat, exists,
    },
    child_process: {
        execFile,
    }
};


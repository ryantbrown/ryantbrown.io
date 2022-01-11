#!/usr/bin/node
import fs from 'fs-extra';
import * as dotenv from 'dotenv';
import tinify from 'tinify';
import { execSync } from 'child_process';
import * as minifier from 'html-minifier';
import { resolve } from 'path';

dotenv.config();
tinify.key = process.env.TINY_KEY?.toString();

(async () => {
    console.log('Clearing Old Build....');
    execSync('rimraf dist', { stdio: 'inherit' });
    await fs.ensureDir(resolve('dist'));
    await fs.ensureDir(resolve('dist/assets'));

    console.log('Building Styles....');
    execSync('npx tailwindcss -i src/style.css -o dist/style.css --minify', {
        stdio: 'inherit',
    });

    console.log('Building Images....');
    fs.readdirSync('src/assets').forEach((file) => {
        tinify.fromFile(`src/assets/${file}`).toFile(`dist/assets/${file}`);
    });

    console.log('Building HTML....');
    let html = fs.readFileSync(resolve('src/index.html'), 'utf-8');
    html = html.replace('../dist/', '');
    fs.writeFileSync(resolve(`dist/index.html`), html);
})();

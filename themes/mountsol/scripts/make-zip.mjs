import archiver from 'archiver';
import { createWriteStream, readdirSync, statSync } from 'fs';
import { join, relative } from 'path';
import { fileURLToPath } from 'url';

const __dirname = fileURLToPath(new URL('.', import.meta.url));
const themeDir = join(__dirname, '..');
const outZip = join(themeDir, 'mountsol-theme.zip');

const skipDirs = new Set(['node_modules', '.git', '.cursor']);
const skipFiles = new Set(['mountsol-theme.zip']);

function addTree(archive, absPath, destPrefix) {
	for (const name of readdirSync(absPath)) {
		if (skipDirs.has(name)) {
			continue;
		}
		const full = join(absPath, name);
		const rel = relative(themeDir, full).replace(/\\/g, '/');
		if (skipFiles.has(name)) {
			continue;
		}
		if (statSync(full).isDirectory()) {
			addTree(archive, full, destPrefix);
		} else {
			archive.file(full, { name: `${destPrefix}/${rel}` });
		}
	}
}

const output = createWriteStream(outZip);
const archive = archiver('zip', { zlib: { level: 9 } });

archive.on('warning', (err) => {
	if (err.code !== 'ENOENT') {
		throw err;
	}
});
archive.on('error', (err) => {
	throw err;
});

archive.pipe(output);
addTree(archive, themeDir, 'mountsol');

archive.finalize().then(() => {
	console.log(`Wrote ${outZip}`);
});

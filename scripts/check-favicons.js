import fs from "node:fs";
import path from "node:path";

const publishDir = process.argv[2] || "public";
const required = [
  "favicon.ico",
  "favicon-32x32.png",
  "favicon-48x48.png",
  "apple-touch-icon.png",
  "site.webmanifest",
];

const missing = required.filter((name) => {
  const fullPath = path.join(publishDir, name);
  return !fs.existsSync(fullPath) || fs.statSync(fullPath).size === 0;
});

if (missing.length > 0) {
  console.error(`Missing favicon assets in ${publishDir}: ${missing.join(", ")}`);
  process.exit(1);
}

console.log(`Favicon assets present in ${publishDir}.`);

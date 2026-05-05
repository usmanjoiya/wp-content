# MountSol WordPress theme

Hybrid classic theme for [mountsol.org](https://mountsol.org), kept in sync with the `Mountsol.org/` Next.js reference in this repo.

## Install (ZIP)

1. From the theme folder, run `npm run zip` (installs dev deps if needed, rebuilds CSS, writes `mountsol-theme.zip`).
2. In WordPress: **Appearance → Themes → Add New → Upload Theme**, choose the ZIP.
3. Activate **MountSol**.
4. **Settings → Permalinks**: choose **Post name** (or any structure that yields `/features/…`, `/industries/…`, etc.).
5. **Settings → Reading**: set **Homepage** to the **Home** page (slug `home`) so `front-page.php` is used. Leave the posts page unset or set as needed.

Re-activating the theme **creates missing pages only** (idempotent): `home`, `about`, `contact`, `demo`, `resources`, `pricing`, `login`, `features` with 8 children, `industries` with 8 children. Existing pages with the same slug and parent are left unchanged.

Optional: add `add_filter( 'mountsol_seed_assign_front_page', '__return_true' );` in a small custom plugin or `functions.php` child theme snippet to auto-assign the seeded **Home** as the static front page (off by default).

## CSS build (included in ZIP)

Source files live under `assets/src/`:

- `input.css` — PostCSS entry (`postcss-import` + Tailwind utilities layer, **preflight off**).
- `legacy.css` — Original shell (nav, footer, home hero).
- `inner-pages.css` — Features, industries, contact, demo, login.
- `wpforms-mountsol.css` — Scoped WPForms presentation.

Production file: `assets/css/app.css` (generated; **always run `npm run build` before `npm run zip`** so the archive ships compiled CSS).

Commands:

```bash
npm install
npm run build
npm run zip
```

## Forms (WPForms)

- **Appearance → Customize → MountSol forms**: set **demo** and **contact** form IDs after you publish forms in WPForms.
- Field parity reference: `docs/forms/demo-form-fields.json` (matches `Mountsol.org/components/demo-form.tsx`).
- Use **WP Mail SMTP** (or host SMTP) for deliverability.

## Development

- PHP: run `php -l` on `*.php` where available.
- Bump `Version` in `style.css` when shipping a new ZIP.

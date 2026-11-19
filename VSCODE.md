# VS Code bridge — ereteti-sacco

This is how Muse (Archie) and your VS Code stay linked for this project.
There is no direct remote control: GitHub is the bridge. Archie pushes
corrections to GitHub, and you pull them into VS Code.

## Link VS Code to the repo (first time only)

1. In VS Code, press `Ctrl+Shift+P`, type `Git: Clone`, press Enter.
2. Paste this URL and press Enter:
   `https://github.com/otienomosesamer-lab/ereteti-sacco.git`
3. Choose a folder to put it in (for example your Desktop), then click
   **Open** when VS Code asks.
4. If VS Code asks you to sign in to GitHub, sign in as
   `otienomosesamer-lab`.

That folder is now linked. If you already have a copy of the project in
another folder (for example `ereteti-sacco-main` on your Desktop), leave
that folder alone as a backup — do not try to merge it by hand.

## Every time Archie pushes a correction

1. In VS Code, open the Source Control view (the branches icon on the left).
2. Click the `...` menu → **Pull**. Or click the sync arrows at the bottom
   left of the status bar.
3. The new files appear in your folder. If VS Code reports a conflict,
   stop and tell Archie what it says — do not force anything.

## Pushing your own changes (Lab 6 and later)

1. In the Source Control view, write a short message in the message box,
   for example `Lab 6 - ...`, and click **Commit**.
2. Then **Sync** (the arrows at the bottom left), or `...` → **Push**.
3. Check on GitHub that your commit is there.

## Running the site

VS Code is for editing. The site itself runs from XAMPP:

1. Copy the files from your VS Code folder into
   `C:\xampp\htdocs\ereteti-sacco` (overwrite when asked).
2. In the XAMPP control panel, start Apache and MySQL.
3. Open `http://localhost/ereteti-sacco/index.php`.

The database (`ereteti-lab5.sql`) lives in MySQL, not in this repo —
never add the `.sql` file here, and never push `db-check.php`.

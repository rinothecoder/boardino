=== Boardino ===
Contributors: rinodeboer
Tags: kanban, board, tasks, comments
Requires at least: 6.4
Tested up to: 7.1
Requires PHP: 8.0
Stable tag: 0.1.28
License: GPLv2 or later

A simple shared board inside WordPress.

== Description ==
One board with draggable cards, custom columns, one category and multiple assignees per card, comments, and image attachments. A card opens in an overlapping side panel. Existing card edits save when the panel closes. Inline category editing, an image lightbox, and the WordPress media selector keep the work inside the board. Select WordPress user roles in Settings to control board access and assignment options. Administrators always retain access to Settings.

Task and comment images use the standard Media Library. Add up to 10 task images below the description; these appear inside the task only. Folderino is optional: when active, choose a media folder in Boardino Settings. On a fresh installation with Folderino active, a Boards folder is created or reused. Without Folderino, images still upload normally. Changing the folder affects new uploads only.

Cards and comments stay in WordPress. Deactivating Boardino preserves all data. Archived cards can be restored. No data is removed on uninstall.

== Installation ==
1. Upload boardino.zip through Plugins > Add Plugin > Upload Plugin.
2. Activate Boardino.
3. Open Boardino > Settings to select user roles and categories.
4. Open the board and add your first card.

== Changelog ==
= 0.1.28 =
One icon size for the whole plugin (16px), set in a single place, so icons in buttons, pop-ups and the card panel match.
= 0.1.27 =
Edit column window: Move left and Move right sit at opposite sides, Cancel became a close X in the corner, and Delete is a red button like Delete all forever. The trash icon on Delete all forever is smaller.
= 0.1.26 =
Tidy the Edit column window: a smaller pencil icon, a Delete button with a trash icon, even spacing, arrows next to their labels, and no busy cursor on disabled buttons.
= 0.1.25 =
Settings save automatically and show a short Settings saved message, so there is no Save button. The pencil icon on a column opens a small window to rename the column, move it left or right, or remove it.
= 0.1.24 =
Switch between Board, Archive and Settings without reloading the page. Remove the Back to board button and the Columns section from Settings, since columns are managed on the board.
= 0.1.23 =
Close the card panel with a short slide and fade instead of disappearing at once.
= 0.1.22 =
Open the card panel more smoothly: the dark backdrop now fades in together with the panel sliding in, and focusing the title no longer makes the panel jump.
= 0.1.21 =
Remove the board title and subtitle above the toolbar. Add card (or Delete all forever in the archive) now sits at the right end of the toolbar, after the card count. Delete all forever is a red button with a trash icon.
= 0.1.20 =
Center the search icon vertically and give it more space before the placeholder text.
= 0.1.19 =
Archived cards now have their own Archive tab in the menu, replacing the view dropdown. The comment count on a card matches the archive icon in size and hover, and opens the card.
= 0.1.18 =
Archive a card straight from the board with the small archive icon on the card. The card panel now uses the archive icon too, instead of a trash can.
= 0.1.17 =
Delete archived cards for good, one by one or all at once. Cards that stay in Done for 30 days move to the archive automatically (changeable in Settings). Remove empty columns directly on the board.
= 0.1.16 =
Add WordPress abilities so AI agents can read the board, create, update, move and archive cards, and add comments. They use the same checks as the board itself.

= 0.1.15 =
Close the panel after card creation and put new cards first. Show current WordPress avatars, support multiple assignees, and add task images independently from comments. Use compact wrapping people choices and role-based access settings. Simplify card metadata and remove Status and No category controls from card details. Keep existing individual access until roles are first saved. Preserve the public updater and MCP abilities, including support for multiple assignees and task images.

= 0.1.13 =
Add Check for updates to the WordPress plugin row, with a clear result after checking. Includes the MCP abilities introduced in 0.1.12.

= 0.1.12 =
Add WordPress Abilities API tools for cards, comments, columns, and categories, with existing board permissions and concurrency checks. Requires WordPress 6.9+ for abilities; the ordinary board remains compatible with WordPress 6.4+.

= 0.1.11 =
Give Add column the same subtle background and border as the board columns.

= 0.1.10 =
Add columns directly on the board. New columns are immediately available for cards and status selection.

= 0.1.9 =
Use the canonical lowercase GitHub repository name for updates.

= 0.1.8 =
Make the manual Check for updates button work alongside the board forms.

= 0.1.7 =
GitHub release updates and a manual check in Boardino Settings.

= 0.1.6 =
Compact card details, categories, comments, media uploads, and optional Folderino integration.

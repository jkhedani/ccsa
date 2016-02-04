# CCSA Families
Documentation for WordPress Theme and Build
WordPress Version 4.4.1
Parent Theme: Maisha (https://theme.wordpress.com/themes/maisha/)
Rev Feb. 2015


## For WordPress Admins

### Log in

Log in using the following link:
http://ccsafamilies.org/login

### Adding new users

Create new users by logging in as an admin and going to:

                Sidebar Menu > Users > Add New.

### Permissions

Permission structures conform to WordPress standards and can be manipulated by
simply changing the role of the user by editing that user. (Sidebar Menu > Users) You can also find more specifics here:

https://codex.wordpress.org/Roles_and_Capabilities

### Updating menus & Navigation

Update any of the site's navigation:

                Sidebar Menu > Appearance > Menus

Here there are two menus you'll be able to manage. Social Media and the primary menu in the header. To edit a menu:

1. select a menu from the drop down and click "Select".
2. Add pages, posts or custom links from the left sidebar.
3. Be sure to save your changes.

> Note: Remember that menus have translated languages that also need to be updated when the structure changes.


### Updating footer content

We're using widgets to populate the footer. To edit, navigate to:

                Sidebar Menu > Appearance > Widgets

Look for the "Footer Widget Area" dropdown and select the widget you wish to edit.

> Note: Remember that menus have translation counterparts that need to be updated when content changes.

### Updating sliders

To update sliders, navigate to:

                Sidebar Menu > Soliloquy

To add new images to the slider, drop images into the dotted outline square or select images that you have already uploaded.

In order to edit content, click on the blue "i" above an image that has been added to the slider. Here you can edit alt text but more importantly edit the caption that will be displayed over the image.

In order to rearrange slide order, simply drag and move images to the desired position.

Be sure to update your changes.

> Note: Remember that every slider has a translated counterpart that needs to be updated any time content changes.

### Updating general theme elements

To edit any of the following:

- Site Title
- Logo
- Favicon

Navigate to:

                Sidebar Menu > Appearance > Customize


### Working with translations

Translations for content will be addressed in this document where the content is addressed.

In order to update general theme strings, navigate to:

                Sidebar Menu > WPML > String Translations

General strings include things like Admin menu views, dates (like names of months) or text like "Previous" or "Next" for various UI elements.

> Note: Be sure to to confirm the translation when saving by selecting the "Translation is complete" checkbox.

### Updating content

> Note: Be sure to make edits to Spanish clones of

##### Need to revert changes you made
Sometimes WordPress may remove content you've made and may send you to a state that is undesirable. You can easily get back previous saves by using the revision tool on any page and post:

1. Edit any page when logged in
2. Navigate to the right hand sidebar and look for Publish > Revisions.
3. Click "Browse"
4. Scroll through until you see a desirable revision.
5. Restore.

##### ACF
Some of the content areas use Advanced Custom Fields to populate fields. These fields can be edited but should be done by someone who is comfortable working with ACF as they require some function calls in the theme. ACF is the most used plugin out in WordPress so most users/developers should have no problem working with these fields.

I've used inline documentation within the WordPress interface to make it easier to reference ACF documentation.


##### Image sizes
Since we'll be cropping all images to square ratio (1:1), it would be best to either have an exact ratio or one that is wider than taller.


##### Linking to the subscribe at the top of the page
In order to send users to the top of the page to subscribe, simply replace any <a> tag URL with:

                <a href="#subscribe">Subscribe</a>

##### Contact Form
To edit the contact form simply go to:

                Sidebar Menu > Contact > Contact Forms

Here you have access to where emails get send, what those emails will contain and the fields
with which users will engaged the form with.

> Note: Contact forms have a Spanish duplicate that must be updated in tandem with the English form


# Developers Notes

### Updating CSS
I used LESS to compile the style.css so all style edits should be made to the less/style.less.
Use any LESS compiler you wish but I've created a simple Gulp file to make the process easy:

    $ cd maisha-child
    $ gulp

### Managing the WordPress Build
I used a WP-Skeleton-esque deployment to make it easier to push WP changes to the live site.
The only things the build doesn't manage are DBs and media. Use the following repo to make
theme edits to the site on a local build:

https://github.com/jkhedani/ccsa

Remember, everything is version controlled so if you make live changes to the site, be sure
to commit them to the remote repo to avoid any conflicts with the build.

#!/bin/sh
projectname=`pwd | awk 'BEGIN {FS="/"} {print $NF}'`

# remove original git origin
echo - Removing git origin.
git remote rm origin


echo - Changing project name to $projectname.
find ./wp -type f -print0 | xargs -0 sed -i "s/underscores/$projectname/g"


# Rename underscore theme
echo - Renaming Underscore theme to $projectname.
[ ! -d wp/wp-content/themes/underscores ] && git mv wp/wp-content/themes/underscores wp/wp-content/themes/underscores
sed -i "s/Theme Name: underscores/Theme Name: underscores/" wp/wp-content/themes/underscores/style.css
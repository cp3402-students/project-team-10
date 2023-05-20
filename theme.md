**Theme**

Currently the theme is built off of WP Rig, under the themes folder and the wprig-master folder, exported into the TTCMA folder via npm run bundle.

The theme is designed to look semi-country, but still be readable and inviting. A beige background to match a country theme, and a slightly country themed font (Rockwell)

Any changes to the theme can be done under the wprig-master folder, under assets > src and then through the many sorted .css files in there.

There are only two current changes to the base theme listed below

The font family for the website is defined under _custom-properties.css, under the Typography comment, and called under _typography.css from the variable

The background colour for the website is defined under the _custom-properties.css, and called under global.css and under the #Layouts part from the variable, however this is currently hidden by the background image on the website theme itself.


If any further changes are made to the files here to update the theme, one must run "npm run bundle" in the terminal inside the wprig-master folder to export any updates to the TTCMA theme folder
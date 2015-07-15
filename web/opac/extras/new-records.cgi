#!/bin/bash
echo -n "Location: /"
wget -o /dev/null -O - 'http://localhost/opac/extras/feed/freshmeat/rss2/biblio/import/10/' | grep 'rel="OPAC"' | cut -f2 -d'>' | cut -f1 -d'<' | cut -f4- -d\/
echo "Status: 302"
echo ""

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-us">
<head>
<title>jCarousel</title>
<link href="/slider/css/style.css" rel="stylesheet" type="text/css" />
<link href="/slider/skin/jcarousel-tadl12u96.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="/js/jquery.jcarousel.min.js"></script>


<script type="text/javascript">
jQuery.noConflict();

var mycarousel_itemList = [
{id: "579216", title: "Harry Potter and the Deathly Hallows"},
{id: "1449005", title: "Not that Kind of Girl"},
{id: "1136491", title: "The Fault in Our Stars"},
{id: "1398451", title: "Top Secret Twenty-One"},
{id: "1392347", title: "All the Light We Cannot See"},
{id: "1029229", title: "Game of Thrones"},
{id: "1130638", title: "Heaven is Real"},
{id: "1341918", title: "Allegiant"},
{id: "1341911", title: "The Goldfinch"},
{id: "1305252", title: "Orphan Train"},
{id: "1165260", title: "Gone Girl: A Novel"},
{id: "1313690", title: "To Kill A Mockingbird"},
{id: "394433", title: "The Giving Tree"},
{id: "1243709", title: "Lord of the Flies"},
{id: "1453383", title: "Gray Mountain"},
{id: "1448288", title: "Killing Patton"},
{id: "1450401", title: "Being Mortal"},
{id: "539409", title: "The Alchemist"},
{id: "1347490", title: "Cross my Heart"},
{id: "1022943", title: "If I Stay"},
{id: "582837", title: "Looking for Alaska"},
{id: "1453813", title: "The Ice Dragon"},
{id: "1313788", title: "Unbroken"},
];

//mycarousel_itemList.sort(function() { return 0.5 - Math.random();});
/* mycarousel_itemList.unshift({id: "46676386", title: "Alpha"}); */

function mycarousel_itemLoadCallback(carousel, state)
{
    for (var i = carousel.first; i <= carousel.last; i++) {
        if (carousel.has(i)) {
            continue;
        }

        if (i > mycarousel_itemList.length) {
            break;
        }

        carousel.add(i, mycarousel_getItemHTML(mycarousel_itemList[i-1]));
    }
};

/**
 * Item html creation helper.
 */
function mycarousel_getItemHTML(item)
{
    return '<a target="_top" href="http://catalog.sage.eou.edu/eg/opac/record/' + item.id + '?loc=1"><img src="http://catalog.sage.eou.edu/opac/extras/ac/jacket/medium/r/' + item.id + '" width="96" onerror="this.src=\'https://catalog.sage.eou.edu/opac/images/blank.png\'" height="120" alt="' + item.title + '" /><br />' + item.title + '</a>';
};

jQuery(document).ready(function() {
    jQuery('#mycarousel').jcarousel({
        size: mycarousel_itemList.length,
        visible: 8,
        itemLoadCallback: {onBeforeAnimation: mycarousel_itemLoadCallback}
    });
});

</script>
</head>
<body>
<div id="wrap">
  <ul id="mycarousel" class="jcarousel-skin-tadl12u96">
    <!-- The content will be dynamically loaded in here -->
  </ul>

</div>
</body>
</html>

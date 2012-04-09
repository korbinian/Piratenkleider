/*
 * jQuery Twitter Script
 */



var twitter_name = "piratenpartei";
var twitter_count = 3;
var callback_name = "tweet_callback";
var twitter_search = "http://twitter.com/statuses/user_timeline";
var return_type = "json";
( function() {
var ts = document.createElement('script');
ts.type = 'text/javascript';
ts.async = true;
ts.src = twitter_search + "." + return_type + "?screen_name=" + twitter_name + "&count=" + twitter_count + "&callback=" + callback_name;
( document.getElementsByTagName( 'head' )[ 0 ] || document.getElementsByTagName( 'body' )[ 0 ] ).appendChild( ts );
} )();



function tweet_callback( data ) {
$.each( data, function( i, tweet ) {
if( tweet.text != undefined ) {
var text = tweet.text.toString().replace( /(\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/ig, '<a href="$1">$1</a>' ).replace( /(^|\s)@(\w+)/, '<a href="http://www.twitter.com/$2">@$2</a>' ).replace( /[#]+[A-Za-z0-9-_]+/ig, function(t) { var tag = t.replace("#","%23"); return t.link("http://search.twitter.com/search?q="+tag); } );
$( "#tweet_container" ).append( "<li>" + text + "</li><hr>");
}
} );
}

























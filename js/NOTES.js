// DATABASE SCHEMA
// jamie's notes
[{
	id:"8943589345809342"
	name:"Power Pad",
	image:"http://foo.com/img.jpg",
	info_link:"http://wikipedia.com/blop",
	wins:0,
	losses:0
},{...}]

// API CALLS
// getThings.php
// - thing2 has to be something other than thing1
// - may want to keep track of things that have been shown
[{},{}]

// winnerChosen.php?winnerId=8943589345809342&loserId=1
// - send up to the server the winner id and the loser id
{
	results:[{},{}],
	nextThings:[]
}
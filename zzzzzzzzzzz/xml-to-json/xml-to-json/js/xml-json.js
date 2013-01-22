var getFeed = function(feed) {
	var url = feed;
	url += "&callback=parse_res"
	var scripttag = document.createElement("script");
	scripttag.setAttribute("type","text/javascript");
	scripttag.setAttribute("charset","utf-8");
	scripttag.setAttribute("src",url);
	document.getElementsByTagName("body")[0].appendChild(scripttag);
}

var parse_res = function(data) {
	var entries = data.responseData.feed.entries;
	var container = document.getElementById("post_results");
	var list = document.createElement("ul");
	while (container.hasChildNodes()) {
		container.removeChild(container.lastChild);
		}
	 for (var i=0; i<entries.length; i++){
		 var listItem = document.createElement("li");
				var title = entries[i].title;	
				 // create the headline link
				 var link = document.createElement("a");
				 link.setAttribute("href", entries[i].link);
				 link.setAttribute("target","_blank");
				 var text = document.createTextNode(title);
				 link.appendChild(text);
				 // insert the markup
				 listItem.appendChild(link);
				 list.appendChild(listItem);
				 container.appendChild(list);
			}
}



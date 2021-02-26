function openTab(category, buttonName){
	var x, pages;

	pages = document.getElementsByClassName("tab-page");
	if(category.localeCompare("groupAll") == 0){
		for(x = 0; x < pages.length; x++){
			pages[x].style.display = "block";
		}
	}else{
		for(x = 0; x < pages.length; x++){
			if(pages[x].id.localeCompare(category) == 0){
				pages[x].style.display = "block";
			}else{
				pages[x].style.display = "none";
			}
		}
	}
}

function LoadEvents(){
	var buttonAll = document.getElementById("all");
	var buttonAcademic = document.getElementById("academic");
	var buttonArt = document.getElementById("art");
	var buttonService = document.getElementById("service");
	var buttonReligious = document.getElementById("religious");
	var buttonSport = document.getElementById("sports");

	buttonAll.addEventListener('click', function(){openTab("groupAll", "all")});
	buttonAcademic.addEventListener('click', function(){openTab("groupAcademic", "academic")});
	buttonArt.addEventListener('click', function(){openTab("groupArt", "art")});
	buttonService.addEventListener('click', function(){openTab("groupService", "service")});
	buttonReligious.addEventListener('click', function(){openTab("groupReligious", "religious")});
	buttonSport.addEventListener('click', function(){openTab("groupSports", "sports")});
	openTab("groupAll","all");
}

document.addEventListener('DOMContentLoaded', LoadEvents);

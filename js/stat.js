var app = angular.module('application', []);

var quot_p = 90;
var quot_js = 50;
var quot_j = 70;

var lev_p = 'Fx';
var lev_js = 'Fx';
var lev_j = 'Fx';


if(50 < quot_p){
	if(quot_p < 60){
		lev_p = 'E';
	}
}
if(59 < quot_p){
	if(quot_p < 70){
		lev_p = 'D';
	}
}
if(69 < quot_p){
	if(quot_p < 80){
		lev_p = 'C';
	}
}
if(79 < quot_p){
	if(quot_p < 90){
		lev_p = 'B';
	}
}
if(quot_p > 89){
	lev_p = 'A';
}
	

if(50 < quot_js){
	if(quot_js < 60){
		lev_js = 'E';
	}
}
if(59 < quot_js){
	if(quot_js < 70){
		lev_js = 'D';
	}
}
if(69 < quot_js){
	if(quot_js < 80){
		lev_js = 'C';
	}
}
if(79 < quot_js){
	if(quot_js < 90){
		lev_js = 'B';
	}
}
if(quot_js > 89){
	lev_js = 'A';
}

if(50 < quot_j){
	if(quot_j < 60){
		lev_j = 'E';
	}
}
if(59 < quot_j){
	if(quot_j < 70){
		lev_j = 'D';
	}
}
if(69 < quot_j){
	if(quot_j < 80){
		lev_j = 'C';
	}
}
if(79 < quot_j){
	if(quot_j < 90){
		lev_j = 'B';
	}
}
if(quot_j > 89){
	lev_j = 'A';
}







app.controller('InfoController', function() {
  this.areas = [
    {title: 'Python', quotient: quot_p, level: lev_p, color: '#F2721D'},
    {title: 'Javascript', quotient: quot_js, level: lev_js, color: '#9BFAF8'},
    {title: 'Java', quotient: quot_j, level: lev_j, color: '#FF45A5'},
  ];
  
  this.currentIndex = 0;
  this.current = this.areas[this.currentIndex];
  
  this.select = function(index) {
    this.currentIndex = index;
    this.current = this.areas[index];
  };
  
  
  
});

app.directive('templateArea', function() {
  return {
    restrict: 'E',
    template: $("#template").html(),
    scope: {
      area: '='
    },
    link: function(scope, element, attrs) {
      var area = scope.area;
      element
        .find(".progress")
        .css({"background-color": area.color,
              "width": 100*(area.quotient/100)+"%", });
    },
  };
});